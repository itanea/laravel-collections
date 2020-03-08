@extends('layouts.app')

@section('content')

<h1>Method crossJoin() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();
echo '<h3>Level</h3>';
$level->dump();
@endphp



<h3>Demo of crossJoin() method on collections 'languages' and 'level'</h3>
<div class="alert alert-success" role="alert">
    This method aims to produce a Cartesian product with all possible permutations between collections provided
</div>
@component('components/sourcecode')dump($languages->crossJoin($level->unique()));@endcomponent
@php
dump($languages->crossJoin($level->unique()));
@endphp
@endsection
