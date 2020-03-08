@extends('layouts.app')

@section('content')
<h1>Method Avg() by example</h1>
<h2>Collection used</h2>
@component("components/collection-$numbersName")
@endcomponent
@php
echo '<h3>Numbers</h3>';
$numbers->dump();


@endphp

<div class="alert alert-success" role="alert">
    Nota : avg() is an alias of average()
</div>

<h3>Demo of Avg() method on collection 'numbers'</h3>
@component('components/sourcecode')dump($numbers->avg());@endcomponent
@php
dump($numbers->avg());
@endphp


<h3>Demo of avg() method on collection 'numbers' excluding negative values</h3>
@component('components/sourcecode')dump($numbers->reject(function ($number) {
return $number < 0; }) ->avg());@endcomponent
    @php
    dump($numbers->reject(function ($number) {
    return $number < 0; }) ->avg());
        @endphp


        @endsection
