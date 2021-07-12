<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrganisation;
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
        $organisations = Organisation::paginate(5);
        return view('admin.organisation.organisations', compact('organisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organisation.createOrganisation');
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
        $organisation->email = $request->input('email');
        $organisation->tel = $request->input('tel');
        $organisation->adresse_fr = $request->input('adresse');
        $organisation->web_site = $request->input('web_site');
        $organisation->type_d_organisation_fr = $request->input('type');
        $organisation->presentation_fr = $request->input('presentation');
        $organisation->icone = $request->input('logo');

        $organisation->save();

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
        return view('admin.organisation.editOrganisation', compact('organisation'));
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
        $organisation->email = $request->input('email');
        $organisation->tel = $request->input('tel');
        $organisation->adresse_fr = $request->input('adresse');
        $organisation->web_site = $request->input('web_site');
        $organisation->type_d_organisation_fr = $request->input('type');
        $organisation->presentation_fr = $request->input('presentation');
        $organisation->icone = $request->input('logo');

        $organisation->save();

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
