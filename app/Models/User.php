<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Ticket;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'author_id');
    }

    public function getIsAdminAttribute()
    {
        return $this->role_id == 2;
    }

    public function getIsUserAttribute()
    {
        return $this->role_id == 1;
    }

    public function getIsStaffAttribute()
    {
        return $this->role_id == 3;
    }
    public function getRoleNameAttribute()
    {
        if ( Auth::user()->role_id === 1 ){
            return 'user';
        }
        if ( Auth::user()->role_id === 2 ){
            return 'admin';
        }
        if ( Auth::user()->role_id === 3 ){
            return 'staff';
        }
    }

}
