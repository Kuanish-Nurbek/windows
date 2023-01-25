<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\UrlGenerator;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function showLoginUser(){
        return view('login.loginUser');
    }


    public function showLoginAdmin(){
        return view('login.loginAdmin');
    }


    public function authenticateUser(Request $request) {

        $credentials = $request -> validate([
            'email' =>['required','email'],
            'password' => ['required'],
        ]);


        // dd($credentials);
        if(Auth::guard('web')->attempt(['email' => $credentials['email'], 'password' => $credentials['password'], 'active' => 1])){
            $request -> session() -> regenerate();

            return redirect() -> intended('/post/form');
        }


        return back() -> withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]) ->onlyInput('email');


    }

    public function authenticateAdmin(Request $request) {

        $credentials = $request -> validate([
            'email' =>['required','email'],
            'password' => ['required'],
        ]);


        // dd($credentials);
        if(Auth::guard('admin')->attempt(['email' => $credentials['email'], 'password' => $credentials['password'], 'active' => 1])){
            $request -> session() -> regenerate();

            return redirect() -> intended('/users');
        }


        return back() -> withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]) ->onlyInput('email');


    }


    public function show(){
        return view('myProject.login.login');
    }

    public function auth(LoginRequest $request){
        $validated = $request -> validated();
        // dd($validated['email']);

        if(Auth::guard('admin') -> attempt(['email' => $validated['email'], 'password' => $validated['password'] ])){
            $request -> session() -> regenerate();
            // return redirect('/');
            return redirect() -> route('adminLayout');

        } elseif(Auth::guard('web')->attempt(['email' => $validated['email'], 'password' => $validated['password'],'active'=> 0])){
            $request -> session() -> regenerate();
            // return redirect() -> route('showLayout');
            return redirect('/');

            // $check = DB::table('users')->where('email',$validated['email']) ->first();
            // // dd($check -> status);
            // if($check -> status == 'admin'){
            //     $request -> session() -> regenerate();
            //     return redirect() -> intended(route('adminLayout'));
            // }else{
            //     $request -> session() -> regenerate();
            //     return redirect() -> intended('/');
            // }

        }else {
            $request -> session() -> put('errorLog','неправильный логин или пороль');
            return redirect('login') -> withInput();
        }
    }

    public function logout(){
        session() -> forget('errorLog');

        Auth::logout();
        Auth::guard('admin')->logout();

       return redirect('/');
    }
}
