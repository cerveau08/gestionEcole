<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Chapitre;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $chapitre = new Chapitre();
        $chapitre->name = $request->name;
        $chapitre->contenu = $request->contenu;
        $chapitre->td_enonce = $request->td_enonce;
        $chapitre->td_corrige = $request->td_corrige;
        $chapitre->duree = $request->duree;

        $moduleId = Module::findOrFail($request->module_id);
        //$chapitre->module_id = $moduleId;
        $modu $chapitre->save();

        return response()->json([
            "success" => true,
            "message" => "le chapitre est bien ajoute",
            "data" => $chapitre
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
        //
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
