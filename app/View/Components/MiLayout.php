<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MiLayout extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $titulo,
        public string|null $tipoPersona = 'publico general'
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mi-layout');
    }
}