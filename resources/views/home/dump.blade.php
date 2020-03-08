@extends('layouts.app')

@section('content')

<h1>Method dump() example</h1>
<h2>Collections used</h2>
@php
echo '<h3>Languages</h3>';
$languages->dump();
@endphp



<h3>Demo of dump() method on collection 'languages'</h3>
<div class="alert alert-success" role="alert">
    This method dumps a collection content and doesn't stop script execution
</div>
@component('components/sourcecode')$languages->dump();
echo "This appears after dump because dump don't stop the party ";@endcomponent
@php
$languages->dump();
echo "This appears after dump because dump don't stop the party ";;
@endphp
@endsection
