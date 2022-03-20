<div class="forn-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Enter genre name']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

    @if ($genre=="M" || $genre=="A")
        {!! Form::hidden('type', $genre) !!}
    @else
        {!! Form::hidden('type', $genre->type) !!}
    @endif
</div>
