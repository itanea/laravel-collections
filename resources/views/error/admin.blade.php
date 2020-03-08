@extends('layouts.app')

@section('content')

<div class="content text-center">
    <div class="alert alert-danger" role="alert">
        <h1>Erreur :</h1>
        <h3>{{ $message }}</h3>
    </div>
</div>

@endsection
