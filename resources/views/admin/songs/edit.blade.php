@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <h1>Edit Song</h1>
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
            {!! Form::model($song, ['route' => ['admin.songs.update', $song], 'autocomplete' => 'off', 'method' => 'put']) !!}

            @include('admin.songs.partials.form')

            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

            <a class="btn btn-danger" href="{{ route('admin.songs.index') }}">Cancel</a>

            {!! Form::close() !!}
            {{-- Fin Laravel Collective --}}
        </div>
    </div>
@stop
