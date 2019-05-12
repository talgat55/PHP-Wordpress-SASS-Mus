<?php
/*
 * Template Name: Страница контактов
 */

get_header(); ?>


    <div id="primary" class="content-area  page-contacts ">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-1  ">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/bg-map.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                        <?= get_the_title(); ?>
                    </h1>
                    <ul class="soс-links">
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-vk"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="gos-catalog-link">
                                госкаталог.рф
                            </a>
                        </li>
                        <li class="last-soc-title">
                            Мы в соцсетях
                        </li>
                    </ul>

                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">
                        <div class="contact-info-block">
                            <div class="wrapper">
                                <ul class="list-info">
                                    <li>
                                        <span> Адрес: </span>
                                        <p>
                                            644099, Россия, г. Омск, ул. Достоевского, 1
                                        </p>
                                    </li>
                                    <li>
                                        <span> E-mail: </span>
                                        <a href="mailto:lit-museum@mail.ru">lit-museum@mail.ru</a>
                                    </li>
                                    <li>
                                        <span> Телефон: </span>
                                        <a href="tel: +73812242965"> +7 (3812) 24-29-65</a>
                                    </li>
                                    <li>
                                        <span>  Время работы: </span>
                                        <p>с 10.00 до 18.00 – без перерывов.<br>
                                            Выходной – понедельник.</p>
                                    </li>
                                </ul>


                            </div>


                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div id="map"></div>
    </div>

<?php get_footer();
