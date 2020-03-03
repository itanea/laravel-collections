@extends('layouts.app')

@section('content')

<h1>Method eachSpread() example</h1>
<h2>Collectionused</h2>
@php
echo '<h3>Nested improved collection</h3>';
$nestedImproved->dump();
@endphp



<h3>Demo of eachSpread() method on collection 'Nested Improved'</h3>
<div class="alert alert-success" role="alert">
    With unique() method only :
</div>

<div class="my-4">
    <img class="img-fluid" alt="Laravel Collections : eachSpread() method example"
        src="/images/laravel-collections-eachSpread.png" />
</div>

<div class="card-deck">
    @php
    $nestedImproved->eachSpread(function ($name, $difficulty, $price, $tax) {
    $ttcPrice = round($price * (1 + $tax / 100), 2);
    echo "
    <div class='card border-info mb-3' style='max-width: 18rem;''>
            <div class=' card-header'>$name</div>
    <div class='card-body text-info'>
        <h5 class='card-title'>Difficulty : $difficulty</h5>
        <p class='card-text'>Without tax price : $price €</p>
    </div>
    <div class='card-footer'>
        <small class='text-muted'>With Tax : $ttcPrice €</small>
    </div>
</div>
";
});
@endphp
</div>
@endsection
