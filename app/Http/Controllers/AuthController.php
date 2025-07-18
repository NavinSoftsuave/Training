<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            session(['user_id' => $user->id]); // Save session
            return redirect('/home');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function register(Request $request)
    {
         $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
         ]);

            User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
         ]);
          
        return redirect('/home');
    }
    public function register_form(){
        return view('register');
    }
        public function login_form(){
        return view('login');
        }

 public function home()
    {
        if (!session()->has('user_id')) {
            return redirect('/login')->with('error', 'Please log in first.');
        }

        return view('home');
    }

}
