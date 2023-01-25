<?php

namespace App\View\Components\Header;


use Illuminate\View\Component;

use Illuminate\Support\Facades\Auth;


class Header extends Component
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
        // dd(Auth::check());
        // dd(Auth::guard('admin') );
        // dd(Auth::guard('admin')->user());
        // Auth::guard('admin') -> logout();
        // dd( Auth::user());
        // dd(  url()->current());

        if(Auth::check()){
            $email = Auth::user()->email;
            $id = Auth::user() -> id;
        }else {
            $email = '';
            $id = '';
        }
        return view('components.header.header',[
            'id' => $id,
            'email' => $email,
            'check' => Auth::check(),
        ]);
    }
}
