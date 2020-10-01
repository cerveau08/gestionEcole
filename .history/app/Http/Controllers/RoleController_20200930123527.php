<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = Auth::parseToken()->authenticate();
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
        return $this->user
                ->users()
                ->get(['id', 'libele'])
                ->toArray();
    }
}
