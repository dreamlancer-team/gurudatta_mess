<?php

namespace App\View\Components\Icon;

use Illuminate\View\Component;

class Show extends Component
{
    public $slug, $route;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug, $route)
    {
        $this->slug = $slug;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon.show');
    }
}
