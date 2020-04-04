@extends('layouts.app')

@section('content')

{{--  content  --}}

<div class="jumbotron jumbotron-fluid text-center bg-white border border-danger rounded">
    <div class="container">
        <h1 class="display-4 text-danger">Explore les Collections Laravel</h1>
        <p class="lead">Ci-dessous, tu vas pouvoir découvrir une des {{ $datas->count()}} méthodes des collections
            Laravel. En tout, il y en a 118, le reste arrive vite ;-)</p>
    </div>
    @foreach ($datas->chunk(3) as $chunk)
    <div class="row justify-content-center">
        @foreach ($chunk as $data)
        <div class="card mx-4 my-4 text-center" style="width: 18rem;border-color:red;">
            <div class="card-header bg-white text-dark">
                <h2 class="my-0"><a href="/method/{{ $data->name }}">{{ $data->name }}</a></h2>
                @if ($data->since)
                <p class="my-0"><small>depuis Laravel @if(strpos($data->since, '<')===false)<span
                            class="badge badge-danger">v{{ $data->since }}</span>@else<span class="badge badge-danger">
                                < v{{ substr($data->since,1) }}</span>@endif </small> </p> @else <p class="my-0"><small>
                                        <x-random-sentences /></small></p>
                @endif
            </div>
            <div class="card-body bg-danger text-white">
                <p class="card-text">
                    {{ Str::limit($data->description, 80) }}
                </p>
                <a href="/method/{{ $data->name }}" class="btn btn-warning">En savoir plus sur <span
                        class="badge badge-dark"><strong>{{ $data->name }}</strong></span></a>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
    @endsection
