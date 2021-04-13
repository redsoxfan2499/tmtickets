<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status_id',
        'category_id',
        'priority_id',
        'impact_id',
        'author_id',
        'staff_id',
    ];

    /**
     * Get the comments on attached to this support ticket.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'ticket_id', 'id');
    }

    /**
     * Get the screenshots on attached to this support ticket.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * Get the author for this support ticket.
     */
    public function author()
    {
        return $this->hasMany(User::class, 'author_id');
    }

    /**
     * Get the staff that was assigned to this support ticket.
     */
    public function staff()
    {
        return $this->hasMany(User::class, 'staff_id');
    }

    /**
     * Get the status support ticket.
     */
    public function status()
    {
        return $this->hasMany(Status::class, 'status_id');
    }

    /**
     * Get the category support ticket.
     */
    public function categories()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    /**
     * Get the priority support ticket.
     */
    public function priorities()
    {
        return $this->hasMany(Priority::class, 'priority_id');
    }

    /**
     * Get the impact support ticket.
     */
    public function impacts()
    {
        return $this->hasMany(Impact::class, 'impact_id');
    }


}
