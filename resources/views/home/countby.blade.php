@extends('layouts.app')

@section('content')

<h1>Method countBy() by example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Level</h3>';
$level->dump();

@endphp


<h3>Demo of countBy() method on collection 'level'</h3>
@component('components/sourcecode')dump($level->countBy());@endcomponent
@php
dump($level->countBy());
@endphp

@endsection
