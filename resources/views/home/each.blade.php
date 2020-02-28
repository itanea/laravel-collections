@extends('layouts.app')

@section('content')

<h1>Method each() example</h1>
<h2>Collection used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();

echo "<h2>each() example : capitalize items</h2>";
@endphp
<code>$languages->each(function($item, $key) {
    echo strtoupper($item) . '<br />';
    });</code>
<p>
    @php
    $languages->each(function($item, $key) {
    echo strtoupper($item) . '<br />';
    });
    @endphp
</p>

@php
echo "<h2>each() example : capitalize items and stop when java detected</h2>";
@endphp
<code>$languages->each(function($item, $key) {
    if ($item == 'java')
    {
        return false;
    }
    echo strtoupper($item) . '<br />';
    });</code>
<p>
    @php
    $languages->each(function($item, $key) {
    if ($item == 'java')
    {
    return false;
    }
    echo strtoupper($item) . '<br />';
    });
    @endphp
</p>

@endsection
