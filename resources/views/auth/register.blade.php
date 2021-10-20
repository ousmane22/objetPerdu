@extends('partials.nav')
{{-- <x-guest-layout>
    <x-auth-card> --}}
        {{-- <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> --}}

        <!-- Validation Errors -->
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form> --}}
    {{-- </x-auth-card>
</x-guest-layout> --}}

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h2 class="text-info">Inscription</h2>
  </div>
<div class="row">

    <div class="col-lg-6">

      <div class="row">
        <div class="col-md-12">
          <div class="info-box">
            <i class="bx bx-user"></i>
            <h3>Sama Objet</h3>
            <p>Inscription</p>
          </div>
        </div>
      </div>

    </div>

    <div class="col-lg-6">
      <form action="{{route('register')}}" method="post" role="form">
        @csrf
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required value="{{ old('name')}}">
            <span class="text-danger">
                @error('name')
                 {{ $message }}
                @enderror
            </span>
          </div>

          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email"   value="{{ old('email')}}" required>
            <span class="text-danger">
                @error('email')
                 {{ $message }}
                @enderror
            </span>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-6 form-group">
            <input type="password" name="password" class="form-control"   value="{{ old('password')}}" placeholder="Mot de passe" required>
            <span class="text-danger">
                @error('password')
                 {{ $message }}
                @enderror
            </span>
          </div>

          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="password" name="password_confirmation" class="form-control"   value="{{ old('password_confirmation')}}" placeholder="Répeter Mot de passe" required>
            <span class="text-danger">
                @error('password_confirmation')
                 {{ $message }}
                @enderror
            </span>
          </div>
        </div>

        <div class="col-md-12 form-group mt-4">
            <input type="number" name="telephone" class="form-control"   value="{{ old('telephone')}}" placeholder="+221 XXX XX XX" required>
            <span class="text-danger">
                @error('telephone')
                 {{ $message }}
                @enderror
            </span>
        </div>




        <button class="btn btn-success mt-2" type="submit">S'inscrire</button>
      </form>
    </div>

  </div>
@stop
