@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    {{-- <a class="btn btn-success float-right" href="{{route('admin.artists.create')}}">Create artist</a> --}}
    <h1>Artist List</h1>
@stop

@section('content')
    @livewire('admin.artist-index')
@stop