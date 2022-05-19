<?php

namespace App\View\Components\buttons;

use Illuminate\View\Component;

class button extends Component
{
    public $class, $type, $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class, $text = "Options", $type = "button")
    {
        $this->class = $class;
        $this->text = $text;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buttons.button');
    }
}
