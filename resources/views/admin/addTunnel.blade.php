@extends('layouts.main')

@section('content')
<div class="container" style="margin-bottom:223px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Tunnel</div>

                <div class="card-body">
                    <form method="POST" action="addTun">
                        @csrf

                        <div class="row mb-3">
                            <label for="coordGPS" class="col-md-4 col-form-label text-md-end">CoordGPS</label>

                            <div class="col-md-6">
                                <input id="coordGPS" type="text" class="form-control @error('coordGPS') is-invalid @enderror" name="coordGPS" value="{{ old('coordGPS') }}" required autocomplete="coordGPS" autofocus>

                                @error('coordGPS')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ville" class="col-md-4 col-form-label text-md-end">Ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="codePostal" class="col-md-4 col-form-label text-md-end">Code Postal</label>

                            <div class="col-md-6">
                                <input id="codePostal" type="number" class="form-control @error('codePostal') is-invalid @enderror" name="codePostal" value="{{ old('codePostal') }}" required autocomplete="codePostal" autofocus>

                                @error('codePostal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="hauteurTunnel" class="col-md-4 col-form-label text-md-end">Hauteur Tunnel</label>

                            <div class="col-md-6">
                                <input id="hauteurTunnel" type="number" class="form-control @error('hauteurTunnel') is-invalid @enderror" name="hauteurTunnel" value="{{ old('hauteurTunnel') }}" required autocomplete="hauteurTunnel" autofocus>

                                @error('hauteurTunnel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nbTube" class="col-md-4 col-form-label text-md-end">Nombre de Tube</label>

                            <div class="col-md-6">
                                <input id="nbTube" type="number" class="form-control @error('nbTube') is-invalid @enderror" name="nbTube" value="{{ old('nbTube') }}" required autocomplete="nbTube" autofocus>

                                @error('nbTube')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nbVoieParTube" class="col-md-4 col-form-label text-md-end">Nombre de voie par tube</label>

                            <div class="col-md-6">
                                <input id="nbVoieParTube" type="number" class="form-control @error('nbVoieParTube') is-invalid @enderror" name="nbVoieParTube" value="{{ old('nbVoieParTube') }}" required autocomplete="nbVoieParTube" autofocus>

                                @error('nbVoieParTube')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="anneeConstruction" class="col-md-4 col-form-label text-md-end">Année de construction</label>

                            <div class="col-md-6">
                                <input id="anneeConstruction" type="number" class="form-control @error('anneeConstruction') is-invalid @enderror" name="anneeConstruction" value="{{ old('anneeConstruction') }}" required autocomplete="anneeConstruction" autofocus>

                                @error('anneeConstruction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numMAGALI" class="col-md-4 col-form-label text-md-end">Numéro MAGALI</label>

                            <div class="col-md-6">
                                <input id="numMAGALI" type="number" class="form-control @error('numMAGALI') is-invalid @enderror" name="numMAGALI" value="{{ old('numMAGALI') }}" required autocomplete="numMAGALI" autofocus>

                                @error('numMAGALI')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numAGORA" class="col-md-4 col-form-label text-md-end">Numéro AGORA</label>

                            <div class="col-md-6">
                                <input id="numAGORA" type="number" class="form-control @error('numAGORA') is-invalid @enderror" name="numAGORA" value="{{ old('numAGORA') }}" required autocomplete="numAGORA" autofocus>

                                @error('numAGORA')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection