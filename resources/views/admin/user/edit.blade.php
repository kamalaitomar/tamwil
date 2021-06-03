@extends('layouts.admin')

@section('content')

    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une Offre</h1>
        </div>
        <form class="user" action=" {{ route('user.store') }} " method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control " id="nom" name="nom"  value="{{old('nom', $user->name)}}">
                    @error('nom')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control " id="email" name="email"  value="{{old('email', $user->email)}}">
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control " id="password" name="password" >
                @error('password')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role"  class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}"  @if($userrole[0]== $role->id)selected @endif > {{ $role->name }} </option>
                    @endforeach
                </select>
                @error('role')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                Ajouter
            </button>
            
        </form>
        
    </div>


@endsection