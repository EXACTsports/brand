<?php

namespace App\View\Components;

use Illuminate\View\Component;

class progressSteps extends Component
{

    public $current;
    public $steps = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($current, $steps)
    {
        $this->current = $current;
        $this->steps = $steps;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.progress-steps');
    }
}
