@extends('layouts.app')

@section('content')

<h1>Method last() example</h1>
<h2>Collection used</h2>
@php
echo '<h3>Languages collection</h3>';
$languages->dump();

echo '<h3>Complexe collection</h3>';
$complexe->dump();
@endphp



<h3>Demo of last() method on collections 'Languages' and 'Complexe'</h3>
<div class="alert alert-success" role="alert">
    Test on languages collection (with only strings)
</div>
@component('sourcecode')
$testItemsAreString = $languages->last(function ($value, $key) {
return is_string($value);
});

dump($testItemsAreString);

@endcomponent

@php
$testItemsAreString = $languages->last(function ($value, $key) {
return is_string($value);
});

dump($testItemsAreString);
@endphp

<div class="alert alert-success" role="alert">
    Test on languages complexe (with strings and other types). Return null because none elements are string
</div>

@component('sourcecode')
$testItemsAreString = $complexe->last(function ($value, $key) {
return is_string($value);
});

dump($testItemsAreString);
@endcomponent

@php
$testItemsAreString = $complexe->last(function ($value, $key) {
return is_string($value);
});

dump($testItemsAreString);
@endphp

@endsection
