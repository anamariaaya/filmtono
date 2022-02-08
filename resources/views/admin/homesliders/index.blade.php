@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <a class="btn btn-success float-right" href="{{route('admin.homesliders.create')}}">Create home slider</a>
    <h1>Home Slider List</h1>
@stop

@section('content')
    @livewire('admin.homeslider-index')
@stop
