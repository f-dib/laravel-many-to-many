@extends('layouts.appadmin')

@section('content')

    <div class="container py-5">

        @if($technologies->count() == 0)
            <div class="text-center">
                <h3>Non ci sono tecnologie salvate</h3>
            </div>
        @endif

        <div class="d-flex flex-wrap gap-3"> 
            @foreach($technologies as $technology)
    
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">{{ $technology->title }}</h5>
                        <a href="{{ route('admin.technologies.show', $technology->id) }}" class="btn btn-primary">Mostra di più</a>
                    </div>
                </div>
                    
            @endforeach
        </div>

        <div class="text-center py-5"><a href="{{ route('admin.technologies.create') }}"><button class="btn btn-primary">Aggiungi Progetto</button></a></div>
            
    </div>

@endsection