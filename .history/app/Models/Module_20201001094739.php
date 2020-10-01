<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function chapitres()
    {
        return $this->hasMany('App\Models\Chapitre');
    }
}
