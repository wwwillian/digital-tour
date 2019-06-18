<?php

namespace App\Models\Comments;

use App\Models\User;
use App\Models\Posts\Posts;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $appends = ['owner'];
    protected $fillable = ['comments'];

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
