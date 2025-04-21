<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardClients extends Component
{
    public $id;
    public $username;
    public $contact;
    public $created;
    public $updated;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $username, $contact, $created, $updated)
    {
        $this->id = $id;
        $this->username = $username;
        $this->contact = $contact;
        $this->created = $created;
        $this->updated = $updated;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-clients');
    }
}
