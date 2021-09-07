<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrganisation;
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
    public function index(Request $request)
    {
        $organisations = Organisation::when($request->has('search'), function ($query)use($request){
            $query->where('nom_organisation_fr', 'like', '%'.$request->search.'%')
            ->orWhere('email', 'like', '%'.$request->search.'%')
            ->orWhere('adresse_fr', 'like', '%'.$request->search.'%')
            ->orWhere('web_site', 'like', '%'.$request->search.'%')
            ->orWhere('type_d_organisation_fr', 'like', '%'.$request->search.'%');
       })->paginate(10);
        
        return view('admin.organisation.organisations', compact('organisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $besoins = Besoin::all();
        return view('admin.organisation.createOrganisation', compact('besoins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganisation $request)
    {
        $organisation= new Organisation();
        $organisation->nom_organisation_fr = $request->input('nom');
        $organisation->nom_organisation_ar = $request->input('nom_ar');
        $organisation->email = $request->input('email');
        $organisation->tel = $request->input('tel');
        $organisation->adresse_fr = $request->input('adresse');
        $organisation->adresse_ar = $request->input('adresse_ar');
        $organisation->web_site = $request->input('web_site');
        $organisation->type_d_organisation_fr = $request->input('type');
        $organisation->type_d_organisation_ar = $request->input('type_ar');
        $organisation->presentation_fr = $request->input('presentation');
        $organisation->presentation_ar = $request->input('presentation_ar');
        $organisation->icone = $request->input('logo');

        $imageName = $request->input('logo');  
        $file = $request->file('logofile');
        
        $file->move(public_path('assetes/images/organisation'), $imageName);

        $organisation->save();
        
        $organisation->besoins()->attach($request->besoins);


        $request->session()->flash('status','votre organisation a été ajoutée avec succès');

        return redirect()->route('organisation.index');
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
        $organisation = Organisation::findOrFail($id);
        $besoins = Besoin::all();
        
        $organisationbesoin = $organisation->besoins->pluck('id');

        return view('admin.organisation.editOrganisation', compact('organisation', 'besoins', 'organisationbesoin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrganisation $request, $id)
    {
        $organisation = Organisation::findOrFail($id);
        $organisation->nom_organisation_fr = $request->input('nom');
        $organisation->nom_organisation_ar = $request->input('nom_ar');
        $organisation->email = $request->input('email');
        $organisation->tel = $request->input('tel');
        $organisation->adresse_fr = $request->input('adresse');
        $organisation->adresse_ar = $request->input('adresse_ar');
        $organisation->web_site = $request->input('web_site');
        $organisation->type_d_organisation_fr = $request->input('type');
        $organisation->type_d_organisation_ar = $request->input('type_ar');
        $organisation->presentation_fr = $request->input('presentation');
        $organisation->presentation_ar = $request->input('presentation_ar');
        $organisation->icone = $request->input('logo');

        $imageName = $request->input('logo');
        $path = public_path('/assets/images/organisation');
        $file = $request->file('logofile');
        
        if ($file) {
            $file->move($path, $imageName);
        }

        $organisation->save();
        
        $organisation->besoins()->sync($request['besoins']);


        $request->session()->flash('status','votre organisation a été modifier avec succès');

        return redirect()->route('organisation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $organisation = Organisation::findOrFail($id);

        $organisation->delete();

        $request->session()->flash('status','votre organisation a été Suprime');

        return redirect()->route('organisation.index');
    }
}
