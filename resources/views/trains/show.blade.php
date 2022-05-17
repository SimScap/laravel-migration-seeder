@extends('layouts.main')

@section('title', 'Info')   

@section('main-content')
<main>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-center">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <h5 class="card-title">Codice Treno: {{$train->codice_treno}}</h5>
                        <h6 class="card-subtitle mb-2 ">Orario di Partenza: {{$train->orario_partenza}}</h6>
                        <h6 class="card-subtitle mb-2 ">Orario di Arrivo: {{$train->orario_arrivo}}</h6>
                        <a href='{{route("trains.index", $train->id)}}' class="card-link">Click per la home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

