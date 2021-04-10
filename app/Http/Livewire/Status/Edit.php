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

    protected $rules = [
        'name' => 'required',
        'color' => 'required',
    ];

    public function mount($id)
    {
        $status = Status::find($id);
        $this->name = $status->name;
        $this->color = $status->color;
    }

    public function render()
    {
        return view('livewire.status.edit');
    }

    public function update(Status $status)
    {
        $this->validate();
        $status = Status::findOrFail($status->id);
        $status = Status::update([
            'name'  => $this->name,
            'color' => $this->color,
        ]);
        $status->save();

        return redirect()->route('statuses.index');
    }

}
