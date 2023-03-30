@extends('layouts.main')

@section('content')
<div class="container" style="margin-bottom:223px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Intervention</div>

                <div class="card-body">
                    <form method="POST" action="addInter">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="tunnelID" class="col-md-4 col-form-label text-md-end">Tunnel ID</label>

                            <div class="col-md-6">
                                <input id="tunnelID" type="number" class="form-control @error('tunnelID') is-invalid @enderror" name="tunnelID" value="{{ old('tunnelID') }}" required autocomplete="tunnelID" autofocus>

                                @error('tunnelID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="userID" class="col-md-4 col-form-label text-md-end">User ID</label>

                            <div class="col-md-6">
                                <input id="userID" type="number" class="form-control @error('userID') is-invalid @enderror" name="userID" value="{{ old('userID') }}" required autocomplete="userID" autofocus>

                                @error('userID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dateIntervention" class="col-md-4 col-form-label text-md-end">Date intervention</label>

                            <div class="col-md-6">
                                <input id="dateIntervention" type="datetime-local" class="form-control @error('dateIntervention') is-invalid @enderror" name="dateIntervention" value="{{ old('dateIntervention') }}" required autocomplete="dateIntervention" autofocus>

                                @error('dateIntervention')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dateFinIntervention" class="col-md-4 col-form-label text-md-end">Date de fin intervention</label>

                            <div class="col-md-6">
                                <input id="dateFinIntervention" type="datetime-local" class="form-control @error('dateFinIntervention') is-invalid @enderror" name="dateFinIntervention" value="{{ old('dateFinIntervention') }}" required autocomplete="dateFinIntervention" autofocus>

                                @error('dateFinIntervention')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                <textarea id="pole" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="typeVisite" class="col-md-4 col-form-label text-md-end">Type Visite</label>

                            <div class="col-md-6">
                                <input id="typeVisite" type="text" class="form-control @error('typeVisite') is-invalid @enderror" name="typeVisite" value="{{ old('typeVisite') }}" required autocomplete="typeVisite" autofocus>

                                @error('typeVisite')
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