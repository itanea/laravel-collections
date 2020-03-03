@extends('layouts.app')

@section('content')

{{--  content  --}}

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Explore Laravel Collections</h1>
        <p class="lead">Below, you can navigate to one of the {{ $datas->count()}} Laravel Collection methods.</p>
    </div>
</div>
@foreach ($datas->chunk(3) as $chunk)
<div class="row justify-content-center">
    @foreach ($chunk as $data)
    <div class="card mx-4 my-4 text-center" style="width: 18rem;">
        <img src="/images/laravel-logolockup-rgb-red_700x191.png" class="card-img-top my-2" alt="Laravel">
        <div class="card-body bg-danger text-white">
            <h5 class="card-title">Method {{ $data->name }}</h5>
            <p class="card-text">@php
                $search = ['/**', '*', '/'];
                // substr($chaine, 0, 45).'...';

                echo Str::limit(str_replace($search, "", $data->getDocComment()),80); @endphp
            </p>
            <a href="/home/{{ $data->name }}" class="btn btn-warning">More about <span
                    class="badge badge-dark"><strong>{{ $data->name }}</strong></span></a>
        </div>
    </div>
    @endforeach
</div>
@endforeach
@endsection
