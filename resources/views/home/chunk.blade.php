@extends('layouts.app')

@section('content')

<h1>Method chunk() example</h1>
<h2>Collection used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();
$chunked_languages = $languages->chunk(3);

echo "<h2>CHUNKED</h2>";
@endphp
@component('sourcecode')$chunked_languages = $languages->chunk(3);@endcomponent
@php
dump($chunked_languages);

$colapse_languages = $chunked_languages->collapse();

echo "<h2>COLLAPSED</h2>";
@endphp
@component('sourcecode')$colapse_languages = $chunked_languages->collapse();@endcomponent
@php
dump($colapse_languages);
@endphp

@endsection
