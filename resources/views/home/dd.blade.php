@extends('layouts.app')

@section('content')

<h1>Method dd() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();
@endphp



<h3>Demo of dd() method on collection 'languages'</h3>
<div class="alert alert-success" role="alert">
    This method dumps a collection content and stops script execution
</div>
@component('components/sourcecode')$languages->dd();
echo "This never appears !";@endcomponent
@php
$languages->dump();
@endphp
@endsection
