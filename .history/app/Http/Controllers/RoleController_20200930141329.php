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
        $role->libele = $request->libele;
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
        if($role = Role::whereId('id', $id)->exists()) {
            $role = Role::find($id);
            dd($role);
            $role->libele = is_null($request->libele) ? $role->libele : $request->libele;
            $role->save();
            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
        }
    }
}
