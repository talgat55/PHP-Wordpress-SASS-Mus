<?php
/*
 * Template Name:  Контакты
 */

get_header(); ?>

    <div id="primary" class="content-area  page-contacts ">
        <div class="bredscrumb">
            <h1 class="page-title-main">
                <?php echo get_the_title(); ?>
            </h1>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="first">
                    Министерство по делам молодежи, физической культуры и спорта Омской области
                </p>
            </div>
            </div>
            <div class="row">
                <div class="list-contact col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <ul class="contact-list">
                        <li>
                            <span class="pre">
                                Адрес:
                            </span>
                            <p>
                                ул. Красногвардейская, 42, офис 315
                            </p>
                        </li>
                        <li>
                            <span class="pre">
                                Телефон:
                            </span>
                            <p>
                                <a href="tel:+73812238132">(3812) <span class="bold-email">23-81-32</span></a>
                            </p>
                        </li>
                        <li>
                            <span class="pre">
                                Email:
                            </span>
                            <p>
                                <a href="mailto:mdms@omskportal.ru"><span class="bold-email">mdms</span>@omskportal.ru</a>
                            </p>
                        </li>


                    </ul>
                    <div class="block-soc">
                        <div class="block-soc--element">
                            <a href="https://www.facebook.com/groups/uprmolpol/?ref=bookmarks" target="_blank">
                                <img src="<?php echo get_theme_file_uri('/assets/images/fb.png') ?>"
                                     alt=" Иконка  "/>
                                <p>

                                    <?php _e('Мы в Facebook', 'light'); ?>
                                </p>
                            </a>
                        </div>
                        <div class="block-soc--element">
                            <a href="https://vk.com/club132272548" target="_blank">
                                <img src="<?php echo get_theme_file_uri('/assets/images/vk.png') ?>"
                                     alt=" Иконка  "/>
                                <p>
                                    <?php _e('Мы в Вконтакте', 'light'); ?>
                                </p>
                            </a>
                        </div>
                        <div class="block-soc--element">
                            <a href="https://www.instagram.com/tipredprinimatel_omsk/?utm_source=ig_profile_share&igshid=gwdh7i2t74dn" target="_blank">
                                <img src="<?php echo get_theme_file_uri('/assets/images/instagram.png') ?>"
                                     alt=" Иконка  "/>
                                <p>
                                    <?php _e('Мы в Instagram', 'light'); ?>
                                </p>
                            </a>
                        </div>


                    </div>


                    <img  class="img-contacts" src="<?php echo get_theme_file_uri('/assets/images/about-img.png') ?>"
                         alt=" Иконка  "/>

                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="map-contact">
                        <div id="map"></div>
                        <img class="map-overlay"   src="<?php echo get_theme_file_uri('/assets/images/about-overlay.png') ?>"
                              alt=" Иконка  "/>
                    </div>

                </div>


            </div>
        </div>

    </div>

<?php get_footer();
