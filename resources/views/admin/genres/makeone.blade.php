@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    @if ($genre == 'M')
        <h1>Create Music genre</h1>
    @else
        <h1>Create Audiovisual genre</h1>
    @endif
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-danger">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {{-- Inicio Laravel Collective --}}
            {!! Form::open(['route' => ['admin.genres.store', $genre], 'autocomplete' => 'off']) !!}

            @include('admin.genres.partials.form')

            {!! Form::submit('Create', ['class' => 'btn btn-success']) !!}

            <a class="btn btn-danger" href="{{ route('admin.genres.list', $genre) }}">Cancel</a>

            {!! Form::close() !!}
            {{-- Fin Laravel Collective --}}
        </div>
    </div>
@stop
