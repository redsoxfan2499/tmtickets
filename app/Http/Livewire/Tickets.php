<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB;
use App\Models\Ticket;
use Auth;

class Tickets extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if( Auth::user()->role_name === 'admin' ) {
            return view('livewire.tickets',[
                'tickets'   => Ticket::all()
            ]);
        } else {
            dd(Auth::user()->role_name);
            return view('livewire.tickets', [
                'tickets' => Ticket::where('author_id', '=', Auth()->user()->id)->get()
            ]);
        }
    }
}
