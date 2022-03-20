@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <a class="btn btn-success float-right" href="{{ route('admin.genres.makeone', $genre) }}">Create genre</a>
    @if ($genre=="M")
        <h1>List of Music genres</h1>
    @else
        <h1>List of Audiovisual genres</h1>
    @endif    
@stop

@section('content')
    @livewire('admin.genre-list', ['genre' => $genre])
@stop