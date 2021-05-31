<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOffre;
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
        return view('admin.offre.offres', compact('offres'));
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

        return view('admin.offre.createOffre', compact('profils', 'cycles', 'besoins', 'organisations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOffre $request)
    {

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
        $offre = Offre::findOrFail($id);
        $profils = Profil::all();
        $cycles = Cycle::all();
        $besoins = Besoin::all();
        $organisations = Organisation::all();

        $offreprofil = $offre->profils->pluck('id');
        $offrecycle = $offre->cycles->pluck('id');
        $offrebesoin = $offre->besoins->pluck('id');
        $offreorganisation = $offre->organisations->pluck('id');
 
        return view('admin.offre.editOffre', compact('offre','profils', 'cycles', 'besoins', 'organisations', 'offreprofil', 'offrecycle', 'offrebesoin','offreorganisation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOffre $request, $id)
    {
        $offre = Offre::findOrFail($id);
        $offre->nom_offre = $request->input('nom');
        $offre->fascicule = $request->input('fascicule');
        $offre->objet = $request->input('objet');
        $offre->description = $request->input('description');
        $offre->condition = $request->input('condition');
        $offre->mantont_du_financement = $request->input('mantont');

        $offre->save();

        $offre->profils()->sync($request['profils']);
        $offre->cycles()->sync($request['cycles']);
        $offre->besoins()->sync($request['besoins']);
        $offre->organisations()->sync($request['organisations']);


        $request->session()->flash('status','votre offre a été modifier avec succès');

        return redirect()->route('offre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $offre = Offre::findOrFail($id);

        $offre->profils()->detach();
        $offre->cycles()->detach();
        $offre->besoins()->detach();
        $offre->organisations()->detach();

        $offre->delete();

        $request->session()->flash('status','votre offre a été Suprime');
        return redirect()->route('offre.index');
    }
}
