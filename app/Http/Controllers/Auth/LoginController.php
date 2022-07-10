<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index() 
    { 
        return view('backend.auth.login'); 
    }

    public function authentikasi(Request $request)
    {
        $validasi = $request ->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($validasi)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login Gagal !');

    }
    public function signup() 
    { 
        return view('backend.auth.register'); 
    }

    public function register(Request $request) 
    { 
        $data = $request->validate([ 
        'name' => ['required', 'min:3', 'max:255', 'unique:users'], 
        'email' => 'required|email|unique:users', 
        'password' => 'required|min:5|max:255', 
        ]); 

        $input = $request->all();
        $input['password'] = bcrypt($data['password']);
        
        User::create($input);

        $request->session()->flash('success', 'Registration Successfull!, Please Login');
        return redirect('/login');
    }

    public function loginout() 
    { 
        Auth::logout(); 
        request()->session()->invalidate(); 
        request()->session()->regenerateToken(); 
        return redirect('/'); 
    }
}
