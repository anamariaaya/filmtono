<div>
    <div class="carousel">
        <div class="slider">
            @foreach ($homesliders as $homeslider)
                @if ($loop->iteration == 1)
                    @isset ($homeslider->image)
                        <img id="leftImg" src="{{ Storage::url($homeslider->image->url) }}" alt="imagen galería">
                    @else
                        <img id="picture" src="https://cdn.pixabay.com/photo/2022/01/28/07/29/art-6973853_960_720.jpg" alt="">
                    @endisset                    
                @else
                    @if ($loop->iteration == 2)
                        @isset ($homeslider->image)
                            <img id="mainImg" class="mainImg" src="{{ Storage::url($homeslider->image->url) }}"
                            alt="{{ Storage::url($homeslider->image->url) }}">
                        @else
                            <img id="picture" src="https://cdn.pixabay.com/photo/2022/01/28/07/29/art-6973853_960_720.jpg" alt="">
                        @endisset  
                    @else
                        @if ($loop->iteration == 3)
                            @isset ($homeslider->image)
                                <img id="rightImg" src="{{ Storage::url($homeslider->image->url) }}" alt="imagen galería">
                            @else
                                <img id="picture" src="https://cdn.pixabay.com/photo/2022/01/28/07/29/art-6973853_960_720.jpg" alt="">
                            @endisset  
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
