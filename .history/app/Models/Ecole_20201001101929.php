<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecole extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'adresse',
        'phone',
        'description'
    ];

    /**
     * The users that belong to the ecole.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * The specialities that belong to the ecole.
     */
    public function specialities()
    {
        return $this->belongsToMany('App\Models\Speciality');
    }
}
