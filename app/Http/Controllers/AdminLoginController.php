<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Validator;
use Illuminate\Support\Facades\DB;
use Hash;
class AdminLoginController extends Controller
{
    
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $admin =Admin::all();
       // print_r($users);
        return view('admin.login');
    }
    public function loginsuccess(Request $request)
    {
        /*$data = $request->all();
         $rules = [
                'email' => "required|email",
                'password' => "required",
            ];
            $messages = [
                'email.required' => 'please enter email id',
                'password.required' => 'please enter pasword',
            ];
            $validator = Validator::make($data, $rules, $messages);
            
            if($validator->fails()) {
               
                return back()->withInput()->withErrors($validator);
            }
                
            
            $credentials = $request->only('email', 'password');
           
            
            if (Admin::attempt($credentials)) 
            {
                return redirect('adminContact');
            }
            else
            {
                return redirect('AdminLogin');
            }*/

    $unm = $request->email;
    $pwd = $request->password;

      $q = "select * from admin_login where email='".addslashes($unm)."' and password='".addslashes($pwd)."'";

    $res=DB::select($q);
    if(! empty ($res))
    {
      $request->Session()->put('adminemail',$unm);
      $request->Session()->put('adminstatus',true);
      return redirect("admindashboard");
    }
    else {
        return redirect("AdminLogin");
    }
    }
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session()->forget('adminemail');
        Session()->forget('adminstatus');

        return redirect("AdminLogin");
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
        //
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
        //
    }
}
