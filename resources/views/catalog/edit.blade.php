@extends('layouts.master')

@section('content')
    @include('catalog.resources.movieForm',['edit' => true, 'arrMovie'=>$arrMovie])
@endsection