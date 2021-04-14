<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ticket;

class ShowTicket extends Component
{
    public $ticket;

    public function mount($id)
    {
        $ticket = Ticket::find($id);
        $this->ticket = $ticket;
    }

    public function render()
    {
        return view('livewire.show-ticket');
    }
}
