@extends('partials.nav')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2 class="text-info">Connexion</h2>
  </div>
<div class="row">

    <div class="col-lg-6">

      <div class="row">
        <div class="col-md-12">
          <div class="info-box">
            <i class="bx bx-user"></i>
            <h3>Sama Objet</h3>
            <p>Connexion</p>
          </div>
        </div>
      </div>

    </div>

    <div class="col-lg-6">
      <form action="{{route('login')}}" method="post" role="form">
        @csrf


          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email"   value="{{ old('email')}}" required>
            <span class="text-danger">
                @error('email')
                 {{ $message }}
                @enderror
            </span>
          </div>


          <div class="col-md-6 form-group mt-3">
            <input type="password" name="password" class="form-control"   value="{{ old('password')}}" placeholder="Mot de passe" required>
            <span class="text-danger">
                @error('password')
                 {{ $message }}
                @enderror
            </span>
          </div>
        <button class="btn btn-success mt-2" type="submit">Se connecter</button>
      </form>
    </div>

  </div>
@stop
