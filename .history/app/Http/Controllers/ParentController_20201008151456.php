<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Role;
use App\Models\User;
use App\Models\Parents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ParentController extends Controller
{
    public function registerParent(Request $request)
    {
        $datetime = new DateTime();
        $date=date_format($datetime,"Yms");
        $num=rand(1, 999);
        $twoFirstLetterName =\strtoupper(\substr($request->firstName,0,2));
        $parent = new Parents();
        $parent->profession = $request->profession;
        $identifiant = 'PA'.$date.$twoFirstLetterName.$num;
        $parent->identifiant = $identifiant;
        $parent->save();

        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->telephone = $request->telephone;
        $user->adresse = $request->adresse;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $matricule = $date.$twoFirstLetterName.$num;
        $user->matricule = $matricule;
        $user->statut = 'normal';
        $parent = Parents::findOrFail($parent->id);
        //dd($parent_id->id);
        $user->parents_id = $parent->id;
        $roleId = Role::findOrFail(8);
        $user->save();
        $roleId->users()->attach($user);

        return response()->json([
            "success" => true,
            "data" => $user
        ], Response::HTTP_OK);
    }

    public function inscrire(Request $request)
    {
        $datetime = new DateTime();
        $date=date_format($datetime,"Yms");
        $num=rand(1, 999);
        $twoFirstLetterName =\strtoupper(\substr($request->firstName,0,2));
        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->telephone = $request->telephone;
        $user->adresse = $request->adresse;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $matricule = $date.$twoFirstLetterName.$num;
        $user->matricule = $matricule;
        $user->statut = 'normal';
        $parent = Parents::findOrFail($request->parent_id);
        //dd($parent_id->id);
        $user->parents_id = $parent->id;
        $roleId = Role::findOrFail(7);
        $user->save();
        $roleId->users()->attach($user);
        $ecoleId = Ecole::findOrFail($request->)

        return response()->json([
            "success" => true,
            "data" => $user
        ], Response::HTTP_OK);
    }

}
