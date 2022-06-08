<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $website_title = 'Lessons';
        require './assets/php/block/head.php';
    ?>
</head>
<body>
<header>
    <?php require './assets/php/block/header.php' ?>
</header>

<section class="all__marg">
    <div class="container">
        <div class="lessons__main">
            <div class="lessons__center">
                <h2>lessons in our center</h2>
                <p>
                    Thanks to the training at the AIST center, your children will
                    begin to think systematically, approach solving problems of any complexity
                    not only logically, but also creatively, since creativity
                    is the highest degree of intelligence. That is why we have such
                    a wide range of teaching methods, both authorial and creative.
                </p>
            </div>
            <div class="lessons__href">
                <ul>
                    <li><a href="/lessons-two.php">English, French, Arabic</a></li>
                    <li><a href="/lessons-two.php#painting">painting</a></li>
                    <li><a href="/lessons-two.php#mathematics">mathematics</a></li>
                    <li><a href="/lessons-two.php#music">music, vocals</a></li>
                    <li><a href="/lessons-two.php#funny-sound">funny sounds (abc)</a></li>
                    <li><a href="/lessons-two.php#gymnastic">gymnastic</a></li>
                    <li><a href="/lessons-two.php#speech">speech therapist</a></li>
                </ul>
            </div>
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