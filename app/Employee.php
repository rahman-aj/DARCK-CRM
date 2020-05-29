<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fist_name', 'last_name', 'email', 'phone',
    ];

    /**
     * Get the department that owns the comment.
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
