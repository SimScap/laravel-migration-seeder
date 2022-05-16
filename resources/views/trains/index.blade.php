@extends('layouts.main')

@section('title', 'Trains')   

@section('main-content')
<main>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-center">
                @foreach ($trains as $train)
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Azienda: {{$train->azienda}}</h5>
                        <h6 class="card-subtitle mb-2 ">Stazione di partenza: {{$train->stazione_partenza}}</h6>
                        <h6 class="card-subtitle mb-2 ">Stazione di arrivo: {{$train->stazione_arrivo}}</h6>
                        <a href="#" class="card-link">Click per info</a>
                    </div>
                </div>
                @endforeach          
            </div>
        </div>
    </div>
</main>
    




@endsection