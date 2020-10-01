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
     * The users that belong to the D.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
