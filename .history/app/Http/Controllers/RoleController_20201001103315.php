<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function create(Request $request)
    {
        $role = New Role;
        $role->name = $request->name;
        $role->save();

        return response()->json([
            'success' => true,
            'data' => $role
        ], Response::HTTP_OK);
    }

    public function getAllRole()
    {
        $role = Role::all();
        return response()->json([
            'success' => true,
            'data' => $role
        ], Response::HTTP_OK);
    }

    public function getOneRole($id)
    {
        $role = Role::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $role
        ], Response::HTTP_OK);
    }

    public function updateRole(Request $request, $id)
    {

            $role = Role::find($id);
            //dd($role);
            $role->name = $request->name;
            //dd($role->name);
            $role->save();


            return response()->json([
                'success' => true,
                "message" => "records updated successfully",
                'data' => $role
            ], Response::HTTP_OK);
    }

    public function deleteRole($id)
    {
        $role = Role::find($id);
        $role->delete();

        return response()->json([
            'success' => true,
            "message" => "records deleted successfully",
            'data' => $role
        ], Response::HTTP_OK);
    }
}
