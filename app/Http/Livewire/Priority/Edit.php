<?php

namespace App\Http\Livewire\Priority;

use Livewire\Component;
use DB;
use App\Models\Priority;

class Edit extends Component
{
    public $name;
    public $color;
    public $priority;
    public $priority_id;

      protected $rules = [
        'name' => 'required',
        'color' => 'required',
    ];

    public function mount($id)
    {
        $priority = Priority::find($id);
        $this->name = $priority->name;
        $this->color = $priority->color;
         $this->priority_id = $id;
    }

    public function render()
    {
        return view('livewire.priority.edit');
    }

    public function updatePriority()
    {
        $this->validate();
        $priority = Priority::find($this->priority_id);
        $priority->update([
            'name' => $this->name,
            'color' => $this->color
        ]);
    }
}
