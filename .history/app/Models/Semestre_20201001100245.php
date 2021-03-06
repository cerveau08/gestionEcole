<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libele',
        'dateDebut',
        'DateFni',
    ];

    /**
     * The es that belong to the semestre.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
