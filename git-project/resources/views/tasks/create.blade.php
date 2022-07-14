@extends('layouts.app')
@section('content')
<div class="countainer">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Création d'une tâche
                <div class="card-body"></div>
                <form action="{{ route('tasks.store') }}" method="post">
@csrf
@if (session()-> has ('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
    <div class="from-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Titre de la tâche" value=" {{ old('title') }}">
        @error('title')
        <div class="invalid-feedback"> {{ $message }} </div>
        @enderror
    </div>
    <div class="form-group">
            <label for="description">Détail</label>
            <textarea class="form-control @error('detail') is-invalid @enderror" i="detail" name="detail" placeholder="détail de la tache">{{ old('detail') }} </textarea>
            @error('detail')
            <div class="invalid-feedback"> {{ $message }} </div>
            @enderror
            <br>
    </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
        </div>
</div>
@endsection