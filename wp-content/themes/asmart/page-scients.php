<?php
/*
 * Template Name: Страница Научная работа
 */

get_header(); ?>

    <div id="primary" class="content-area  page-scients-works ">

        <div class="container">
            <div class="row flex">
                <div class="col-sm-4 col-xs-12  ">
                    <div class="background lazy   right"
                         data-src="<?php echo get_theme_file_uri('/assets/images/scients-life.jpg') ?>"></div>
                    <h1 class="sub-title  left">
                        <?= get_the_title(); ?>
                    </h1>


                </div>
                <div class="col-sm-8 col-xs-12   ">
                    <div class="content">
                        <?php
                        $arg = array(
                            'posts_per_page' => -1,
                            'post_type' => 'scientific_works',
//                            'orderby' => 'date',
//                            'order' => 'ASC',
                            'status' => 'publish',

                        );

                        $the_query = new WP_Query($arg);
                        $array =[];
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $post_id    = $the_query->post->ID;
                            $doc        = get_field('file_science', $post_id);
                            $kind       = get_field('kind_science', $post_id);

                            array_push(
                                $array,
                                [
                                    'doc_link' => $doc,
                                    'title' => get_the_title($post_id),
                                    'kind'      => $kind
                                    ]
                            );
                        endwhile;

                        wp_reset_query();

                        $redyArr = groupBy($array, 'kind');

                        foreach ($redyArr as $key => $value){
                            if($key == 'catalog'){
                                $redyTitle =  __("«Сибирь литературная. XVIII-XXI века»", "light" );
                                $redyText  =  __("Материалы Всероссийской<br> научно-практической<br> конференции.", "light" );
                            }elseif ($key =='museum'){
                                $redyTitle = __('Омский литературный музей', "light" );
                                $redyText  =  __(' —Тексты<br> —Материалы<br> —Исследования', "light" );
                            }else{
                                $redyTitle = __('Электронные каталоги', "light" );
                                $redyText  = ' ';
                            }

                            ?>
                            <div class="scients-life-block flex">
                                <div class="title-block">
                                    <h3 class="title"><?=$redyTitle; ?></h3>
                                    <div class="text">
                                        <?=$redyText;?>
                                    </div>
                                </div>
                                <div class="text">
                                    <ul class="list">
                                        <?php foreach ($value as $item ){  ?>
                                            <li class="item">
                                                <a target="_blank" href="<?=$item['doc_link']; ?>" class="link-item">
                                                    <div class="img-block">
                                                        <img class="main" src="<?= get_theme_file_uri('/assets/images/img-doc.jpg'); ?>" alt="Изображение"/>
                                                        <img class="hover" src="<?= get_theme_file_uri('/assets/images/img-doc-hover.jpg'); ?>" alt="Изображение"/>
                                                    </div>
                                                    <div class="text">
                                                        <h4 class="title">
                                                            <?= $item['title']; ?>
                                                        </h4>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>


                            <?php
                        }

                        ?>

                    </div>
                </div>


            </div>

        </div>
        <?php get_template_part('inc/form'); ?>
    </div>

<?php get_footer();
