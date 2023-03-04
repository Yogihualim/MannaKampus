<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class admin_Controller extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect('dashboard');
        } else {
            return view('Admin.login');
        }

    }

    public function loginaksi(Request $request){
        $data = [
            'name' => $request->input('name'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect('dashboard');
        } else {
            Session::flash('erroe', 'Email atau Password Salah! Coba Lagi');
            return redirect('/admin');
        }
    }

    public function logoutaksi(){
        Auth::logout();
        return redirect('/admin');
    }
}
