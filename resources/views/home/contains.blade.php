@extends('layouts.app')

@section('content')

<h1>Method contains() by example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();
echo '<h3>Complexe</h3>';
$complexe->dump();
echo '<h3>Numbers</h3>';
$numbers->dump();
echo '<h3>One or zero</h3>';
$oneorzero->dump();

echo "<h2>Test contains() method on collections</h2>";
@endphp

<h1>C language search</h1>
@component('sourcecode')dump($languages->contains('C'));@endcomponent
@php
dump($languages->contains('C'));
@endphp

<h1>C# language search</h1>
@component('sourcecode')dump($languages->contains('C#'));@endcomponent
@php
dump($languages->contains('C#'));
@endphp

<h1>c# language search</h1>
@component('sourcecode')dump($languages->contains('c#'));@endcomponent
@php
dump($languages->contains('c#'));
@endphp

<h1>Key search 'ref','XZ42'</h1>
@component('sourcecode')dump($complexe->contains('ref', 'XZ42'));@endcomponent
@php
dump($complexe->contains('ref', 'XZ42'));
@endphp

<h1>Key search 'price',''</h1>
@component('sourcecode')dump($complexe->contains('price', ''));@endcomponent
@php
dump($complexe->contains('price', ''));
@endphp

<h1>Contains with callback method</h1>
@component('sourcecode')dump(numbers->contains(function ($value, $key){
return ($value < "-8" or $value> "400");
    });
    );
    @endcomponent
    @php
    dump($numbers->contains(
    function ($value, $key)
    {
    return ($value < "-8" or $value> "400");
        })
        );
        @endphp

        <h1>Contains strict - example</h1>
        @component('sourcecode')dump($oneorzero->containsStrict(0));@endcomponent
        @php
        dump($oneorzero->containsStrict(0));
        @endphp

        @endsection
