<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'email', 'password', 'lastname','role_id', 'subscription_id', 'username', 'last_login'
    ];

    protected $dates = ['deleted_at'];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function company(){
        return $this->hasOne(Company::class);
    }

    public function advert(){
        return $this->hasMany(Advert::class);
    }

    public function subscription(){
        return $this->belongsTo(Subscription::class);
    }
}
