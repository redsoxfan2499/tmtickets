<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use DB;

class Index extends Component
{
    public Category $category;

    public function render()
    {
        return view('livewire.category.index',[
            'categories'    => DB::table('categories')->get()
        ]);
    }

    public function deleteStatus($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    }
}
