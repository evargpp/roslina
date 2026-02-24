<?php

namespace App\View\Components\ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class saveButton extends Component
{
    public function __construct(
        public string $name,
        public string $action,
        public string $alt = '',
        public string $formname = '',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.save-button');
    }
}
