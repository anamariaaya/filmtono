@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <h1>Create Artist</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Inicio Laravel Collective --}}
            {!! Form::open(['route' => 'admin.artists.store', 'autocomplete' => 'off']) !!}

                @include('admin.artists.partials.form')

                {!! Form::submit('Create', ['class' => 'btn btn-success']) !!}

                <a class="btn btn-danger" href="{{route('admin.artists.index')}}">Cancel</a>

            {!! Form::close() !!}
            {{-- Fin Laravel Collective --}}
        </div>
    </div>
@stop
