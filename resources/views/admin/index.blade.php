@extends('layouts.appadmin')

@section('content')

    <div class="container py-4">
        <h1 class="text-center">La Tua Dashboard</h1>

        <div class="row">
            <a class="col-3 text-decoration-none py-4 px-2" href="{{ route('admin.projects.index') }}">
                <div class="my-dash-card rounded-4 px-2 py-5 text-center">
                    <h3 class="mb-3">Visita i tuoi progetti</h3>
                    <div class="fw-bold fs-3">{{count($projects)}}</div>
                </div>    
            </a>
            <a class="col-3 text-decoration-none py-4 px-2" href="{{ route('admin.types.index') }}">
                <div class="my-dash-card rounded-4 px-2 py-5 text-center">
                    <h3 class="mb-3">Visita le tue tipologie</h3>
                </div>    
            </a>
        </div>

    </div>

@endsection