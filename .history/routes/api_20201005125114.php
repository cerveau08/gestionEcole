<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\ChapitreController;
use App\Http\Controllers\SpecialtyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login']);
Route::group([
    'middleware' => ['jwt.verify'],
    #'prefix' => 'auth'

], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('get-users', [AuthController::class, 'getOneAll']);
    Route::post('get-user/{i}d', [AuthController::class, 'getOneUser']);
    Route::get('user-profile', [AuthController::class, 'userProfile']);
    Route::post('create-role', [RoleController::class, 'create']);
    Route::get('get-role', [RoleController::class, 'getAllRole']);
    Route::get('get-role/{id}', [RoleController::class, 'getOneRole']);
    Route::put('put-role/{id}', [RoleController::class, 'updateRole']);
    Route::delete('delete-role/{id}', [RoleController::class, 'deleteRole']);
    Route::post('create-ecole', [EcoleController::class, 'store']);
    Route::get('get-ecoles', [EcoleController::class, 'index']);
    Route::get('get-ecole/{id}', [EcoleController::class, 'show']);
    Route::post('create-specialty', [SpecialtyController::class, 'store']);
    Route::post('create-chapitre', [ChapitreController::class, 'store']);
    Route::post('create-niveau', [NiveauController::class, 'store']);
    Route::post('create-module', [ModuleController::class, 'store']);
    Route::post('inscrire-parent', [ParentController::class, 'registerParent']);
    Route::post('inscrire-student'[ParentController);
});
