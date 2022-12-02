<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin() {
        return view('auth.signin');
    }

    public function signin_check(Request $request) {
        $valid = $request->validate([
            'username' => 'required|min:4|max:20',
            'email' => 'required|min:4|max:20',
            'password' => 'required|min:6|max:30',
        ]);

        $signin_check = new Contact();
        $signin_check->username = $request->input('username');
        $signin_check->email = $request->input('email');
        $signin_check->password = $request->input('password');

        $signin_check->save();

        return redirect()->route('signin');

    }
}