<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $action,
        public string $alt = '',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.new-button');
    }
}
