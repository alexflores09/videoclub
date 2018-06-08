@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$movie['poster']}}" >
        </div>
        <div class="col-sm-8">
            <h2>{{$movie['title']}}</h2>
            <h4>Año: {{$movie['year']}}</h4>
            <h4>Director: {{$movie['director']}}</h4>
            <p><b>Resumen: </b> {{$movie['synopsis']}}</p>
            <p><b>Estado: </b> {{ ($movie['rented'])?'Película actualmente alquilada':'Alquilar película'  }}</p>

            <div class="col-sm-12">
                @if($movie['rented'])
                    <a href="{{url('/catalog/'.$movie['id'].'/noRented')}}" class="btn btn-secondary">Devolver película</a>
                @else
                    <a href="{{url('/catalog/'.$movie['id'].'/rented')}}" class="btn btn-info">Alquilar película</a>
                @endif
                <a href="{{url('/catalog/'.$movie['id'].'/edit')}}" class="btn btn-warning">Editar película</a>
                <a href="{{url('/catalog/'.$movie['id'].'/delete')}}" class="btn btn-danger">Borrar película</a>
                <a href="{{url('/catalog')}}" class="btn btn-outline-secondary"><i class="fas fa-arrow-left"></i>Volver al listado</a>
            </div>
        </div>
    </div>
@endsection