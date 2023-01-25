<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    // Получить владельца машины
    public function carOwner(){
        return $this -> hasOneThrough(
            Owner::class,   // имя последней модели
            Car::class, // имя сводной модели
            'mechanic_id', // Внешний ключ в таблице `cars` ...
            'car_id', // Внешний ключ в таблице `owners` ...
            'id', // Локальный ключ в таблице `mechanics` ...
            'id' // Локальный ключ в таблице `cars` ...
        );
    }

    // Получить ремонтируемую машину  
    public function car(){
        return $this -> hasOne(
            Car::class,
            'mechanic_id',  // Внешний ключ в таблице `cars`
            'id',           // Локальный ключ в таблице `cars`
        );
    }
}
