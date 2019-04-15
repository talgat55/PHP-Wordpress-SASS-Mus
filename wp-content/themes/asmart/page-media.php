<?php
/*
 * Template Name: Страница медиа
 */

get_header(); ?>



    <div id="primary" class="content-area  page-media ">
        <div class="bredscrumb">
            <h1 class="page-title-main">
                <?php echo get_the_title(); ?>
            </h1>
        </div>
        <div class="container">
            <div class="row">

                <div class="start-content">
                     <?php
                     $query_count = new WP_Query( array('post_type' => 'media',    'meta_key' => 'type', 'meta_value' => 'video' ) );



                        $args = array(
                            'posts_per_page' => '10',
                            'post_type' => 'media',
                            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
                        );

                        $the_query = new WP_Query($args);




                        ?>
                    <div class="row">
                    <ul class="cat-media">
                        <li class="active">
                            <a href="/medias"  data-type="all">
                                <div class="media-img-block">
                                <img  class="media-main" src="<?php echo get_theme_file_uri('/assets/images/all.png') ?>"  alt="Картинка" />
                                <img  class="media-active" src="<?php echo get_theme_file_uri('/assets/images/all2.png') ?>"  alt="Картинка" />
                                </div>
                                <h3>
                                    Последние<br>
                                    файлы
                                </h3>
                            </a>
                        </li>
                         <li>
                            <a href="/gallery-media"  data-type="gallery" >
                                <div class="media-img-block">
                                <img  class="media-main" src="<?php echo get_theme_file_uri('/assets/images/gallery.png') ?>"  alt="Картинка" />
                                <img  class="media-active" src="<?php echo get_theme_file_uri('/assets/images/gallery2.png') ?>"  alt="Картинка" />
                                </div>
                                <h3>
                                    Фото
                                </h3>
                            </a>
                        </li>
                         <li>
                            <a href="/video-media" data-type="video" >
                                <div class="media-img-block">
                                <img  class="media-main" src="<?php echo get_theme_file_uri('/assets/images/video.png') ?>"  alt="Картинка" />
                                <img  class="media-active" src="<?php echo get_theme_file_uri('/assets/images/video2.png') ?>"  alt="Картинка" />
                                </div>
                                <h3>
                                    Видео
                                </h3>
                            </a>
                        </li>
                    </ul>

                        <?php

                        if ($the_query->have_posts()) : ?>
                                <div class="list-media">
                                    <div class="row">
                                <?php
                            $i =0;
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;
                                $type = get_field('type');
                                $gallery = get_field('gallery');


                                if($type == 'video') {
                                    if($query_count->found_posts >= 6){

                                        set_query_var( 'id',$i);
                                        get_template_part('inc/video-media-masonry');

                                    }else{
                                        get_template_part('inc/video-media-fitrows');

                                    }

                                    $i++;


                                }



                            endwhile;?>
                                    </div>
                        <?php
                                //  bug with echo masonry
                        if($query_count->found_posts >= 6) {
                            echo '    </div>  </div>';
                        }


                            echo '<h2 class="media-head-two"><span>*</span> Новые фотоальбомы</h2>';

                            echo '<div class="row"><ul class="media-row-gallery"> ';
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;
                                $type = get_field('type');
                                $gallery = get_field('gallery');

                                if($type == 'gallery') {
                                    echo '<li>';
                                        echo '
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12   ">
                                                <a href="'.  get_the_permalink().'" title="'.__('ссылка на медиа', 'light').'"  style="background: url('. $gallery[0]['url'].') no-repeat!important;">
                                                <div class="event-image-overlay"></div>
                                                <div class="media-conten-gallery">
                                                <h3 class="media-block-title">
                                                     '.get_the_title().'
                                                </h3>
                                                    <div class="media-block-link">
                                                    '.__('открыть альбом', 'light').'
                                                    </div>
                                               
                                                </div>
                                                 </a> 
                                            </div>
                                        ';


                                    echo '</li>';
                                }
                            endwhile;
                            echo ' </ul> </div> </div>';

                        endif;
                        ?>


                </div>
            </div>
        </div>

    </div>

<?php get_footer();
