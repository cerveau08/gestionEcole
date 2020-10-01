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
     * The users that belong to the ecole.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
