<?php

namespace App\Models\Perfil;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
 
class Gallerys extends Model
{
    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }
}
