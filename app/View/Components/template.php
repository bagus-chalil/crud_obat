<?php

namespace App\View\Components;

use Illuminate\View\Component;

class template extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $styles = null; 
    public function __construct($title = null)
    {
        $this->title=$title ? $title : 'Web Development';
        // $this->title=$title ?? 'Web Development';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('template.main');
    }
}
