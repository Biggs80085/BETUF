@extends('layouts.main')
<link rel="stylesheet" href="/css/login.css" />
@section('content')


    <p>
        Cette page de connexion est reservée au personnel travaillant pour le BETuF. <br> Par conséquent vous ne pouvez pas creer de compte vous même, cette tâche est reservée aux administrateurs.
    </p>

    <div id="formLogin">
        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div id="labels">
                <label for="mail">Email :</label>
                <label for="password">Mot de passe :</label>
            </div>
            <div id="inputs">
                <input id="email" type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
                <input id="btnConnexion" type="submit" value="Connexion">
            </div>

            <!--<div id="mail">
                <label for="mail">Email :</label>
                <input type="text" name="mail">
            </div>

            <br>

            <div id="password">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password">
                <br>
                <a href="">Mot de passe oublié ?</a>
            </div>

            <br>
            <input id="btnConnexion" type="submit" value="Connexion">-->
        </form>
    </div>

    
@endsection