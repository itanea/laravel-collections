@extends('layouts.app')

@section('content')

<h1>Method concat() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();
echo '<h3>Complexe</h3>';
$complexe->dump();
echo '<h3>Numbers</h3>';
$numbers->dump();
echo '<h3>Level</h3>';
$level->dump();

echo "<h2>Concat collections</h2>";
@endphp
@component('sourcecode')dump($languages->concat($level)->concat($numbers)->concat($complexe));@endcomponent
@php
dump($languages->concat($level)->concat($numbers)->concat($complexe));
@endphp

@endsection
