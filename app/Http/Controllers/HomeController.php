<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\roomsallocate;
use App\rooms;
use App\roomstype;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function logout()
    {
    	Auth::guard('admin')->logout();

        Auth::guard('web')->logout();
        session()->flush();
        session()->regenerate();
    	Session::flush();
    	return redirect('login');
    }
    public function roomdetails()
    {
        $id=Auth::user()->id;
        $roomsallocate=roomsallocate::findorfail($id);
        //print_r($roomsallocate->room_id);
        $rooms = rooms::findOrFail($roomsallocate->room_id);
        //print_r($rooms->room_type_id);
        $roomstype = roomstype::findorfail($rooms->room_type_id);
        //print_r($roomstype->name);

        return view('Client.roomdetails',compact('roomsallocate','rooms','roomstype'));
        

    }

    public function feesDetails()
    {
         $result= roomstype::all();
        return view('Client.feesdetails',compact('result')); 
    }
}
