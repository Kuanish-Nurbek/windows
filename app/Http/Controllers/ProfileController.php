<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show(){
        $profile = Profile::find(2);
        dump($profile -> name);
        dump($profile -> surname);
        dump($profile -> user -> login);
        dump($profile -> user -> password);
    }
}
