<?php

namespace App\View\Components\Sidebar;

use Illuminate\View\Component;

class Link extends Component
{
    public $url, $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $name)
    {
        $this->url = $url;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar.link');
    }
}
