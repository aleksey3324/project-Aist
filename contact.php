<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $website_title = 'Contact';
        require './assets/php/block/head.php';
    ?>
</head>
<body>
<header>
    <?php require './assets/php/block/header.php' ?>
</header>

<section class="all__marg">
    <div class="container">
        <div class="contact__main">
            <div class="contact__flex">
                <div class="contact__cnt">
                    <div class="contact__photo">
                        <img src="assets/img/eniml.png" alt="">
                    </div>
                    <div class="footer__soc">
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/aist_royal/ " target="_blank">
                                    <div class="href__links">
                                        <img src="assets/img/instagram.svg" alt="">
                                    </div>
                                    <span>@aist_ecc</span>
                                </a>
                            </li>
                            <li>
                                <a href="tel: +971 43 839188" target="_blank">
                                    <div class="href__links">
                                        <img src="assets/img/phone.svg" alt="">
                                    </div>
                                    <span>+971 43 839188</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="href__links">
                                        <img src="assets/img/street.svg" alt="">
                                    </div>
                                    <span>Dubai, UAE <br> umm suqeim 3, villa 25</span>
                                </a>
                                <span>8:00 am to 6:00 pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contact__info">
                    <h2>CONTACT US!</h2>
                    <form>
                        <div class="contact__inp">
                            <label>
                                <input class="contact-name" type="text" placeholder="Name">
                            </label>
                        </div>
                        <div class="block-checked error-checked">
                            Ошибка
                        </div>
                        <div class="contact__inp">
                            <label>
                                <input class="email" type="email" placeholder="E-mail">
                            </label>
                        </div>
                        <div class="block-checked error-checked">
                            Ошибка
                        </div>
                        <div class="contact__inp">
                            <label>
                                <textarea class="contact-comment" placeholder="Comments"></textarea>
                            </label>
                        </div>
                        <div class="block-checked error-checked">
                            Ошибка
                        </div>
                        <button type="button" class="send-contact btn">Send</button>
                    </form>
                </div>
            </div>
            <div class="contact__map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A671fa3fce0a3a0f918e0adf4aa0f1c4bb5431b3633960aa3dc76038259f21d9d&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>

<footer>
    <?php require './assets/php/block/footer.php' ?>
</footer>
<? require './assets/php/block/footer-popup.php' ?>

<?php require './assets/php/block/script.php' ?>
</body>
</html>