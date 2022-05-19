<?php

namespace App\View\Components\text;

use Illuminate\View\Component;

class Input extends Component
{
    public $type, $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type = "text")
    {
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text.input');
    }
}
