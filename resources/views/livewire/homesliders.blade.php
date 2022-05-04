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
    <div class="container slider-main">
        <div class="light-bg">
            <div class="wrapper">
            @foreach ($playlists as $playlist) 
            
                
                    <h2 class="playlist-title">{{ $playlist->name }}</h2>
                    <div class="ft-playlist">
                        <div class="ft-songs">
                            @foreach ($playlist->songs as $song)
                                <button type="button" class="playlist-btn {{ ($playlist->id == $plistid && $song->id == $songid) ? 'yellow-bg' : '' }}" wire:click="assignvalues('{{ $playlist->id }}', {{ $song->id }})" data-videourl="{{ $song->video_url }}" data-playlist="{{ $playlist->id }}">
                                    <img src="{{ Storage::url('images/play-btn.svg') }}" />
                                    {{ $song->title }} - {{ $song->user->name }}
                                </button>
                            @endforeach
                        </div>

                        <iframe id="videoiframe{{ $playlist->id }}" class="ft-player" width="560" height="315"
                            src='' title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                
            @endforeach
            </div>
            <button class="prev">Prev</button>
            <button class="next">Next</button>
        </div>
    </div>
</div>
