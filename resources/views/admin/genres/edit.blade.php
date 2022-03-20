@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    @if ($genre->type == 'M')
        <h1>Edit Music genre</h1>
    @else
        <h1>Edit Audiovisual genre</h1>
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
            {!! Form::model($genre, ['route' => ['admin.genres.update', $genre], 'autocomplete' => 'off', 'method' => 'put']) !!}

            @include('admin.genres.partials.form')

            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

            <a class="btn btn-danger" href="{{ route('admin.genres.list', $genre->type) }}">Cancel</a>

            {!! Form::close() !!}
            {{-- Fin Laravel Collective --}}
        </div>
    </div>
@stop
