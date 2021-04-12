<?php

namespace App\Http\Livewire\Impact;

use Livewire\Component;
use App\Models\Impact;
use DB;

class Index extends Component
{
    public Impact $impact;
    
    public function render()
    {
        return view('livewire.impact.index',[
            'impacts'   => DB::table('impacts')->get()
        ]);
    }

    public function deleteImpact($id)
    {
        $impact = Impact::findOrFail($id);
        $impact->delete();
    }
}
