<?php

namespace App\View\Components\text;

use Illuminate\View\Component;

class Select extends Component
{
    public $name, $items, $valor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $items, $valor)
    {
        $this->name = $name;
        $this->items = $items;
        $this->valor = $valor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.text.select');
    }
}
