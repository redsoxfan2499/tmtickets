<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;
use App\Models\Status;

class Create extends Component
{
    public $name;
    public $color;

    protected $rules = [
        'name' => 'required',
        'color' => 'required',
    ];

    public function render()
    {
        return view('livewire.status.create');
    }

    public function save()
    {
        $this->validate();
        $status = Status::create([
            'name'  => $this->name,
            'color' => $this->color,
        ]);
        $status->save();

        return redirect()->route('statuses.index');
    }
}
