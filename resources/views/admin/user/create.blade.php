@extends('layouts.admin')

@section('content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ajouter une Offre</h1>
        </div>
        <form class="user" action=" {{ route('user.store') }} " method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control " id="nom" name="nom"  value="{{old('nom')}}">
                    @error('nom')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control " id="email" name="email"  value="{{old('email')}}">
                    @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control " id="password" name="password">
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
                        <option value="{{$role->id }}"> {{ $role->name }} </option>
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

@section('script')
      
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            
            $('#profils').val( @json(old('profils')) );
            $('#profils').trigger('change');
            
            $('#cycles').val( @json(old('cycles')) );
            $('#cycles').trigger('change');
            
            $('#besoins').val( @json(old('besoins')) );
            $('#besoins').trigger('change');
            
            $('#organisations').val( @json(old('organisations')) );
            $('#organisations').trigger('change');
        });
    </script>
@endsection