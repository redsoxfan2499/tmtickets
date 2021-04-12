<?php

namespace App\Http\Livewire\Status;

use App\Models\Status;
use Livewire\Component;
use DB;

class Edit extends Component
{
    public $name;
    public $color;
    public $status;
    public $status_id;

    protected $rules = [
        'name' => 'required',
        'color' => 'required',
    ];

    public function mount($id)
    {
        $status = Status::find($id);
        $this->name = $status->name;
        $this->color = $status->color;
        $this->status_id = $id;
    }

    public function render()
    {
        return view('livewire.status.edit');
    }

    public function updateStatus()
    {
        $this->validate();
        $status = Status::find($this->status_id);
        $status->update([
            'name' => $this->name,
            'color' => $this->color
        ]);
    }
}
