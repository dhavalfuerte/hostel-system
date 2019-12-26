<?php

namespace App\Http\Controllers;

use App\roomstype;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class RoomstypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= roomstype::paginate(5);
        return view('admin.roomstype.index',compact('result')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.roomstype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:20',
            'description' => 'required|min:3',
            'capacity' => 'required|numeric',
            'floor'=>'required|numeric',
            'fees'=>'required|numeric'
        ]);
        
        $obj=new roomstype();
        $obj->name=$request->input('name');
        $obj->description=$request->input('description');
        $obj->capacity=$request->input('capacity');
        $obj->floor=$request->input('floor');
        $obj->fees=$request->input('fees');

        $obj->save();

        return redirect('adminRoomstype');
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
        $roomstype = roomstype::findOrFail($id);

        return view('admin.roomstype.edit', compact('roomstype'));
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
        $roomstype = roomstype::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:20', Rule::unique('roomstype')->ignore($roomstype->id)],
            'description' => 'required|min:3',
            'capacity' => 'required|numeric',
            'floor'=>'required|numeric',
            'fees'=>'required|numeric'
        ]);

        $roomstype->update([
            'name' => $request->name,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'floor'=>$request->floor,
            'fees'=>$request->fees,
        ]);

        return redirect()->route('adminRoomstype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomstype = roomstype::findOrFail($id);

        $roomstype->delete();

        return redirect('adminRoomstype');
    }
}
