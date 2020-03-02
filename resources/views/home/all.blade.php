@extends('layouts.app')

@section('content')

<h1>Method all() by example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();

@endphp


<h3>Demo of all() method on collection 'languages'</h3>
<code>dump($languages->all());</code>
@php
dump($languages->all());
@endphp

@endsection
