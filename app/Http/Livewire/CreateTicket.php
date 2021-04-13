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
    public $status_id;
    public $category_id;
    public $priority_id;
    public $impact_id;
    public $staff_id;
    public $comment_body;
    public $images = [];

    protected $rules = [
        'title'         => 'required|min:6',
        'category_id'   => 'required',
        'priority_id'   => 'required',
        'impact_id'     => 'required',
        'comment_body'  => 'required',
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

    public function createTicket()
    {
        $this->validate();
        $ticket = Ticket::create([
            'title'         => $this->title,
            'status_id'     => 1,
            'category_id'   => $this->category_id,
            'priority_id'   => $this->priority_id,
            'impact_id'     => $this->impact_id,
            'author_id'     => Auth()->user()->id,
            'staff_id'      => 1,
        ]);
        $comment_body = $this->comment_body;
        
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
        $comment = Comment::create([
            'comment_body'  => $comment_body,
            'ticket_id'     => $ticket_id,
            'author_id'     => Auth()->user()->id,
            'staff_id'      => 1
        ]);
        $comment->save();
        return redirect()->route('tickets.index');
    }
}
