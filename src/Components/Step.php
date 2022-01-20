<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Step extends Component
{

    public function __construct(public int $current, public array $steps)
    {
        $this->current = $current;
        $this->steps = $steps;
    }


    public function render(): View|Factory|Htmlable|Closure|string|Application
    {
        return view('bcl::components.step.step');
    }
}
