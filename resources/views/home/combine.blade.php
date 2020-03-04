@extends('layouts.app')

@section('content')

<h1>Method combine() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Languages</h3>';
$collection['languages']->dump();
echo '<h3>Level</h3>';
$collection['level']->dump();


echo "<h2>COMBINED</h2>";
@endphp
@component('sourcecode')dump($collection['languages']->combine($collection['level']));@endcomponent
@php
dump($collection['languages']->combine($collection['level']));
@endphp

@endsection
