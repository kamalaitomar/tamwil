<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Besoin;
use App\Models\Cycle;
use App\Models\Offre;
use App\Models\Organisation;
use App\Models\Profil;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Console\Input\Input;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::paginate(5);
        return view('admin.offres', compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profils = Profil::all();
        $cycles = Cycle::all();
        $besoins = Besoin::all();
        $organisations = Organisation::all();

        return view('admin.createOffre', compact('profils', 'cycles', 'besoins', 'organisations'));
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
            'nom' => 'required|min:3|max:255',
            'fascicule' => 'required|min:3|max:255',
            'objet' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:500',
            'condition' => 'required|min:3|max:500',
            'mantont' => 'required',
        ]);

        $offre= new Offre();
        $offre->nom_offre = $request->input('nom');
        $offre->fascicule = $request->input('fascicule');
        $offre->objet = $request->input('objet');
        $offre->description = $request->input('description');
        $offre->condition = $request->input('condition');
        $offre->mantont_du_financement = $request->input('mantont');

        $offre->save();

        $offre->profils()->attach($request->profils);
        $offre->cycles()->attach($request->cycles);
        $offre->besoins()->attach($request->besoins);
        $offre->organisations()->attach($request->organisations);

        $request->session()->flash('status','votre offre a été ajoutée avec succès');

        return redirect()->route('offre.index');
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
