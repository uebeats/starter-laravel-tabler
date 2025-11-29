@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Bienvenido, {{ auth()->user()->name }}</h3>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Propiedades</h5>
                    <p class="fs-3">{{ $properties }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Pagos Pendientes</h5>
                    <p class="fs-3 text-danger">{{ $pending }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection