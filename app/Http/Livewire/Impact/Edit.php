<?php

namespace App\Http\Livewire\Impact;

use Livewire\Component;
use DB;
use App\Models\Impact;

class Edit extends Component
{
    public $name;
    public $color;
    public $impact;
    public $impact_id;

    protected $rules = [
        'name'  => 'required',
        'color' => 'required'
    ];

    public function mount($id)
    {
        $impact = Impact::find($id);
        $this->name = $impact->name;
        $this->color = $impact->color;
        $this->impact_id = $id;
    }

    public function render()
    {
        return view('livewire.impact.edit');
    }

    public function updateImpact()
    {
        $this->validate();
        $impact = Impact::find($this->impact_id);
        $impact->update([
            'name'  => $this->name,
            'color' => $this->color
        ]);
    }
}
