<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return view('user.dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function about()
    {
        if(Auth::check()) {
            return view('user.about');
        } else {
            return redirect()->route('login');
        }
    }
}
