<?php

namespace App\Http\Controllers;

use App\Models\Parents;
use Symfony\Component\HttpFoundation\Request;

class ParentController extends Controller
{
    public function store(Request $request)
    {
        $parent = new Parents();
        $parent->profession = $request->profession;
        $parent->matricule = $request->matricule;


    }
}
