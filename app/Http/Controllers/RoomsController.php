<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rooms;
use App\roomstype;
use Illuminate\Validation\Rule;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$result = rooms::with(array('rooms'))->get();
        //$room= rooms::all();
        $room = \DB::table('rooms')->select('rooms.*','roomstype.name')->join('roomstype','roomstype.id','=','rooms.room_type_id')->paginate(5);
        return view('admin.rooms.index',compact('room')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomTypes = roomstype::all();
        return view('admin.rooms.create')
            ->with('roomTypes', $roomTypes)
            ->with('selroomtype',null); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = rooms::create([
            'room_type_id' => $request->room_type_id,
            'room_no'      => $request->room_no,
            'description'  => $request->description,
        ]);

        return redirect()->route('adminRooms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $rooms = rooms::findOrFail($id);

        $roomTypes = roomstype::all();
        $selroomtype = roomstype::findOrFail($rooms->room_type_id);

        return view('admin.rooms.edit', compact('rooms','roomTypes','selroomtype'));
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
        $room = rooms::findOrFail($id);

        $request->validate([
             'room_type_id' => 'required',
            'room_no'      => ['required', 'string', 'max:255', Rule::unique('rooms')->ignore($room->id)],
            'description'  => 'required|string|max:255',
        ]);

        $room->update([
            'room_type_id' => $request->room_type_id,
            'room_no'      => $request->room_no,
            'description'  => $request->description,
        ]);


        return redirect()->route('adminRooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        print_r($id);
        $room = rooms::findOrFail($id);

        $room->delete();

        return redirect()->route('adminRooms.index');
    }
}
