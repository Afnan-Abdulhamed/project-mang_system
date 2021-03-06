<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    /**
     * relation with Project
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }


    /**
     * Get the Type value
     *
     * @param  string  $value
     * @return void
     */
    public function getTypeAttribute($value)
    {
        return $this->attributes['type'] = ( $value == '1')? 'admin' : 'client';
    }

}
