<?php

namespace App\View\Components\Main;

use Illuminate\View\Component;
use App\Models\Category;

class Nav extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $message;

    public function __construct($type=null,$message=null)
    {
        $this -> type = $type;
        $this -> message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $categories = Category::all();

        return view('components.main.nav', [
            'categories' => $categories,
            'type' => $this -> type,
            'message' => $this -> message,
        ]);
    }
}
