<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Auth;

class LoginAdminController extends Controller
{
    
    public function getLoginAdmin()
    {
        return view('loginadmin');
    }


    public function postLoginAdmin(Request $request)
    {

        $rules = [
            'email'    => 'required|email|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        $request->validate($rules,$messages);

        // Validate the form data
        // $this->validate($request, [
        // 'email' => 'required|email',
        // 'password' => 'required'
        // ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()
            ->intended('/homeadm')
            ->with('status','You are Logged in as Admin!');
        
        }else {
            return redirect()->back();
        }

        // if(Auth::guard('admin')->attempt($request->only('email','password'))){
        //     //Authentication passed...
        //     return redirect()
        //         ->intended(route('/homeadmin'))
        //         ->with('status','You are Logged in as Admin!');
        // }
        
        // return redirect()
        // ->back()
        // ->withInput()
        // ->with('error','Login failed, please try again!');
    

    
    // function loginAdmin(Request $send){
    //     $data = Admin::where('username', $send->username)->where('password',$send->password)->get();
        
        
    //     if(count($data)>0){
    //         //login berhasil
    //         Auth::guard('admin')->LoginUsingId($data[0]['id']);
    //         return redirect('/homeadmin');
    //     }else{
    //         return "login gagal";
    //     }
    
     }
    

    function LogoutAdmin(){

        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->LogoutAdmin();
        }
            return redirect()->route('/loginadmin');
        
    }
}
