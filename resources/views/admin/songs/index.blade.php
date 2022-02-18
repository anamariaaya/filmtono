@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <a class="btn btn-success float-right" href="{{route('admin.songs.create')}}">Create song</a>
    <h1>Song List</h1>
@stop

@section('content')
    @livewire('admin.song-index')
@stop