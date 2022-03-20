<div class="forn-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Enter playlist name']) !!}

    @error('name')
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
<div class="forn-group">
    {!! Form::label('order', 'Order') !!}
    {!! Form::selectRange('order', 1, 9, null, ['class' => 'form-control', 'placeholder' => 'Enter playlist order']) !!}

    @error('order')
        <span class="text-danger">{{$message}}</span>
    @enderror    
</div>