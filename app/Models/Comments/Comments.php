<?php

namespace App\Models\Comments;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comment';
//    protected $primaryKey = 'id';
    protected $appends = ['owner'];
    protected $fillable = ['comments'];

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
//        return $this->
    }
}
