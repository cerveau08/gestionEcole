<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    /**
     * Get the users for the blog parent.
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
