<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    use HasFactory;

    /**
     * Get the paiements for the blog userProfile.
     */
    public function paiements()
    {
        return $this->hasMany('App\Models\Paiement');
    }
}
