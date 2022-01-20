<?php

namespace EXACTSports\BladeComponentLibrary\Components;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProgressSteps extends Component
{

    public function __construct(public int $current, public array $steps)
    {
    }

    public function render(): View|Factory|Htmlable|string|Closure|Application
    {
        return view('bcl::components.progress-steps');
    }
}
