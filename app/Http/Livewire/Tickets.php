<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use DB;

class Tickets extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.tickets',[
            'tickets'   => DB::table('tickets')->where('submitter', '=', Auth()->user()->id)->get()
        ]);
    }
}
