<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    /**
     * The users that belong to the speciality.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * The ecoless that belong to the speciality.
     */
    public function ecoles()
    {
        return $this->belongsToMany('App\Models\Ecole');
    }

    /**
     * The modules that belong to the speciality.
     */
    public function modules()
    {
        return $this->belongsToMany('App\Models\');
    }
}
