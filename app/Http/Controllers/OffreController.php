<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idProfil, $idCycle, $idBesoin)
    {
        $offres = Offre::when($idProfil, function($query)use($idProfil){

            return  $query->whereHas('profils', function($q)use($idProfil){ $q->where('id', $idProfil);});

        })->when($idCycle, function($query)use($idCycle) {

            return  $query->whereHas('cycles', function($q)use($idCycle){ $q->where('id', $idCycle);});

        })->when($idBesoin, function($query)use( $idBesoin){

            return  $query->whereHas('besoins', function($q)use( $idBesoin){ $q->where('id', $idBesoin);});

        })->get();
        
        //dd($offres);
        return $offres;
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
        $validated = $request->validate([
            'profil' => 'required',
            'cycle' => 'required',
            'besoin' => 'required'
        ]);
        
       

        return response()->json(['success'=>'Done!']);
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
