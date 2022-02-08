@extends('adminlte::page')

@section('title', 'Filmtono')

@section('content_header')
    <h1>Create Home Slider</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- Inicio Laravel Collective --}}
            {!! Form::open(['route' => 'admin.homesliders.store', 'autocomplete' => 'off', 'files' => true]) !!}

                @include('admin.homesliders.partials.form')

                {!! Form::submit('Create', ['class' => 'btn btn-success']) !!}

                <a class="btn btn-danger" href="{{route('admin.homesliders.index')}}">Cancel</a>

            {!! Form::close() !!}
            {{-- Fin Laravel Collective --}}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%            
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script> 
        document.getElementById("file").addEventListener('change', changeimage);        

        function changeimage(event){
            let file = event.target.files[0];
            let reader = new FileReader();

            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);                
            };
            reader.readAsDataURL(file);
        }
    </script>
@stop
