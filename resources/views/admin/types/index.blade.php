@extends('layouts.appadmin')

@section('content')

    <div class="container py-5">

        @if($types->count() == 0)
            <div class="text-center">
                <h3>Non ci sono tipologie create</h3>
            </div>
        @endif

        <div class="d-flex flex-wrap gap-3"> 
            @foreach($types as $type)
    
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">{{ $type->title }}</h5>
                        <p class="card-text">{{ $type->description }}</p>
                        <a href="{{ route('admin.types.show', $type->id) }}" class="btn btn-primary">Mostra di più</a>
                    </div>
                </div>
                    
            @endforeach
        </div>

        <div class="text-center py-5"><a href="{{ route('admin.types.create') }}"><button class="btn btn-primary">Aggiungi Tipologia</button></a></div>
            
    </div>

@endsection