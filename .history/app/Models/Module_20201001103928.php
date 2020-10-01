<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'duree',
    ];

    /**
     * Get the chapitres for the blog module.
     */
    public function chapitres()
    {
        return $this->hasMany('App\Models\Chapitre');
    }

    /**
     * GThe bibliotheques that belong to the module.
     */
    public function bibliotheques()
    {
        return $this->belongsToMany('App\Models\Bibliotheque');
    }

    /**
     * The users that belong to the module.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * The specialities that belong to the module.
     */
    public function specialities()
    {
        return $this->belongsToMany('App\Models\Speciality');
    }
}
