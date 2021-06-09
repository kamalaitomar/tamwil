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
    public function index(Request $request)
    {
        $validated = $request->validate([
            'profil' => 'required',
            'cycle' => 'required',
            'besoin' => 'required'
        ]);

        $offres = Offre::when('profil', function($query)use ( $request ){

            return  $query->whereHas('profils', function($q)use ( $request ){ $q->where('id', $request->profil);});

        })->when('cycle', function($query)use ( $request ){

            return  $query->whereHas('cycles', function($q)use ( $request ){ $q->where('id', $request->cycle);});

        })->when('besoin', function($query)use ( $request ){

            return  $query->whereHas('besoins', function($q)use ( $request ){ $q->where('id', $request->besoin);});

        })->get();


        return $offres->groupBy('fascicule');
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
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale ,$id)
    {
        $offre = Offre::findOrFail($id);
        $organisations =  $offre->organisations->toArray();
        return view("offre", compact('offre', 'organisations', 'locale', 'id'));
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
