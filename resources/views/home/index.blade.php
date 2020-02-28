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
            <p class="card-text">If you want know more about method {{ $data->name }}, click on the button below
            </p>
            <a href="/home/{{ $data->name }}" class="btn btn-warning">More about {{ $data->name }}</a>
        </div>
    </div>


    {{--  <div class="col-xs-4">{{ $data->name }}</div> --}}
@endforeach
</div>
@endforeach
@endsection
