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
        $specialty = Speciality::findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $specialty
        ], Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $specialty = Speciality::findOrFail($id);
        $ecoleId = Ecole::findOrFail($request->ecole_id);
        $specialty->save();
        $specialty->ecoles()->attach($ecoleId);

        return response()->json([
            "success" => true,
            "message" => "specialite ajouter dans  avec succe",
            "date" => $specialty
        ], Response::HTTP_OK);
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
        $specialty = Speciality::find($id);
        $specialty->name = $request->name;
        $specialty->save();


        return response()->json([
            'success' => true,
            "message" => "records updated successfully",
            'data' => $specialty
        ], Response::HTTP_OK);
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
