@extends('layouts.main')
<link rel="stylesheet" href="/css/home.css" />
@section('content')
    <div class="d-flex justify-content-center">
        <img src="./images/logoBETUF.png" width="300" alt="LogoBETuF">
    </div>
    <div class="redirection">
        @if($user)
            @if($user->statutAdmin ==1)
                <a href="{{url('register')}}">Créer User</a>
                <a href="{{url('addIntervention')}}">Créer Intervention</a>
                <a href="{{url('addTunnel')}}">Créer Tunnel</a>
            @endif
        @endif
    </div>

    <div id="articles">
        <div class="article">
            <img src="images/img1.jpeg" alt="ImageArticle1">
            <p>Le BETuF, c'est une centaine de corps de métiers, ce sont nos projets, nos membres, nos ambitions et une information 24h/24 sur la sécurité dans nos tunnels. Venez les découvrir.</p>
            <button>Découvrir</button>
        </div>

        <div class="article">
            <img src="images/img2.jpeg" alt="ImageArticle2">
            <p>A l'occasion de ses 60 ans, découvrez l'histoire fascinante du tunnel du Mont Blanc, l'histoire d'une coopération fructueuse entre deux pays européens.</p>
            <button>Découvrir</button>
        </div>
    </div>
@endsection
