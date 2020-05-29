<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone',
    ];

    /**
     * Get the employees for the blog department.
     */
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
}
