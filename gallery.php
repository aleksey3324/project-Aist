<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $website_title = 'Gallery';
        require './assets/php/block/head.php';
    ?>

    <?php require './assets/php/classes/Db.php' ?>
</head>
<body>
<header>
    <?php require './assets/php/block/header.php' ?>
</header>

<section class="all__marg">
    <div class="container">
        <div class="pages__gallery">
            <a href="assets/img/pexels1.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels1.jpg" alt="">
            </a>
            <a href="assets/img/pexels2.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels2.jpg" alt="">
            </a>
            <a href="assets/img/pexels3.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels3.jpg" alt="">
            </a>
            <a href="assets/img/pexels4.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels4.jpg" alt="">
            </a>
            <a href="assets/img/pexels5.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels5.jpg" alt="">
            </a>
            <a href="assets/img/pexels6.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels6.jpg" alt="">
            </a>
            <a href="assets/img/pexels7.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels7.jpg" alt="">
            </a>
            <a href="assets/img/pexels8.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels8.jpg" alt="">
            </a>
            <a href="assets/img/pexels9.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels9.jpg" alt="">
            </a>
            <a href="assets/img/pexels10.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels10.jpg" alt="">
            </a>
            <a href="assets/img/pexels11.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels11.jpg" alt="">
            </a>
            <a href="assets/img/pexels122.jpg" class="gallery__box" data-fancybox="gallery">
                <img src="assets/img/pexels122.jpg" alt="">
            </a>
        </div>
    </div>
</section>


<section>
    <?php require './assets/php/block/trial-child.php' ?>
</section>
<footer>
    <? require './assets/php/block/footer.php' ?>
</footer>
<? require './assets/php/block/footer-popup.php' ?>

<?php require './assets/php/block/script.php' ?>
</body>
</html>