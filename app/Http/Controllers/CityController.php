<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\City;


class CityController extends Controller
	{
		public function show()
		{
			$cities = City::all();
			dump($cities);
            
            foreach($cities as $city){
                
            }
			
		}
	}

