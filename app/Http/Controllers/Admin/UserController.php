<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $user= new User();
        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->assignRole($request->input('role'));

        $user->save();

        $request->session()->flash('status','votre user a été ajoutée avec succès');

        return redirect()->route('user.index');
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
        $user = User::findOrFail($id);
        $roles = Role::all();
        $userrole = $user->roles->pluck('id');
        return view('Admin.user.edit', compact('user', 'roles', 'userrole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUser $request, $id)
    {
        
        $user = User::findOrFail($id); 
        
        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));


        $user->roles()->detach();
        $user->assignRole($request->input('role'));

        $user->save();

        $request->session()->flash('status','votre user a été modifier avec succès');

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        
        $user = User::findOrFail($id); 
        
        $user->roles()->detach();
        
        $user->delete();

        $request->session()->flash('status','votre user a été Suprime');

        return redirect()->route('user.index');
    }
}
