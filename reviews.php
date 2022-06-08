<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $website_title = 'Reviews';
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
        <div class="reviews__main">
            <h2>what parents say
                about us</h2>
            <div class="swiper reviews__slider">
                <div class="swiper-wrapper">
                <?php
                        $_db = Db::getInstanse();

                        $sql = 'SELECT * FROM `reviews` ORDER BY id DESC';
                        $query = $_db->prepare($sql);
                        $query->execute();

                        $comments = $query->fetchAll(PDO::FETCH_OBJ);

                        foreach($comments as $el) {
                            echo "<div class='swiper-slide'>
                            <div class='reviews__info'>
                                <p>
                                    $el->comment
                                </p>
                                <span>$el->avtor</span>
                            </div>
                        </div>";
                        }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="reviews__btn">
                <button data-val="modal" class="modal-rev open_modal btn">Leave a review</button>
            </div>
        </div>
    </div>
</section>


<section>

</section>
    <?php require './assets/php/block/trial-child.php' ?>
<footer>
    <? require './assets/php/block/footer.php' ?>
</footer>
<form class="modal-reg">

    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-registration">
                <div class="close"></div>
                <h3>Leave a review</h3>
                <div class="entrance__cnt">
                    <div class="contact__inp">
                        <label>
                            <input class="avtor" type="text" placeholder="Name and surname">
                        </label>
                    </div>
                    <div class="contact__inp contact-error">
                        Ошибка
                    </div>
                    <div class="contact__inp">
                        <label>
                            <textarea class="comment" type="text" placeholder="Comments"></textarea>
                        </label>
                    </div>
                    <div class="contact__inp contact-error">
                        Ошибка
                    </div>
                    <div class="modal__btn">
                        <button type="button" class="send-reg btn">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-done" class="modal">
        <div class="modal-content">
            <div class="modal-registration">
                <div class="close"></div>
                <div class="mod__done">
                    <div class="mod__done__tit">
                        <strong>done</strong>
                        <img src="assets/img/Vec21.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>

<?php require './assets/php/block/footer-popup.php' ?>
<?php require './assets/php/block/script.php' ?>

<script src="assets/js/reviews.js"></script>

</body>
</html>