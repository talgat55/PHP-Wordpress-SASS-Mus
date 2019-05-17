<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/favicon.png?v=1.1') ?>"
          type="image/x-icon"/>

    <?php wp_head(); ?>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var myajax = {"url": "<?=admin_url('admin-ajax.php'); ?>"};
        /* ]]> */
    </script>


</head>

<body <?php body_class(); ?>>
<div class="wrap  <?=get_locale(); ?>">
<header>
    <?php
    $phone = get_field('phone_theme', 'option');
    $redyPhone = $phone ? pregPhone($phone) : '';


    ?>
    <div class="clearfix relative">

        <div class="clearfix">
            <div class="content-block">
                <div class="container">
                    <div class="row flex">
                        <div class="col-sm-4 col-xs-12">
                            <div class="header-bg-one lazy"
                                 data-src="<?php echo get_theme_file_uri('/assets/images/bg1.jpg') ?>"></div>
                            <ul class="top-block">
                                <li>
                                    <a href="">
                                        <img src="<?php echo get_theme_file_uri('/assets/images/geo.png') ?>"
                                             alt="иконка"/>
                                        <p>

                                            <?php _e('г. Омск, ул. Достоевского, 1', 'light'); ?>
                                        </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?= $redyPhone ?>">
                                        <img src="<?php echo get_theme_file_uri('/assets/images/phone.png') ?>"
                                             alt="иконка"/>
                                        <p>
                                            <?=$phone;?>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                            <?php wp_nav_menu('container=nav&menu_id=menu-main&menu_class=top-main-container clearfix&theme_location=top_menu'); ?>
                        </div>
                        <div class="col-sm-8 col-xs-12 relative">
                            <div class="header-bg-two lazy"
                                 data-src="<?php echo get_theme_file_uri('/assets/images/slide.jpg') ?>"></div>
                            <div class="top-bar">
                                <ul class="list-switch-lang">
                                    <?php
                                    if (get_locale() == 'en_US') {
                                        $classEng = 'class="active"';
                                        $classRu = '';
                                    } else {
                                        $classRu = 'class="active"';
                                        $classEng = '';
                                    }

                                    ?>
                                    <li>
                                        <a href="#"  <?=$classRu;?>  data-type="ru"  title="Русская вресия сайта">
                                            RU
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"  <?=$classEng;?> data-type="en" title="Английская версия сайта">
                                            ENG
                                        </a>
                                    </li>

                                </ul>

                                <ul class="bvi-controller">
                                    <li>
                                        <a href="#"  title="Версия для слабовидящих" >
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="main-content">

                                <?php  get_template_part('inc/soc-links'); ?>
                                <div class="description">
                                    <?php
                                    _e('Омский государственный литературный музей
                                    <span>им. Ф.М. Достоевского</span>', 'light' );
                                    ?>


                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</header>


