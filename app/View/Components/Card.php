<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $size;
    public $bgColor;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $size = '16rem', $bgColor = 'white')
    {
        $this->title = $title;
        $this->size = $size;
        $this->bgColor = $bgColor;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
