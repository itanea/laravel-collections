@extends('layouts.app')

@section('content')
<h1>Method containsStrict() by example</h1>
<h2>Collection used</h2>
@php
echo '<h3>One or Zero</h3>';
$oneorzero->dump();

@endphp

<div class="alert alert-success" role="alert">
    Nota : containsStrict() is the strict version of contains() method
</div>

<h3>Demo of containsStrict() method on collection 'oneorzero'</h3>
@component('components/sourcecode')dump($oneorzero->containsStrict(false));@endcomponent
@php
dump($oneorzero->containsStrict(false));
@endphp

@component('components/sourcecode')dump($oneorzero->containsStrict(0));@endcomponent
@php
dump($oneorzero->containsStrict(0));
@endphp

@endsection
