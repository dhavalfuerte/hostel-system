<?php

namespace App\Http\Controllers;
use App\rooms;
use App\user;
use Redirect;
use App\roomsallocate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoomsallocateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $room = \DB::table('room_allocate')->select('room_allocate.*','rooms.room_no','user.first_name')
                ->join('rooms','room_allocate.room_id','=','rooms.id')
                ->join('user','room_allocate.user_id','=','user.id')
                ->paginate(8);
        return view('admin.roomsallocate.index',compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $rooms = rooms::all();
      $user = user::all();
        return view('admin.roomsallocate.create')
            ->with('rooms', $rooms)
            ->with('user', $user)
             ->with('seluser',null)
                ->with('selroom',null);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $room = \DB::table('room_allocate')->where('user_id','=',$request->user_id)->get();
       if(count($room))
       {
           return Redirect::back()->withErrors(["errors" =>'Duplicate User']);
       }
        else {
            $request->validate([
                 'room_id' => 'required',
                  'bed'  => 'required|Numeric',
                    ]);
                $roomsallocate = roomsallocate::create([
                'user_id' => $request->user_id,
                'room_id' => $request->room_id,
                'bed'  => $request->bed,

             ]);
            return redirect()->route('adminRoomsallocate.index');   
       }
      
       
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     **/
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomsallocate = roomsallocate::findOrFail($id);
        $user = user::all();
        $seluser = user::findOrFail($roomsallocate->user_id);
        $room= rooms::all();
        $selroom = rooms::findOrFail($roomsallocate->room_id);
        
        
        return view('admin.roomsallocate.edit', compact('room','roomsallocate','user','seluser','selroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roomallocate = roomsallocate::findOrFail($id);

         $user = \DB::table('room_allocate')->where('user_id','=',$request->user_id)->get();
         
         
         
        if(count($user) != 0)
        {
           if($user[0]->user_id != $roomallocate->user_id)
            return Redirect::back()->withErrors(["errors" =>'User Has Already Room']);
           else
           {
               $request->validate([
                 'room_id' => 'required',
                  'bed'  => 'required|numeric|max:1',
                    ]);
                $roomallocate->update([
                    'user_id' => $request->user_id,
                    'room_id'      => $request->room_id,
                    'bed'  => $request->bed,
            ]);

            return redirect()->route('adminRoomsallocate.index');
           }
       }
       else
       {
            $request->validate([
                 'room_id' => 'required',
                  'bed'  => 'required|numeric|max:1',
                    ]);
                $roomallocate->update([
                    'user_id' => $request->user_id,
                    'room_id'      => $request->room_id,
                    'bed'  => $request->bed,
        ]);

            return redirect()->route('adminRoomsallocate.index');   
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = roomsallocate::findOrFail($id);

        $room->delete();

        return redirect()->route('adminRoomsallocate.index');
    }
}
