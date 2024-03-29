<?php

namespace App\View\Components\Tables;

use Illuminate\View\Component;

class Table extends Component
{
    public $headers, $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headers, $id)
    {
        $this->headers = $headers;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tables.table');
    }
}
