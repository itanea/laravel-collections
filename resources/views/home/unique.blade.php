@extends('layouts.app')

@section('content')

<h1>Method unique() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Level</h3>';
$level->dump();
echo '<h3>Nested</h3>';
$nested->dump();
@endphp



<h3>Demo of unique() method on collections 'level' and 'nested'</h3>
<div class="alert alert-success" role="alert">
    This method aims all unique item from a collection.
</div>
<h4>With a simple collection (level)</h4>
<code>dump($level->unique());</code>
@php
dump($level->unique());
@endphp

<h4>With a nested collection (nested)</h4>
<code>dump($nested->unique('level'));</code>
@php
dump($nested->unique('level'));
@endphp

<h4>With a nested collection by price (nested)</h4>
<code>dump($nested->unique('price'));</code>
@php
dump($nested->unique('price'));
@endphp

<h4>With a nested collection and your own callback (nested)</h4>
<code>$nested->unique(function ($item) {
    return $item['level'].$item['price'];
})->dump();</code>
@php
$nested->unique(function ($item) {
return $item['level'].$item['price'];
})->dump();
@endphp

@endsection
