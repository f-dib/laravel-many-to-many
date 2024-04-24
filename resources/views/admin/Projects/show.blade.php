@extends('layouts.appadmin')

@section('content')

    <div class="container py-5">

        <div class="card text-center">
            <img src="{{asset('storage/' . $project->src)}}" class="card-img-top p-3" alt="...">
            <div class="card-body">
                <h5 class="card-title text-uppercase">{{ $project->name }}</h5>
                <p class="card-text">{{ $project->description }}</p>
                <p class="card-text">{{ $project->type->title }}</p>
            </div>
        </div>

        <div class="py-4 w-100 d-flex justify-content-center gap-5">
            <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-warning">Modifica</a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>     
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il progetto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        Sei sicuro che vuoi eliminare il progetto "{{$project->name}}"
                    </div>


                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            
                            {{-- stessa cosa --}}
                            {{-- <input type="submit" class="btn btn-danger" value="Elimina"> --}}
                            <button class="btn btn-danger">Elimina</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection