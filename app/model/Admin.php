<?php

namespace app\model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "admins";
    protected $fillable = [
        'id',
        'name',
        'email',
        'pass',
        'status',
        'position',
        'created_at',
        'updated_at',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
    /*
   * Get Todo of User
   *
   */
}
