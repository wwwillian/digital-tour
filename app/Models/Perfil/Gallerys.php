<?php

namespace App\Models\Perfil;

use App\Models\Posts\Posts;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Gallerys extends Model
{
    protected $table = 'gallerys';
    protected $appends = ['owner'];
    protected $fillable = [
        'photo1','photo2','photo3','photo4','photo5','photo6','comments'
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

    public function posts()
    {
        return $this->hasMany(Posts::class, 'id', 'post_id');
    }
}
