<?php

namespace App\Models\Posts;

use App\Models\Perfil\Gallerys;
use App\Models\Perfil\Videos;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comments\Comments;

class Posts extends Model
{

    protected $table = 'posts';
    protected $appends = ['owner'];
    protected $fillable = [
        'description', 'photo'
    ];

    public function getOwnerAttribute()
    {
        return $this->user_id == auth()->user()->id;
    }

    public function  getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d/m/Y H:i');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function gallerys()
    {
        return $this->hasMany(Gallerys::class);
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }
}
