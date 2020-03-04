@extends('layouts.app')

@section('content')

<h1>Method every() example</h1>
<h2>Collection used</h2>
@php
echo '<h3>Languages collection</h3>';
$languages->dump();

echo '<h3>Complexe collection</h3>';
$complexe->dump();
@endphp



<h3>Demo of every() method on collections 'Languages' and 'Complexe'</h3>
<div class="alert alert-success" role="alert">
    Test on languages collection (with only strings)
</div>
<code>
    $testItemsAreString = $languages->every(function ($value, $key) {
        return is_string($value);
    });

    dump($testItemsAreString);
</code>
@php
$testItemsAreString = $languages->every(function ($value, $key) {
return is_string($value);
});

dump($testItemsAreString);
@endphp

<div class="alert alert-success" role="alert">
    Test on languages complexe (with strings and other types)
</div>
<code>
    $testItemsAreString = $complexe->every(function ($value, $key) {
        return is_string($value);
    });

    dump($testItemsAreString);
</code>
@php
$testItemsAreString = $complexe->every(function ($value, $key) {
return is_string($value);
});

dump($testItemsAreString);
@endphp

@endsection
