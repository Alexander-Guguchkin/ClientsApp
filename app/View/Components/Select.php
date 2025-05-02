<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public array $data;
    public bool $is_selected;
    public string $name, $id;
    /**
     * Create a new component instance.
     */
    public function __construct($data, $is_selected, $name, $id)
    {
        $this->data = $data;
        $this->is_selected = $is_selected;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
