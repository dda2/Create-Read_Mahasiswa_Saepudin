<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:users|alpha_dash|max:20',
            'email'  => 'required|unique:users|email|max:255',
            'password'  => 'required|min:6',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()
            ->route('home')
            ->with('info', 'Pendaftaran berhasil, anda bisa login sekarang');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password'  => 'required',
        ]);

        if(!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
            return redirect()->back()->with('info', 'Data yang Anda Masukan Tidak Valid');
        }

        return redirect()->route('home')->with('info', 'Anda Berhasil Masuk');
    }

    public function getSignout()
    {
        Auth::logout();

        return redirect()->route('home')->with('info', 'Anda Berhasil Keluar');
    }


}