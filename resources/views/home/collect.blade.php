@extends('layouts.app')

@section('content')

<h1>Method collect() by example</h1>

<h3>Demo of collect() method</h3>
<code>
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
</code>
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
