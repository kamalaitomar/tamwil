<?php

namespace App\Http\Controllers;

use App\Models\Besoin;
use App\Models\Cycle;
use App\Models\Offre;
use App\Models\Profil;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $role = Role::findById(2);

        // $permission = Permission::find([1, 2, 4, 5]);

        // $role->givePermissionTo($permission);


        $profils = Profil::orderBy('created_at')->get();

        return view('financement', compact('profils'));
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
    public function show(Request $request)
    {
        $cycles = Cycle::whereHas('offres', function($q)use($request){
                    $q->whereHas('profils', function($q)use($request){ $q->where('id', $request->profil);})
                ;})
            ->get();

        return $cycles;
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

    public function getCycles(Request $request)
    {

        $validated = $request->validate([
            'profil' => 'required|integer|exists:profils,id',
        ]);

        $cycles = Cycle::whereHas('offres', function($q)use($request){
                    $q->whereHas('profils', function($q)use($request){ $q->where('id', $request->profil);})
                ;})
            ->orderBy('created_at')
            ->get();

        return $cycles;
    }

    public function getBesoins(Request $request)
    {
        
        $validated = $request->validate([
            'profil' => 'required|integer|exists:profils,id',
            'cycle' => 'required|integer|exists:cycles,id',
        ]);

        $besoins = Besoin::whereHas('offres', function($q)use($request){
                                $q->whereHas('profils', function($q)use($request){ $q->where('id', $request->profil);})
                                ->whereHas('cycles', function($q)use($request){ $q->where('id', $request->cycle);})
                            ;})
                        ->get();
        return $besoins;
    }
}
