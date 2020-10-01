<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The users that belong to the niveau.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * The specialities that belong to the niveau.
     */
    public function specialities()
    {
        return $this->belongsToMany('App\Models\Speciality');
    }

    /**
     * The bibliotheques that belong to the niveau.
     */
    public function bibliotheques()
    {
        return $this->belongsToMany('App\Models\Bibliotheque');
    }
}
