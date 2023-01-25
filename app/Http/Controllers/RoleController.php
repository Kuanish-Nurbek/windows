<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;


class RoleController extends Controller
{
    public function show(){
            $role = Role::find(2);

            // $role = Role::with('users') -> find(2);

            // dump($role);

            dump($role->name.' эту роль играет эти актеры');     // хотим узнать сколько актеров играет эту роль
            foreach($role -> users as $user){
                dump($user['login']);
            }
      
    }
}
