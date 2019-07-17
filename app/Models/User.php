<?php

namespace App\Models;

use App\Http\Controllers\HomeController;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Chat\Message;
use App\Models\Posts\Posts;
use App\Models\Comments\Comments;
use App\Models\Perfil\Gallerys;
use App\Models\Perfil\Videos;
use App\Models\Friends\Friends;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'email', 'password', 'image', 'date', 'gender', 'location', 'facebook', 'instagram', 'skype', 'experience', 'cupphoto', 'maritalstatus', 'mobilenumber'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function posts()
    {
        return $this->hasMany(Posts::class);
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

    public function Friends()
    {
        return $this->hasMany(Friends::class);
    }
}
