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
     * Get the niveau that owns the bibliotheque.
     */
    public function niveau()
    {
        return $this->belongsTo('App\Models\Niveau');
    }

    /**
     * Get the module that owns the B.
     */
    public function module()
    {
        return $this->belongsTo('App\Models\Module');
    }
}
