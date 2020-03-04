@extends('layouts.app')

@section('content')
<h1>Method Average() by example</h1>
<h2>Collection used</h2>
@php
echo '<h3>Numbers</h3>';
$numbers->dump();

@endphp

<div class="alert alert-success" role="alert">
    Nota : average() is an alias of average()
</div>

<h3>Demo of Average() method on collection 'numbers'</h3>
@component('sourcecode')dump($numbers->average());@endcomponent
@php
dump($numbers->average());
@endphp


<h3>Demo of average() method on collection 'numbers' excluding negative values</h3>
@component('sourcecode')dump($numbers->reject(function ($number) {
return $number < 0; }) ->average());@endcomponent
    @php
    dump($numbers->reject(function ($number) {
    return $number < 0; }) ->average());
        @endphp


        @endsection
