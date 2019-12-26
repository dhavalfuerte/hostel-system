<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\facilities;
class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientIndex()
    {
        $result= facilities::all();
        return view('Client.Facilities', compact('result'));
        
    }

    public function index()
    {
        $result= facilities::paginate(5);
        return view('admin.facilities.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.facilities.create');
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
            'facilities' => ['required', 'string'],
      
        ]);
        $obj=new facilities();
        $obj->facilities=$request->input('facilities');
       
        $obj->save();

        return redirect('adminFacilities');
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
        $facilities = facilities::findOrFail($id);

        return view('admin.facilities.edit', compact('facilities'));
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
        $facilities = facilities::findOrFail($id);

        $request->validate([
            'facilities' => ['required', 'string'],
      
        ]);

        $facilities->update([
            'facilities' => $request->facilities,
             ]);

        return redirect('adminFacilities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facilities = facilities::findOrFail($id);

        $facilities->delete();

        return redirect('adminFacilities');
    }
}
