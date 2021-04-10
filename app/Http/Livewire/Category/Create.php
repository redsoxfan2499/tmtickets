<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

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
        return view('livewire.category.create');
    }

    public function save()
    {
        $this->validate();
        $category = Category::create([
            'name'  => $this->name,
            'color' => $this->color,
        ]);
        $category->save();

        return redirect()->route('categories.index');
    }
}
