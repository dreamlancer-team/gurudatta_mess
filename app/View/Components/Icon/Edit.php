<?php

namespace App\View\Components\Icon;

use Illuminate\View\Component;

class Edit extends Component
{
    public $slug, $route, $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug, $route, $title)
    {
        $this->slug = $slug;

        $this->route = $route;

        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon.edit');
    }
}
