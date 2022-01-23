<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $label, $name, $value, $type, $placeholder;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $value = null, $type = null, $placeholder = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type ?? 'text';
        $this->placeholder = $placeholder ?? $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
