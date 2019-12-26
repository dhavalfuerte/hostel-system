<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notice;
class AdminNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $result= notice::paginate(5);
        return view('admin.notice.index', compact('result'));
        
    }
    
    public function clientIndex()
    {
        $result= notice::all();
        return view('Client.notice', compact('result'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
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
            'notice' => ['required', 'string'],
      
        ]);

        $obj=new notice();
        $obj->notice=$request->input('notice');
       
        $obj->save();

        return redirect('adminNotice');
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
        $notice = notice::findOrFail($id);

        return view('admin.notice.edit', compact('notice'));
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
        $notice = notice::findOrFail($id);

        $request->validate([
            'notice' => ['required', 'string'],
      
        ]);

        $notice->update([
            'notice' => $request->notice,
             ]);

        return redirect('adminNotice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = notice::findOrFail($id);

        $notice->delete();

        return redirect('adminNotice');
    }
}
