<?php

namespace App\Http\Livewire\Priority;

use Livewire\Component;
use DB;

class Edit extends Component
{
    public $name;
    public $color;

    public function mount($status)
    {
        $this->name = $status->name;
        $this->color = $status->color;
    }

    public function render()
    {
        return view('livewire.priority.edit',[
            'priorities'   => DB::table('priorities')->where('id', '=', $id)->get()
        ]);
    }
}
