<div>
    <div class="carousel">
        <div class="slider">
            @foreach ($homesliders as $homeslider)
                @if ($loop->iteration == 1)
                    <img id="leftImg" src="{{ Storage::url($homeslider->image->url) }}" alt="imagen galería">
                @else
                    @if ($loop->iteration == 2)
                        <img id="mainImg" class="mainImg" src="{{ Storage::url($homeslider->image->url) }}"
                            alt="{{ Storage::url($homeslider->image->url) }}">
                    @else
                        @if ($loop->iteration == 3)
                            <img id="rightImg" src="{{ Storage::url($homeslider->image->url) }}" alt="imagen galería">
                        @else

                        @endif
                    @endif
                @endif
            @endforeach

            <button class="prev">Prev</button>
            <button class="next">Next</button>
        </div>
    </div>
</div>
