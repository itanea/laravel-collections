@extends('layouts.app')

@section('content')

<h1>Method count() by example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();

@endphp


<h1>Count items of collection</h1>
<code>dump($languages->count());</code>
@php
dump($languages->count());
@endphp

@endsection
