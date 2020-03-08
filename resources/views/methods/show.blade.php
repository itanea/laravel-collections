@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <header class="card-header">
            <h1 class="card-header-title">Laravel collections : méthode {{ $method->name }}()</h1>
        </header>
        <div class="card-body">
            <div class="content">
                <h2>Description</h2>
                <p>{{ $method->description }}</p>
                <h2>Collection(s) utilisée(s)</h2>
                <div class="alert alert-success" role="alert">
                    <strong>Cliquez sur chaque collection pour voir son code, ou cliquez sur le bouton 'Voir toutes les
                        collections' pour toutes les ouvrir en une fois.</strong>
                </div>
                <button class="btn btn-warning" type="button" data-toggle="collapse" data-target=".multi-collapse"
                    aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
                    <h4>Voir toutes les
                        collections</h4>
                </button>
                @foreach (Str::of($method->collections)->explode(',') as $item)
                <div class="my-4">
                    @component("components/collection-$item")
                </div>
                @endcomponent
                @endforeach
                <hr>

                <h2>Sources</h2>
                @if ($sources->isNotEmpty())
                @foreach ($sources as $source)
                <h3>{{ $source->name }}</h3>
                <pre>
                    <h5>Code source</h5>
<code class="language-php">
{{ $source->comment }}
</code>
<h5>Résultat</h5>
@php
eval($source->comment);

@endphp


</pre>
                @endforeach
                @else
                <div class="alert alert-danger" role="alert">
                    <strong>Il n'y a pas de code source pour cet méthode</strong>
                </div>

                @endif


            </div>
        </div>
    </div>
</div>
@endsection
