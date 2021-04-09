<?php

namespace App\Http\Livewire\Status;

use App\Models\Status;
use Livewire\Component;

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
        return view('livewire.status.edit',[
            'status'   => DB::table('statuses')->where('id', '=', $id)->get()
        ]);
    }
}
