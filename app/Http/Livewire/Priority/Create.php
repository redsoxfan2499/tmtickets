<?php

namespace App\Http\Livewire\Priority;

use Livewire\Component;
use App\Models\Priority;

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
        return view('livewire.priority.create');
    }

    public function save()
    {
        $this->validate();
        $priority = Priority::create([
            'name'  => $this->name,
            'color' => $this->color,
        ]);
        $priority->save();

        return redirect()->route('priorities.index');
    }
}
