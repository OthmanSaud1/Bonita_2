<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    //
    public function create(){
        return view("Register");
    }

    public function storeUser(Request $req){
        $formFields = $req->validate([
            "name" => ["required", "min:3"],
            "email" => ['required','email', Rule::unique('users', 'email')],
            'password'=> 'required|confirmed|min:6'
        ]);
        $formFields['password']= bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth() -> login($user);
        return redirect("/survey") ->with("message", "user has been created");
    }

    public function logout(Request $req){
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect("/")->with('message', "you have been logged out");
    }
    public function login(){
        return view('Login');
    }
    public function loginUser(Request $req){
        $formFields = $req->validate([
            "email" => ['required','email'],
            'password'=> 'required'
        ]);

        if(auth()->attempt($formFields)){
            $req->session()->regenerate();

            return redirect('/')->with('message',"You'r logged in");
        }
        return back()->withErrors(['email' => 'invalid Credentials']);

    }
}
