@extends('layouts.app')

@section('content')

<h1>Method duplicatesStrict() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>New collection</h3>';
$newcollection = collect([
0,
1,
false,
false,
true,
1,
100,
"expert",
'expert'
]
);
$newcollection->dump();
@endphp



<h3>Demo of duplicatesStrict() method on collection 'levels'</h3>
<div class="alert alert-success" role="alert">
    Use of duplicates() method in no strict mode
</div>
@component('components/sourcecode')dump($newcollection->duplicates());@endcomponent
@php
dump($newcollection->duplicates());
@endphp

<div class="alert alert-success" role="alert">
    Use of duplicatesStrict() and compare with previous method
</div>
@component('components/sourcecode')dump($newcollection->duplicatesStrict());@endcomponent
@php
dump($newcollection->duplicatesStrict());
@endphp

@endsection
