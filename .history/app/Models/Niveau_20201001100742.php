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
    protected $fillable = ['libele'];

    /**
     * The users that belong to the niveau.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * The users that belong to the role.
     */
    public function specialities()
    {
        return $this->belongsToMany('App\Models\Speciality');
    }

    /**
     * The users that belong to the role.
     */
    public function bs()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
