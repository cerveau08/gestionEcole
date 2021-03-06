<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

// JWT contract
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    /**
     * Get the paiements for the blog userProfile.
     */
    public function paiements()
    {
        return $this->hasMany('App\Models\Paiement');
    }

    /**
     * Get the chapitres for the blog user.
     */
    public function chapitres()
    {
        return $this->hasMany('App\Models\Chapitre');
    }

    /**
     * Get the module that owns the module.
     */
    public function module()
    {
        return $this->belongsTo('App\Models\Module');
    }

    /**
     * The ecoles that belong to the user.
     */
    public function ecoles()
    {
        return $this->belongsToMany('App\Models\Ecole');
    }

    /**
     * The specialities that belong to the user.
     */
    public function specialites()
    {
        return $this->belongsToMany('App\Models\Speciality');
    }

    /**
     * The modules that belong to the user.
     */
    public function modules()
    {
        return $this->belongsToMany('App\Models\Module');
    }

    /**
     * The niveaux that belong to the user.
     */
    public function niveaux()
    {
        return $this->belongsToMany('App\Models\Niveau');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims() {
        return [];
    }
}
