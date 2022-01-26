<?php

namespace App\View\Components\Widget;

use Illuminate\View\Component;

class Stat extends Component
{
    public $bg, $icon, $count, $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($bg, $icon, $count, $title)
    {
        $this->bg = $bg;
        $this->icon = $icon;
        $this->count = $count;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widget.stat');
    }
}
