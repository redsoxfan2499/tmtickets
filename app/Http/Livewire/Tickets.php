<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB;
use App\Models\Ticket;

class Tickets extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.tickets',[
            'tickets'   => Ticket::where('author_id', '=', Auth()->user()->id)->get()
        ]);
    }
}
