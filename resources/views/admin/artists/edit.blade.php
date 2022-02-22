@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <h1>Edit Artist</h1>
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
            {!! Form::model($artist, ['route' => ['admin.artists.update', $artist], 'autocomplete' => 'off', 'method' => 'put']) !!}

            @include('admin.artists.partials.form')

            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

            <a class="btn btn-danger" href="{{ route('admin.artists.index') }}">Cancel</a>

            {!! Form::close() !!}
            {{-- Fin Laravel Collective --}}
        </div>
    </div>
@stop
