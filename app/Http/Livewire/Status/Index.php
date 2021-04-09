<?php

namespace App\Http\Livewire\Status;

use App\Models\Status;
use Livewire\Component;
use DB;

class Index extends Component
{
    public Status $status;

    public function render()
    {
        return view('livewire.status.index',[
            'statuses'   => DB::table('statuses')->get()
        ]);
    }

    public function deleteStatus($id)
    {
        $status = Status::findOrFail($id);
        $status->delete();
    }
}
