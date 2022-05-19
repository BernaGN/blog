<?php

namespace App\View\Components\buttons;

use Illuminate\View\Component;

class A extends Component
{
    public $route, $text, $class, $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $id = "", $text = "Back", $class = "btn btn-link")
    {
        $this->route = $route;
        $this->text = $text;
        $this->class = $class;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.a');
    }
}
