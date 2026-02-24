<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navPrevButton extends Component
{
    public function __construct(
        public string $name,
        public string $action,
        public string $alt = '',
        public ?bool $disabled = false
    ) {}


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.nav-prev-button');
    }
}
