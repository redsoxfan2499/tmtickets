<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment_body', 'ticket_id', 'author_id', 'staff_id'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
