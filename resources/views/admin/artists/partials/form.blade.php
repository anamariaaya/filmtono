<div class="forn-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Enter artist name']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="forn-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Enter artist email']) !!}

    @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="forn-group">
    <p class="font-weight-bold">Status</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Active
    </label>
    <label>
        {!! Form::radio('status', 0, false) !!}
        Inactive
    </label>
</div>
