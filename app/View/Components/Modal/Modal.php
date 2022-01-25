<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class Modal extends Component
{
    public $title, $slug, $isFull, $btnType, $btnName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $slug = null, $isFull = false, $btnName = null, $btnType = 'primary')
    {
        $this->title = $title;

        $this->slug = $slug;

        $this->isFull = $isFull;

        $this->btnName = $btnName;

        $this->btnType = $btnType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.modal');
    }
}
