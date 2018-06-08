@extends('layouts.master')

@section('content')
    @include('catalog.resources.movieForm',['edit' => false, 'arrMovie' => false])
@endsection