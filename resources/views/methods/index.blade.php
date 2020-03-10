@extends('layouts.app')


@section('content')
@if(session()->has('info'))
<div class="alert alert-success">
    {{ session('info') }}
</div>
@endif
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Méthodes</p>
        <a name="button-method-create" id="button-method-create" class="btn btn-primary"
            href="{{ route('methods.create') }}" role="button">Créer une nouvelle
            méthode</a>
    </header>
    <div class="card-content">
        <div class="content">
            <table class="table is-hoverable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($methods as $method)
                    <tr>
                        <td>{{ $method->id }}</td>
                        <td><strong>{{ $method->name }}</strong></td>
                        <td><a class="btn btn-primary" href="{{ route('methods.show', $method->slug) }}">Voir</a></td>
                        <td><a class="btn btn-warning" href="{{ route('methods.edit', $method->slug) }}">Modifier</a>
                        </td>
                        <td>
                            <form action="{{ route('methods.destroy', $method->slug) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<footer class="card-footer">
    {{ $methods->links() }}
</footer>
@endsection
