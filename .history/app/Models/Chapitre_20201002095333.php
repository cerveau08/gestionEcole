<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapitre extends Model
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
        'td_enonce',
        'td_corrige',
        'duree'
    ];

    /**
     * Get the user that owns the chapitre.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the module that owns the chapitre.
     */
    public function module()
    {
        return $this->belongsTo('App\Models\Module');
    }
}
