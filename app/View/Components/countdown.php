<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Carbon\Carbon;

class countdown extends Component
{
    public $deadline;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        // Define a data de expiração (ex: 4 horas a partir de agora)
        $this->deadline = Carbon::now()->addHours(4)->toIso8601String();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.countdown', [
            'deadline' => $this->deadline,
        ]);
    }
}
