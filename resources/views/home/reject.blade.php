@extends('layouts.app')

@section('content')

<h1>Method reject() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Numbers</h3>';
$numbers->dump();
@endphp



<h3>Demo of reject() method on collection 'numbers'</h3>
<div class="alert alert-success" role="alert">
    This method aims to reject some item from a collection by using an anonym function
</div>
<code>dump($numbers->reject(function ($number) {
    return $number < 0;
 }));</code>
@php
dump($numbers->reject(function ($number) {
return $number < 0; })); @endphp @endsection
