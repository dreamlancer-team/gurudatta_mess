<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Option extends Component
{
    public $label, $name, $items, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $items, $value = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->items = $items;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.option');
    }
}
