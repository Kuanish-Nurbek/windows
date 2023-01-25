<?php

namespace App\View\Components\Main;

use Illuminate\View\Component;
use App\Models\User;

class Users extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $users = User::all();


        return view('components.main.users',[
            'users' => $users,
        ]);
    }
}
