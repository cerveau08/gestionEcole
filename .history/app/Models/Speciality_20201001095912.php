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
        return $this->belongsToMany('App\Models\Module');
    }

    /**
     * The niveaux that belong to the speciality.
     */
    public function niveaux()
    {
        return $this->belongsToMany('App\Models\Niveau');
    }

    /**
     * The bibliotheques that belong to the speciality.
     */
    public function bibliothequess()
    {
        return $this->belongsToMany('App\Models\Bibliotheque');
    }

    /**
     * The roles that belong to the user.
     */
    public function rsemestres()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
