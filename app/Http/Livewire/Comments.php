<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Comment;

class Comments extends Component
{
    public $newComment;
    public $comments;

    public function mounted($initialComments)
    {
        //$initialComments = Comment::all();
        $this->comments = $initialComments;
    }

    public function addComment()
    {
        if ( $this->newComment == '' ) {
            return;
        }

        $createdComment = Comment::create([
            'body' => $this->newComment,
            'user_id' => 1
        ]);
        $this->allComments->push($createdComment);

        $this->newComment = '';
    }

    public function render()
    {
        $comments = Comment::all();
        return view('livewire.comments');
//        return view('livewire.comments', [
//            'comments' => $comments
//        ]);
    }


}
