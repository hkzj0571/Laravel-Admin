<?php

namespace App\Models;

use App\Models\Traits\Helpers;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasRoles, Notifiable, Helpers;

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
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    /**
     * @param $date
     * @return mixed
     */
    public function getCreatedAtAttribute($date)
    {
        return $this->hommization($date);
    }

    /**
     * @param $date
     * @return mixed
     */
    public function getUpdatedAtAttribute($date)
    {
        return $this->hommization($date);
    }
}
