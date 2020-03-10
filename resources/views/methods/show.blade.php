@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <header class="card-header bg-info text-white">
            <h3 class="card-header-title display-5 text-center">Laravel collections</h3>
            <h1 class="card-header-title display-3 text-center">@lang('frontend.method') {{ $method->name }}()</h1>
        </header>
        <div class="card-body">
            <div class="content">
                <h2 class="display-4">Description</h2>
                <p>{!! $method->description !!}</p>


                <hr>

                <h2 class="display-4">@lang('frontend.examples')</h2>
                <p>{!! trans_choice('frontend.x_examples_for_this_collection', $sources->count()) !!}</p>
                {{-- Il y a {{ $sources->count() }} exemples pour cette collection</h2> --}}

                @if ($sources->isNotEmpty())
                @foreach ($sources as $source)
                @php
                // count collection used by this example
                $countCollections = str_word_count($source->collections);
                @endphp
                <h3 class="bg-danger text-white p-4 mt-5 mb-3">@lang('frontend.example') #{{ $source->order }} :
                    {{ $source->name }}</h3>
                <h4 class="my-3"><strong>{{ trans_choice('frontend.used_collections', $countCollections) }}</strong>
                </h4>
                @if ($countCollections > 0)
                <div class="alert alert-success" role="alert">
                    <strong>@lang('frontend.collections_help')</strong>
                </div>
                <button class="btn btn-warning" type="button" data-toggle="collapse" data-target=".multi-collapse"
                    aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
                    <h4>@lang('frontend.collections_see_all')</h4>
                </button>
                    @foreach (Str::of($source->collections)->explode(',') as $item)

                    <div class="my-4">
                        @component("components/collection-$item")
                    </div>
                    @endcomponent
                    @endforeach
                @else
                <div class="alert alert-danger" role="alert">
                    <strong>@lang('frontend.collections_none_help')</strong>
                </div>
                @endif
                <h4 class="my-3"><strong>@lang('frontend.source_code')</strong></h4>
                <pre>
<code class="language-php">
{{ $source->comment }}
</code>
</pre>
                <h4 class="my-3"><strong>@lang('frontend.result')</h4>
                <pre>
    <code class="language-php">
@php
eval(trim($source->comment));
@endphp
    </code>

</pre>

                @endforeach
                @else
                <div class="alert alert-danger" role="alert">
                    <strong>@lang('frontend.example_none')</strong>
                </div>

                @endif


            </div>
        </div>
    </div>
</div>
@endsection
