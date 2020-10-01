<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * The roles that belong to the specialit.
     */
    public function ecoles()
    {
        return $this->belongsToMany('App\Models\Ecole');
    }

    /**
     * The roles that belong to the speciality.
     */
    public function modules()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
