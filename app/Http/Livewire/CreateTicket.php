<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Impact;
use Livewire\Component;
use Carbon\Carbon;
use App\Models\Ticket;
use Livewire\WithFileUploads;
use App\Models\Comment;

class CreateTicket extends Component
{
    use WithFileUploads;
    public $title;
    public $category;
    public $priority;
    public $impact;
    public $comment;
    public $images = [];

//    public $status;
//    public $submitter;
//    public $owner;

    protected $rules = [
        'title' => 'required|min:6',
        'category' => 'required|string',
        'priority' => 'required|string',
        'impact' => 'required|string',
        'comment' => 'required',
        //'images.*' => 'image|max:1024|nullable', // 1MB Max
    ];

    public function render()
    {
       return view('livewire.create-ticket',[
           'categories'    => Category::all(),
           'priorities'    => Priority::all(),
           'impacts'       => Impact::all()
       ]);

        //return view('livewire.create-ticket');
    }

    public function save()
    {
        $this->validate();
        $ticket = Ticket::create([
            'title'     => $this->title,
            'category'  => $this->category,
            'priority'  => $this->priority,
            'impact'    => $this->impact,
            'status'    => 'requested',
            'submitter' => Auth()->user()->id,
            'owner'     => 2,
        ]);
        $ticket->save();
        $ticket_id = $ticket->id;

//        foreach ($this->images as $image)
//        {
//            $filename = $image->getClientOriginalName();
//            $now = Carbon::now();
//            $current_month = $now->month;
//            $current_year =  $now->year;
//            // new directory name
//            $new_month_year_dir = $current_month . '-' . $current_year;
//            if(!Storage::exists('public/'.$new_month_year_dir)) {
//                Storage::makeDirectory('public/'.$new_month_year_dir); //creates directory
//            }
//            $image->storeAs('public/'.$new_month_year_dir, $filename);
//            // create file path variable for saving to DB
//            $file_path = $new_month_year_dir;
//            // save file attachements
//            $image = Image::create([
//                'name'          => $filename,
//                'image_path'    => $file_path,
//                'ticket_id'     => $ticket_id,
//            ]);
//            $image->save();
//        }
        Comment::create([
            'body'      => $this->comment,
            'ticket_id' => $ticket_id,
            'user_id'   => Auth()->user()->id
        ]);
        return redirect()->route('tickets.index');
    }
}
