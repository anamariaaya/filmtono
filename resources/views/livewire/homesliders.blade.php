<div>
    <div class="carousel">
        <div class="slider">
            <img id="leftImg" src="" alt="imagen galería">
            <img id="mainImg" class="mainImg" src="" alt="imagen galería">
            <img id="rightImg" src="" alt="imagen galería">

            <button class="prev">Prev</button>
            <button class="next">Next</button>
        </div>
    </div>

    <!--sección de playlist inicial-->
    <div class="container">
        <div class="light-bg">
            <h2 class="playlist-title">Top</h2>
            <div class="ft-playlist">
                <div class="ft-songs">
                    @foreach ($songs as $song)
                        <button type="button" class="playlist-btn" wire:click="$set('videourl', '{{ $song->video_url }}')">
                            <img src="{{ Storage::url('images/play-btn.svg') }}" />
                            {{ $song->title }}
                        </button>
                    @endforeach
                </div>

                <iframe id="videoiframe" class="ft-player" width="560" height="315"
                    src='{{ $videourl }}' title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>
