<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Posts extends Model
{

    protected $table = 'posts';
//    protected $primaryKey = 'id';

    protected $fillable = [
        'description', 'photo',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
