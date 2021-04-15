<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Image;
use App\Models\User;
use App\Models\Status;
use App\Models\Category;
use App\Models\Impact;
use App\Models\Priority;

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
        return $this->hasMany(Comment::class);
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
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Get the staff that was assigned to this support ticket.
     */
    public function staff()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the status support ticket.
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Get the category support ticket.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the priority support ticket.
     */
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    /**
     * Get the impact support ticket.
     */
    public function impact()
    {
        return $this->belongsTo(Impact::class);
    }


}
