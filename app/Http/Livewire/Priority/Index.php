<?php

namespace App\Http\Livewire\Priority;

use Livewire\Component;
use DB;
use App\Models\Priority;

class Index extends Component
{
    public Priority $priority;

    public function render()
    {
        return view('livewire.priority.index',[
            'priorities'    => DB::table('priorities')->get()
        ]);
    }

    public function deleteStatus($id)
    {
        $priority = Priority::findOrFail($id);
        $priority->delete();
    }
}
