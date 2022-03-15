<x-app-layout>
    <section class="container">
        @livewire('homesliders', ['homesliders' => $homesliders, 'playlists' => $playlists])
    </section>
</x-app-layout>

<script type="text/javascript">
    const homesliders = @json($homesliders);
    const playlists =  @json($playlists);
    //console.log('playlists: ' + playlists[0].songs[0].title)

    let izq, cen, der;

    document.addEventListener('DOMContentLoaded', function() {
        izq = 0;
        cen = 1;
        der = 2;

        // Set home playlists
        const vidifra = document.querySelector('#videoiframe');
        vidifra.src = playlists[0].songs[0].video_url;
        
        // Set home sliders
        total_sliders = homesliders.length;

        const leftImg = document.querySelector('#leftImg');
        leftImg.src = "storage/" + homesliders[izq].url;

        const img = document.querySelector('#mainImg');
        img.src = "storage/" + homesliders[cen].url;

        const rightImg = document.querySelector('#rightImg');
        rightImg.src = "storage/" + homesliders[der].url;

        const buttonNext = document.querySelector('.next');
        const buttonPrev = document.querySelector('.prev');

        buttonNext.addEventListener('click', function(){
            izq++;
            cen++;
            der++;

            if (izq==total_sliders) {
                izq=0;
            }

            if (cen==total_sliders) {
                cen=0;
            }

            if (der==total_sliders) {
                der=0;
            }

            leftImg.src = "storage/" + homesliders[izq].url;
            img.src = "storage/" + homesliders[cen].url;
            rightImg.src = "storage/" + homesliders[der].url;
        });

        buttonPrev.addEventListener('click', function(){
            izq--;
            cen--;
            der--;

            if (izq==-1) {
                izq=total_sliders-1;
            }

            if (cen==-1) {
                cen=total_sliders-1;
            }

            if (der==-1) {
                der=total_sliders-1;
            }

            leftImg.src = "storage/" + homesliders[izq].url;
            img.src = "storage/" + homesliders[cen].url;
            rightImg.src = "storage/" + homesliders[der].url;
        });
    });
</script>
