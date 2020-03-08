@extends('layouts.app')

@section('content')

<h1>Method duplicates() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Levels</h3>';
$level->dump();
echo '<h3>Nested</h3>';
$nested->dump();

echo "<h2>DUPLICATED</h2>";
@endphp
@component('components/sourcecode')dump($level->duplicates());@endcomponent
@php
dump($level->duplicates());
@endphp

<h2>DUPLICATED with array of objects</h2>
@component('components/sourcecode')dump($nested->duplicates('level'));@endcomponent
@php
dump($nested->duplicates('level'));
@endphp

@endsection
