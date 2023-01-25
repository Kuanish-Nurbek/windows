<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistrController extends Controller
{
    public function show(){
        return view('myProject.registr.registr');
    }

    public function validation(RegistrRequest $request){


        DB::table('users') -> insert([
            'email' => $request -> validated('email'),
            'password' => Hash::make($request -> validated('password')),
        ]);

        return redirect('login');
    }
}
