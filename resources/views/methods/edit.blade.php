@extends('layouts.app')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Editer une méthode</p>
    </header>

    <div class="card-content">
        <div class="content">
            <form action="{{ route('methods.update', $method->id) }}" method="POST" class="m-4">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Nom de la méthode</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Nom de la méthode" aria-describedby="helpId"
                        value="{{ old('name', $method->name) }}">
                    <small id="helpId" class="text-muted">Renseigner le nom de la méthode à ajouter</small>
                    @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class=" form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description"
                        class="form-control @error('description') is-invalid @enderror"
                        placeholder="Décrivez l'objet de la méthode" aria-describedby="helpId"
                        value="{{ old('description', $method->description) }}">
                    <small id="helpId" class="text-muted">Décrivez l objet de la méthode, ce dernier sera affiché
                        sur le
                        listing des méthodes</small>
                    @error('description')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class=" form-group">
                    <label for="since">Depuis Laravel </label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">v</div>
                        </div>
                        <input type="text" name="since" id="since"
                            class="form-control @error('since') is-invalid @enderror"
                            placeholder="Depuis quelle version de Laravel cette collection est présente"
                            aria-describedby="helpId" value="{{ old('since', $method->since) }}">
                    </div>
                    <small id="helpId" class="text-muted">Donnez un numéro de version sous la forme 6.1.2 sans le 'v'
                        devant</small>
                    @error('since')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Code source #1 --}}
                @foreach ($method->sources as $source)
                @php
                //dd($source);
                @endphp
                <div class="form-group">
                    <label for="exemple-name-{{ $loop->iteration }}">Titre du code source {{ $loop->iteration }}</label>
                    <div class="control">
                        <input type="text" name="exemple-name-{{ $loop->iteration }}"
                            id="exemple-name-{{ $loop->iteration }}"
                            class="form-control @error('exemple-name-{{ $loop->iteration }}') is-invalid @enderror"
                            placeholder="" aria-describedby="helpId" value="{!! old('exemple-name-$loop->iteration',
                        $source->name) !!}">
                    </div>
                    <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                    @error('exemple-name-{{ $loop->iteration }}')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror



                </div>
                <div class="form-group">
                    <label for="exemple-{{ $loop->iteration }}">Code source #{{ $loop->iteration }}</label>
                    <textarea rows="4" name="exemple-{{ $loop->iteration }}" id="exemple-{{ $loop->iteration }}"
                        class="form-control @error('exemple-{{ $loop->iteration }}') is-invalid @enderror"
                        placeholder="Proposez un exemple de code" aria-describedby="helpId" value="">{{ $source->code }}
            </textarea>



                    <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la méthode en
                        cours</small>
                    @error('exemple-{{ $loop->iteration }}')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="collections-{{ $loop->iteration }}">Collections associées à la source</label>
                    {{-- Type name field as an array to collect collection items in an array --}}
                    <select multiple class="form-control" name="collections-{{ $loop->iteration }}[]"
                        id="collections-{{ $loop->iteration }}" size="7">
                        <option value="complexe"
                            {{ Str::contains($source->collections, 'complexe') ? 'selected' : '' }}>
                            Complexe</option>
                        <option value="improvednested"
                            {{ Str::contains($source->collections, 'improvednested') ? 'selected' : '' }}>Improved
                            nested</option>
                        <option value="languages"
                            {{ Str::contains($source->collections, 'languages') ? 'selected' : '' }}>Languages</option>
                        <option value="level" {{ Str::contains($source->collections, 'level') ? 'selected' : '' }}>Level
                        </option>
                        <option value="nested" {{ Str::contains($source->collections, 'nested') ? 'selected' : '' }}>
                            Nested</option>
                        <option value="numbers" {{ Str::contains($source->collections, 'numbers') ? 'selected' : '' }}>
                            Numbers</option>
                        <option value="oneorzero"
                            {{ Str::contains($source->collections, 'oneorzero') ? 'selected' : '' }}>One or Zero
                        </option>
                    </select>
                </div>
                @endforeach
                {{-- Code source #x --}}
                <div class="form-group">
                    <label for="exemple-name-{{ $countSources }}">Titre du code source #{{ $countSources }}</label>
                    <input type="text" name="exemple-name-{{ $countSources }}" id="exemple-name-{{ $countSources }}"
                        class="form-control @error('exemple-name-{{ $countSources }}') is-invalid @enderror"
                        placeholder="" aria-describedby="helpId" value="{{ old('exemple-name-$countSources') }}">
                    <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                    @error('exemple-name-{{ $countSources }}')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exemple-{{ $countSources }}">Code source #{{ $countSources }}</label>
                    <textarea name="exemple-{{ $countSources }}" id="exemple-{{ $countSources }}"
                        class="form-control @error('exemple-{{ $countSources }}') is-invalid @enderror"
                        placeholder="Proposez un exemple de code" aria-describedby="helpId"
                        value="{{ old('exemple-$countSources') }}"></textarea>
                    <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la
                        méthode en
                        cours</small>
                    @error('exemple-{{ $countSources }}')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="collections-{{ $countSources }}">Collections associées à la source</label>
                    {{-- Type name field as an array to collect collection items in an array --}}
                    <select multiple class="form-control" name="collections-{{ $countSources }}[]"
                        id="collections-{{ $countSources }}" size="7" value="{{ old('collections-$countSources') }}">
                        <option value="complexe">Complexe</option>
                        <option value="improvednested">Improved nested</option>
                        <option value="languages">Languages</option>
                        <option value="level">Level</option>
                        <option value="nested">Nested</option>
                        <option value="numbers">Numbers</option>
                        <option value="oneorzero">One or Zero</option>
                    </select>
                </div>



                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    </div>

</div>
@endsection
