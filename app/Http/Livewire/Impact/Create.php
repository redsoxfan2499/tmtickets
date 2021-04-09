<?php

namespace App\Http\Livewire\Impact;

use Livewire\Component;
use App\Models\Impact;

class Create extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required',
    ];

    public function render()
    {
        return view('livewire.impact.create');
    }

    public function save()
    {
        $this->validate();
        $impact = Impact::create([
            'name' => $this->name,
        ]);
        $impact->save();

        return redirect()->route('impacts.index');
    }
}
