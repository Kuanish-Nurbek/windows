<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function show(){
        $owner = Mechanic::find(2);
        dump('Mechanic: '.$owner -> name); 
        dump('Car model: '.$owner->car -> model);
        dump('Car owner: '.$owner->carOwner -> name);
    }
}
