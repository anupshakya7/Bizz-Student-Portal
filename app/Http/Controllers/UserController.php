<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //Register Start
    public function register()
    {
        return view('authentication.register');
    }

    public function registerSubmit(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($validation);

        if($user) {
            return redirect()->route('login')->with('success', 'User Created Successfully!!!');
        }
    }
    //Register End

    //Login Start
    public function login()
    {
        return view('authentication.login');
    }

    public function loginSubmit(Request $request)
    {
        $validation = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validation)) {
            $request->session()->regenerate();
            if(Auth::check()){
                return redirect()->route('dashboard')->with('login', 'User Login Successfully!!!');
            }else{
                return redirect()->route('login')->with('error', 'User authentication failed.');
            }
            
        } else {
            return redirect()->route('login')->with('error', 'Invalid Credentials, Please try again.');
        }
    }
    //Login End

    //Logout Start
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Logout Successfully!!!');
    }
    //Logout End

}
