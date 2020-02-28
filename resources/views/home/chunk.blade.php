@extends('layouts.app')

@section('content')

        <h1>Method chunk() example</h1>
        <h2>Collection used</h2>
        @php
        echo '<h3>Languages</h3>';
        $languages->dump();
        $chunked_languages = $languages->chunk(3);

        echo "<h2>CHUNKED</h2>";
        @endphp
        <code>$chunked_languages = $languages->chunk(3);</code>
        @php
        dump($chunked_languages);

        $colapse_languages = $chunked_languages->collapse();

        echo "<h2>COLLAPSED</h2>";
        @endphp
        <code>$colapse_languages = $chunked_languages->collapse();</code>
        @php
        dump($colapse_languages);
        @endphp

@endsection
