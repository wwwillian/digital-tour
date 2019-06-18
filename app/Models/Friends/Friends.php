<?php

namespace App\Models\Friends;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    public function getOwnerAttribute()
    {
        return $this->user_id == auth()->user()->id;
    }

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
