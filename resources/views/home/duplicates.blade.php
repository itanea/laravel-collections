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
    <code>dump($level->duplicates());</code>
    @php
    dump($level->duplicates());
    @endphp

    <h2>DUPLICATED with array of objects</h2>
    <code>dump($nested->duplicates('level'));</code>
    @php
    dump($nested->duplicates('level'));
    @endphp

@endsection
