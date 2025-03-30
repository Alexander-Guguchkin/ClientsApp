<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavItem extends Component
{
    public string $text;
    public string $href;
    /**
     * Create a new component instance.
     *
     * @param string $text
     */
    public function __construct($text = 'ссылка', $href = '/')
    {
        $this->href = $href;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-item');
    }
}
