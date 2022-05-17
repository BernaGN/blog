<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{
    public $id, $show, $edit, $destroy;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $show, $edit, $destroy)
    {
        $this->id = $id;
        $this->show = $show;
        $this->edit = $edit;
        $this->destroy = $destroy;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dropdown');
    }
}
