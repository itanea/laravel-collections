@extends('layouts.app')

@section('content')

<h1>Method collect() by example</h1>

<h3>Demo of collect() method</h3>
@component('components/sourcecode')
<pre>
        $languages = collect([
                'php',
                'python',
                'javascript',
                'go',
                'c#',
                'java',
                'cobol',
                'basic'
            ]);
        dump($languages);
    </pre>
@endcomponent
@php
$languages = collect([
'php',
'python',
'javascript',
'go',
'c#',
'java',
'cobol',
'basic'
]);
dump($languages);
@endphp

@endsection
