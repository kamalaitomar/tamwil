<?php

namespace App\Http\Controllers;

use App\Models\Besoin;
use App\Models\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $organisations = Organisation::select('types_des_organisations')->distinct()->get();
         $besoins = Besoin::all();
         return view("organisation", compact('organisations', 'besoins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $organisations = Organisation::where('types_des_organisations', $request->type)->when('besoin', function($query)use ( $request ){

            return  $query->whereHas('besoins', function($q)use ( $request ){ $q->where('id', $request->besoin);});

        })->get();
        

        
        // return $organisations;
        // $type = $request->type;
        // return($type);
        
        return $organisations ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale,   $id)
    {
        $organisation = Organisation::findOrFail($id);

        return view('affiche', compact('organisation', 'locale', 'id'));

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
