<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Parents;
use Symfony\Component\HttpFoundation\Request;

class ParentController extends Controller
{
    public function store(Request $request)
    {
        $parent = new Parents();
        $parent->profession = $request->profession;
        $parent->matricule = $request->matricule;

        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->telephone = $request->telephone;
        $user->adresse = $request->adresse;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $datetime = new DateTime();
        $date=date_format($datetime,"Yms");
        $num=rand(1, 999);
        $twoFirstLetterName =\strtoupper(\substr($request->firstName,0,2));
        $matricule = $date.$twoFirstLetterName.$num;
        $user->matricule = $matricule;
        $user->statut = 'normal';

        $roleId = Role::findOrFail($request->role_id);
        $user->save();
        $roleId->users()->attach($user);
    }
}
