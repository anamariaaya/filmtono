<?php
    @require 'includes/functions.php';
    includeTemplate('header', $inicio = true);
?>

<main class="container">
    <div class="carousel">
        <div class="slider">

            <img id="leftImg" src="" alt="imagen galería">
            <img id="mainImg" class="mainImg" src="" alt="imagen galería">
            <img id="rightImg"src="" alt="imagen galería">
            <button class="prev">Prev</button>
            <button class="next">Next</button>
        </div>
        <!-- <ul class="puntos">
                <li class="punto"></li>
                <li class="punto"></li>
        </ul>  -->
    </div>

</main>

<?php
    includeTemplate('footer');
?>
