<div class="forn-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter the home slider title']) !!}

    @error('title')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="forn-group">
    {!! Form::label('subtitle', 'Subtitle') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Enter the home slider subtitle']) !!}
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

<div class="row">
    <div class="col">
        <div class="image-wrapper">
            @isset ($homeslider->image)
                <img id="picture" src="{{Storage::url($homeslider->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2022/01/28/07/29/art-6973853_960_720.jpg" alt="">
            @endisset            
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Image to be displayed on the home slider') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}

            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores sint deleniti inventore rerum illo aliquid, provident est necessitatibus explicabo repellat ex animi modi, quidem blanditiis in ab, impedit possimus!</p>
    </div>
</div>