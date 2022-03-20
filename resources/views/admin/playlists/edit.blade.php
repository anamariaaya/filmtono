@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <h1>Edit Playlist</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {{-- Inicio Laravel Collective --}}
            {!! Form::model($playlist, ['route' => ['admin.playlists.update', $playlist], 'autocomplete' => 'off', 'method' => 'put']) !!}

            @include('admin.playlists.partials.form')

            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

            <a class="btn btn-danger" href="{{ route('admin.playlists.index') }}">Cancel</a>

            {!! Form::close() !!}
            {{-- Fin Laravel Collective --}}
        </div>
    </div>
@stop