<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    public $name, $classBtn, $route, $buttonText;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $route, $buttonText = "Regresar", $classBtn = "link")
    {
        $this->name = $name;
        $this->route = $route;
        $this->buttonText = $buttonText;
        $this->classBtn = $classBtn;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
