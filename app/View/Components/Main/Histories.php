<?php

namespace App\View\Components\Main;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\History;

class Histories extends Component
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

        $histories = History::all() -> where('author',Auth::user() -> email) -> all();
        if(!is_countable($histories)){
            $histories = 0;
        }
        return view('components.main.histories',[
            'histories' => $histories,
        ]);
    }
}
