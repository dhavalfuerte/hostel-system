<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complain;

class AdminComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= complain::paginate(5);
        return view('admin.complain.index',compact('result'));   
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        
     public function clientIndex()
    {
        return view('Client.complain');   
     }
   
    public function create()
    {
        //
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
            'email' => ['required', 'string'],
            'contactno' => ['required','max:10'],
            'complain' => ['required', 'string'],
      
        ]);
        $obj=new complain();
        $obj->emailid=$request->input('email');
        $obj->contactno=$request->input('contactno');
        $obj->complain=$request->input('complain');
       
        $obj->save();

        return redirect('complain')->with('message', 'Thank You for Complain');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $complain = complain::findOrFail($id);

        $complain->delete();

        return redirect('adminComplain');
    }
}
