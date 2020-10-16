<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'identify_card_user', 'email', 'user', 'password', 'birthdate', 'gender_user', 'cellular_user',
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

    protected $table = 'users';
    //relacion de uno a uno
    public function roles(){
        return $this->hasOne('App\Role', 'id');
    }
    //relacion de uno a muchos
    public function assistances(){
        return $this->belongsTo('App\Assistance', 'id');
    }
}
