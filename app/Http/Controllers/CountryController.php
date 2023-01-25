<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;

class CountryController extends Controller
{
    public function show(){
        $country = Country::find(1); // берем у модели страну по id (вернет объект)
        $countries = Country::all(); // берем у модели все страны (вернет массив)

        // если после метода city есть "()" метод своим результатом вернет QB
        // Так как возвращается построитель запросов, то мы можем дальше продолжить цепочку,
        // к примеру, наложив некоторое условие на получаемые города
        $cities = Country::find(1) -> city() -> where('population', '>', 100)->orderBy('population', 'desc') -> get();

        // dump($cities[0]['name']); 
        // dump($cities[0]['population']);
        foreach($cities as $city){
            dump($city);
        }



    }
}
