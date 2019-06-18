<?php

namespace App\Models\Perfil;

use App\Models\Posts\Posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';
    protected $appends = ['owner'];
    protected $fillable = [
        'videos', 'comments'
    ];

    public function getOwnerAttribute()
    {
        return $this->user_id == auth()->user()->id;
    }

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function posts()
    {
        return $this->hasMany(Posts::class, 'id', 'post_id');
    }
}
