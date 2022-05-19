<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $date, $title, $post, $image, $user, $tags;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($date, $title, $post, $user, $tags = [], $image = "")
    {
        $this->date = $date;
        $this->title = $title;
        $this->post = $post;
        $this->image = $image;
        $this->user = $user;
        $this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
