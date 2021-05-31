<?php

namespace App\Http\Controllers;

use App\Models\Organisation;
use Illuminate\Http\Request;
use App\Models\Besoin;
use App\Models\Cycle;
use App\Models\Offre;
use App\Models\Profil;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    //     $organisations = Offre::when('besoin', function($query)use ( $request ){

    //    return  $query->whereHas('besoins', function($q)use ( $request ){ $q->where('id', $request->organisation)
    // })};}
        // $validated = $request->validate([
            
        //     'besoin' => 'required',
        //     // 'organisation'=>'required'
        // ]);

        
    // })->when('organisation', function($query)use ( $request ){
    //      return  $query->whereHas('organisations', function($q)use ( $request ){ $q->where('id', $request->organisation);});

        // $validated = $request->validate([
            // 'nom_organisation' => 'required',
            // 'email' => 'required',
            // 'tel' => 'required',
            // 'adresse'=>'required',
            // 'web_site'=>'required',
            // 'type_organisme'=>'required'
        // ]);
        $organisations = Organisation::all();
        $besoins = Besoin::all();

        return view("organisation", compact('organisations','besoins'));


       
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
    public function show($id)
    {
        $organisations = Organisation::whereHas('besoins', function ($query) use($id) {
            $query->where('id', $id);
        })->get();

        return $organisations;
    }
// 
    
    






























     
    
}
