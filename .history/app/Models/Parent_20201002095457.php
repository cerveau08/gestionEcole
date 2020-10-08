<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    use HasFactory;

    /**
     * Get the users for the blog userProfile.
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
