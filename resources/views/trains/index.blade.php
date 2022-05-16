@extends('layouts.main')

@section('title', 'Trains')   

@section('main-content')
<ul>
    @foreach ($trains as $item)
    <li>{{ $item->azienda}}</li>
    @endforeach

</ul>


@endsection