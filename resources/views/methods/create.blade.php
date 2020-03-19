@extends('layouts.app')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Création d'une méthode</p>
    </header>

    <div class="card-content">
        <div class="content">
            <form action="{{ route('methods.store') }}" method="POST" class="m-4">
                @csrf
                <div class="form-group">
                    <label for="name">Nom de la méthode</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Nom de la méthode" aria-describedby="helpId" value="{{ old('name') }}">
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
                        value="{{ old('description') }}">
                    <small id="helpId" class="text-muted">Décrivez l'objet de la méthode, ce dernier sera affiché
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
                            aria-describedby="helpId" value="{{ old('since') }}">
                    </div>
                    <small id="helpId" class="text-muted">Donnez un numéro de version sous la forme 6.1.2 sans le 'v'
                        devant</small>
                    @error('since')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Code source #1 --}}
                <div class="form-group">
                    <label for="exemple-name-1">Titre du code source #1</label>
                    <input type="text" name="exemple-name-1" id="exemple-name-1"
                        class="form-control @error('exemple-name-1') is-invalid @enderror" placeholder=""
                        aria-describedby="helpId" value="{{ old('exemple-name-1') }}">
                    <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                    @error('exemple-name-1')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exemple-1">Code source #1</label>
                    <textarea name="exemple-1" id="exemple-1"
                        class="form-control @error('exemple-1') is-invalid @enderror"
                        placeholder="Proposez un exemple de code" aria-describedby="helpId"
                        value="{{ old('exemple-1') }}"></textarea>
                    <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la méthode en
                        cours</small>
                    @error('exemple-1')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="collections-1">Collections associées à la source</label>
                    {{-- Type name field as an array to collect collection items in an array --}}
                    <select multiple class="form-control" name="collections-1[]" id="collections-1" size="7"
                        value="{{ old('collections-1') }}">
                        <option value="complexe">Complexe</option>
                        <option value="improvednested">Improved nested</option>
                        <option value="languages">Languages</option>
                        <option value="level">Level</option>
                        <option value="nested">Nested</option>
                        <option value="numbers">Numbers</option>
                        <option value="oneorzero">One or Zero</option>
                    </select>
                </div>

                {{-- Code source #2 --}}
                <div class="form-group">
                    <label for="exemple-name-2">Titre du code source #2</label>
                    <input type="text" name="exemple-name-2" id="exemple-name-2"
                        class="form-control @error('exemple-name-2') is-invalid @enderror" placeholder=""
                        aria-describedby="helpId" value="{{ old('exemple-name-2') }}">
                    <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                    @error('exemple-name-2')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exemple-2">Code source #2</label>
                    <textarea name="exemple-2" id="exemple-2"
                        class="form-control @error('exemple-2') is-invalid @enderror"
                        placeholder="Proposez un exemple de code" aria-describedby="helpId"
                        value="{{ old('exemple-2') }}"></textarea>
                    <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la méthode en
                        cours</small>
                    @error('exemple-2')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="collections-2">Collections associées à la source</label>
                    {{-- Type name field as an array to collect collection items in an array --}}
                    <select multiple class="form-control" name="collections-2[]" id="collections-2" size="7"
                        value="{{ old('collections-2') }}">
                        <option value="complexe">Complexe</option>
                        <option value="improvednested">Improved nested</option>
                        <option value="languages">Languages</option>
                        <option value="level">Level</option>
                        <option value="nested">Nested</option>
                        <option value="numbers">Numbers</option>
                        <option value="oneorzero">One or Zero</option>
                    </select>
                </div>

                {{-- Code source #3 --}}
                <div class="form-group">
                    <label for="exemple-name-3">Titre du code source #3</label>
                    <input type="text" name="exemple-name-3" id="exemple-name-3"
                        class="form-control @error('exemple-name-3') is-invalid @enderror" placeholder=""
                        aria-describedby="helpId" value="{{ old('exemple-name-3') }}">
                    <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                    @error('exemple-name-3')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exemple-3">Code source #3</label>
                    <textarea name="exemple-3" id="exemple-3"
                        class="form-control @error('exemple-3') is-invalid @enderror"
                        placeholder="Proposez un exemple de code" aria-describedby="helpId"
                        value="{{ old('exemple-3') }}"></textarea>
                    <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la méthode en
                        cours</small>
                    @error('exemple-3')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="collections-3">Collections associées à la source</label>
                    {{-- Type name field as an array to collect collection items in an array --}}
                    <select multiple class="form-control" name="collections-3[]" id="collections-3" size="7"
                        value="{{ old('collections-3') }}">
                        <option value="complexe">Complexe</option>
                        <option value="improvednested">Improved nested</option>
                        <option value="languages">Languages</option>
                        <option value="level">Level</option>
                        <option value="nested">Nested</option>
                        <option value="numbers">Numbers</option>
                        <option value="oneorzero">One or Zero</option>
                    </select>
                </div>

                {{-- collapse other source code forms --}}
                <button class="btn btn-warning my-4" type="button" data-toggle="collapse"
                    data-target="#otherSourcesCode" aria-expanded="false" aria-controls="otherSourcesCode">Ajouter
                    d'autres formulaires de
                    codes sources</button>
                <div class="row">
                    <div class="col">
                        <div class="collapse" id="otherSourcesCode">
                            {{-- Code source #4 --}}
                            <div class="form-group">
                                <label for="exemple-name-4">Titre du code source #4</label>
                                <input type="text" name="exemple-name-4" id="exemple-name-4"
                                    class="form-control @error('exemple-name-4') is-invalid @enderror" placeholder=""
                                    aria-describedby="helpId" value="{{ old('exemple-name-4') }}">
                                <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                                @error('exemple-name-4')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exemple-4">Code source #4</label>
                                <textarea name="exemple-4" id="exemple-4"
                                    class="form-control @error('exemple-4') is-invalid @enderror"
                                    placeholder="Proposez un exemple de code" aria-describedby="helpId"
                                    value="{{ old('exemple-4') }}"></textarea>
                                <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la
                                    méthode en
                                    cours</small>
                                @error('exemple-4')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="collections-4">Collections associées à la source</label>
                                {{-- Type name field as an array to collect collection items in an array --}}
                                <select multiple class="form-control" name="collections-4[]" id="collections-4" size="7"
                                    value="{{ old('collections-4') }}">
                                    <option value="complexe">Complexe</option>
                                    <option value="improvednested">Improved nested</option>
                                    <option value="languages">Languages</option>
                                    <option value="level">Level</option>
                                    <option value="nested">Nested</option>
                                    <option value="numbers">Numbers</option>
                                    <option value="oneorzero">One or Zero</option>
                                </select>
                            </div>

                            {{-- Code source #5 --}}
                            <div class="form-group">
                                <label for="exemple-name-5">Titre du code source #5</label>
                                <input type="text" name="exemple-name-5" id="exemple-name-5"
                                    class="form-control @error('exemple-name-5') is-invalid @enderror" placeholder=""
                                    aria-describedby="helpId" value="{{ old('exemple-name-5') }}">
                                <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                                @error('exemple-name-5')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exemple-5">Code source #5</label>
                                <textarea name="exemple-5" id="exemple-5"
                                    class="form-control @error('exemple-5') is-invalid @enderror"
                                    placeholder="Proposez un exemple de code" aria-describedby="helpId"
                                    value="{{ old('exemple-5') }}"></textarea>
                                <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la
                                    méthode en
                                    cours</small>
                                @error('exemple-5')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="collections-5">Collections associées à la source</label>
                                {{-- Type name field as an array to collect collection items in an array --}}
                                <select multiple class="form-control" name="collections-5[]" id="collections-5" size="7"
                                    value="{{ old('collections-5') }}">
                                    <option value="complexe">Complexe</option>
                                    <option value="improvednested">Improved nested</option>
                                    <option value="languages">Languages</option>
                                    <option value="level">Level</option>
                                    <option value="nested">Nested</option>
                                    <option value="numbers">Numbers</option>
                                    <option value="oneorzero">One or Zero</option>
                                </select>
                            </div>

                            {{-- Code source #6 --}}
                            <div class="form-group">
                                <label for="exemple-name-6">Titre du code source #6</label>
                                <input type="text" name="exemple-name-6" id="exemple-name-6"
                                    class="form-control @error('exemple-name-6') is-invalid @enderror" placeholder=""
                                    aria-describedby="helpId" value="{{ old('exemple-name-6') }}">
                                <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                                @error('exemple-name-6')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exemple-6">Code source #6</label>
                                <textarea name="exemple-6" id="exemple-6"
                                    class="form-control @error('exemple-6') is-invalid @enderror"
                                    placeholder="Proposez un exemple de code" aria-describedby="helpId"
                                    value="{{ old('exemple-6') }}"></textarea>
                                <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la
                                    méthode en
                                    cours</small>
                                @error('exemple-6')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="collections-6">Collections associées à la source</label>
                                {{-- Type name field as an array to collect collection items in an array --}}
                                <select multiple class="form-control" name="collections-6[]" id="collections-6" size="7"
                                    value="{{ old('collections-6') }}">
                                    <option value="complexe">Complexe</option>
                                    <option value="improvednested">Improved nested</option>
                                    <option value="languages">Languages</option>
                                    <option value="level">Level</option>
                                    <option value="nested">Nested</option>
                                    <option value="numbers">Numbers</option>
                                    <option value="oneorzero">One or Zero</option>
                                </select>
                            </div>

                            {{-- Code source #7 --}}
                            <div class="form-group">
                                <label for="exemple-name-7">Titre du code source #7</label>
                                <input type="text" name="exemple-name-7" id="exemple-name-7"
                                    class="form-control @error('exemple-name-7') is-invalid @enderror" placeholder=""
                                    aria-describedby="helpId" value="{{ old('exemple-name-7') }}">
                                <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                                @error('exemple-name-7')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exemple-7">Code source #7</label>
                                <textarea name="exemple-7" id="exemple-7"
                                    class="form-control @error('exemple-7') is-invalid @enderror"
                                    placeholder="Proposez un exemple de code" aria-describedby="helpId"
                                    value="{{ old('exemple-7') }}"></textarea>
                                <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la
                                    méthode en
                                    cours</small>
                                @error('exemple-7')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="collections-7">Collections associées à la source</label>
                                {{-- Type name field as an array to collect collection items in an array --}}
                                <select multiple class="form-control" name="collections-7[]" id="collections-7" size="7"
                                    value="{{ old('collections-7') }}">
                                    <option value="complexe">Complexe</option>
                                    <option value="improvednested">Improved nested</option>
                                    <option value="languages">Languages</option>
                                    <option value="level">Level</option>
                                    <option value="nested">Nested</option>
                                    <option value="numbers">Numbers</option>
                                    <option value="oneorzero">One or Zero</option>
                                </select>
                            </div>

                            {{-- Code source #8 --}}
                            <div class="form-group">
                                <label for="exemple-name-8">Titre du code source #8</label>
                                <input type="text" name="exemple-name-8" id="exemple-name-8"
                                    class="form-control @error('exemple-name-8') is-invalid @enderror" placeholder=""
                                    aria-describedby="helpId" value="{{ old('exemple-name-8') }}">
                                <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                                @error('exemple-name-8')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exemple-8">Code source #8</label>
                                <textarea name="exemple-8" id="exemple-8"
                                    class="form-control @error('exemple-8') is-invalid @enderror"
                                    placeholder="Proposez un exemple de code" aria-describedby="helpId"
                                    value="{{ old('exemple-8') }}"></textarea>
                                <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la
                                    méthode en
                                    cours</small>
                                @error('exemple-8')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="collections-8">Collections associées à la source</label>
                                {{-- Type name field as an array to collect collection items in an array --}}
                                <select multiple class="form-control" name="collections-8[]" id="collections-8" size="7"
                                    value="{{ old('collections-8') }}">
                                    <option value="complexe">Complexe</option>
                                    <option value="improvednested">Improved nested</option>
                                    <option value="languages">Languages</option>
                                    <option value="level">Level</option>
                                    <option value="nested">Nested</option>
                                    <option value="numbers">Numbers</option>
                                    <option value="oneorzero">One or Zero</option>
                                </select>
                            </div>

                            {{-- Code source #9 --}}
                            <div class="form-group">
                                <label for="exemple-name-9">Titre du code source #9</label>
                                <input type="text" name="exemple-name-9" id="exemple-name-9"
                                    class="form-control @error('exemple-name-9') is-invalid @enderror" placeholder=""
                                    aria-describedby="helpId" value="{{ old('exemple-name-9') }}">
                                <small id="helpId" class="text-muted">Décrivez le titre du code source</small>
                                @error('exemple-name-9')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exemple-9">Code source #9</label>
                                <textarea name="exemple-9" id="exemple-9"
                                    class="form-control @error('exemple-9') is-invalid @enderror"
                                    placeholder="Proposez un exemple de code" aria-describedby="helpId"
                                    value="{{ old('exemple-9') }}"></textarea>
                                <small id="helpId" class="text-muted">Donner un exemple de code pour illustrer la
                                    méthode en
                                    cours</small>
                                @error('exemple-9')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="collections-9">Collections associées à la source</label>
                                {{-- Type name field as an array to collect collection items in an array --}}
                                <select multiple class="form-control" name="collections-9[]" id="collections-9" size="7"
                                    value="{{ old('collections-9') }}">
                                    <option value="complexe">Complexe</option>
                                    <option value="improvednested">Improved nested</option>
                                    <option value="languages">Languages</option>
                                    <option value="level">Level</option>
                                    <option value="nested">Nested</option>
                                    <option value="numbers">Numbers</option>
                                    <option value="oneorzero">One or Zero</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>

</div>
@endsection
