<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliotheque extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'contenu',
        'description',
    ];

    /**
     * The specialities that belong to the bibliotheque.
     */
    public function specialities()
    {
        return $this->belongsToMany('App\Models\Speciality');
    }

    /**
     * The niveaux that belong to the bibliotheque.
     */
    public function niveaux()
    {
        return $this->belongsToMany('App\Models\Niveau');
    }

    /**
     * The modules that belong to the bibliotheque.
     */
    public function module()
    {
        return $this->belongsToMany('App\Models\Module');
    }
}
