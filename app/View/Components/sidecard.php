<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sidecard extends Component
{
    public $limite;

    /**
     * Create a new component instance.
     */
    public function __construct($limite = 38)
    {
        $this->limite = $limite;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidecard');
    }
}
