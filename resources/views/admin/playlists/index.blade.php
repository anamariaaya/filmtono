@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <a class="btn btn-success float-right" href="{{route('admin.playlists.create')}}">Create playlist</a>
    <h1>Playlist List</h1>
@stop

@section('content')
    @livewire('admin.playlist-index')
@stop
