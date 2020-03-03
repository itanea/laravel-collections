@extends('layouts.app')

@section('content')

<h1>Method uniqueStrict() example</h1>
<h2>Collectionused</h2>
@php
echo '<h3>Strict collection</h3>';
$strictCollection->dump();
@endphp



<h3>Demo of unique() method on collections 'Strict collection'</h3>
<div class="alert alert-success" role="alert">
    With unique() method only :
</div>
<code>$strictCollection->unique()->dump();</code>
@php
$strictCollection->unique()->dump();
@endphp

<div class="alert alert-success" role="alert">
    With unique() method only :
</div>
<code>$strictCollection->uniqueStrict()->dump();</code>
@php
$strictCollection->uniqueStrict()->dump();
@endphp

@endsection
