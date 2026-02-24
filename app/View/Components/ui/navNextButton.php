<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navNextButton extends Component
{
    public function __construct(
        public string $name,
        public string $action,
        public string $alt = '',
        public ?bool $disabled = null
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.nav-next-button');
    }
}
