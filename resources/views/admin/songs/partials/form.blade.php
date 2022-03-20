<div class="forn-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Enter the song title']) !!}

    @error('title')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="forn-group">
    {!! Form::label('videourl', 'Video Url') !!}
    {!! Form::text('video_url', null, ['class' => 'form-control' . ($errors->has('video_url') ? ' is-invalid' : ''), 'placeholder' => 'Enter the song video url']) !!}

    @error('video_url')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('user_id', 'Artist') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control'] ) !!}
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