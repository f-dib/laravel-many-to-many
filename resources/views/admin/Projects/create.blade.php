@extends('layouts.appadmin')

@section('content')

    <div class="container py-5">

        <h1 class="mb-4 text-center">Aggiungi un Progetto</h1>

        <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="src" class="form-label">Src immagine</label>
                <input type="file" class="form-control @error('src') is-invalid @enderror" id="src" name="src" value="{{ old('src') }}">
                @error('src')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="technology" class="form-label">Tecnologie Utilizzate</label>
                <input type="text" class="form-control @error('technology') is-invalid @enderror" id="technology" name="technology" value="{{ old('technology') }}">
                @error('technology')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="github_link" class="form-label">Link Progetto GitHub</label>
                <input type="text" class="form-control @error('github_link') is-invalid @enderror" id="github_link" name="github_link" value="{{ old('github_link') }}">
                @error('github_link')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="date" class="form-label">Anno di Pubblicazione</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}">
                @error('date')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="type_id">Tipologia</label>
                <select class="form-select" name="type_id" id="type_id">
                    <option value=""></option>     
                    @foreach ($types as $type)
                        <option value="{{$type->id}}" {{ $type->id == old('type_id') ? 'selected' : '' }}>
                            {{ $type->title }}
                        </option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Salva</button>

        </form>
        
    </div>

@endsection