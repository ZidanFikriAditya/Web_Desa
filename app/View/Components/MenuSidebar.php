<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuSidebar extends Component
{
    public $index;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href,
        public string $name,
        $index = 1
    )
    {
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-sidebar');
    }
}
