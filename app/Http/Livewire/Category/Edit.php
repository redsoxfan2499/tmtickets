<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;
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
        return view('livewire.category.edit',[
            'category'   => DB::table('categories')->where('id', '=', $id)->get()
        ]);
    }
}
