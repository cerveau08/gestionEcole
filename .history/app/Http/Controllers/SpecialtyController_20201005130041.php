<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialty = Speciality::all();
        return response()->json([
            'success' => true,
            'data' => $specialty
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $specialty = new Speciality();
        $specialty->name = $request->name;

        $ecoleId = Ecole::findOrFail($request->ecole_id);
        $specialty->save();
        $specialty->ecoles()->attach($ecoleId);

        return response()->json([
            "success" => true,
            "message" => "specialite ajouter avec succe",
            "date" => $specialty
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $special = Speciality::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $special
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
