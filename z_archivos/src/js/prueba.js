document.addEventListener('DOMContentLoaded', function(){
    mainSlide();
});

function mainSlide(){
    const imgArray = [
        '../build/img/1.jpg',
        '../build/img/2.jpg',
        '../build/img/3.jpg',
        '../build/img/4.jpg',
        '../build/img/5.jpg',
        '../build/img/6.jpg',
        '../build/img/7.jpg'
    ];

    const slider = document.querySelector('.slider');
   
    
    imgArray.forEach((img, i) => {
        const imagen = document.createElement('IMG');
        imagen.src = `${imgArray[i]}`;
        imagen.dataset.imagenId = i;
        slider.appendChild(imagen);
        // const id = parseInt(imagen.dataset.imagenId);   
    });

    // function crearSlide(){
    //     console.log('oook');
    // }

    // crearSlide();

    const buttonNext = document.querySelector('.next');
    const buttonPrev = document.querySelector('.prev');
    
    

    moverDerecha();

}
