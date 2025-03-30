<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeleteButton extends Component
{
    public string $href;
    public string $text;
    public string $type;
    /**
     * Create a new component instance.
     */
    public function __construct($href='/', $text='Отправить', $type='primary')
    {
        $this->href = $href;
        $this->text = $text;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-button');
    }
}
