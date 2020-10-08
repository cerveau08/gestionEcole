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
    public function storeParent(Request $request)
    {
        $idParent = Parents::findOrFail()
        $datetime = new DateTime();
        $date=date_format($datetime,"Yms");
        $num=rand(1, 999);
        $twoFirstLetterName =\strtoupper(\substr($request->firstName,0,2));
        $matricule = 'PA'.$date.$twoFirstLetterName.$num;

        $parent = new Parents();
        $parent->profession = $request->profession;
        $parent->matricule = $matricule;
        $parent->save();
        $user = new User();
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->telephone = $request->telephone;
        $user->adresse = $request->adresse;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
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
            "message" => "le parent est bien ajoute",
            "data" => $parent
        ], Response::HTTP_OK);
    }

    public function storeStudent(Request $request)
    {

    }

}
