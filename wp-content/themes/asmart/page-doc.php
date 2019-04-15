<?php
/*
 * Template Name: Страница документов
 */

get_header(); ?>

    <div id="primary" class="content-area  ">
        <div class="bredscrumb">
            <h1 class="page-title-main">
                <?php echo get_the_title(); ?>
            </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="start-content">
                     <?php

                        $args = array(
                            'posts_per_page' => '-1',
                            'post_type' => 'docs',
                            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
                        );

                        $the_query = new WP_Query($args);

                        ?>
                    <ul class="list-docs">
                        <?php

                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;
                                $file = get_field( 'file' ,$post_id);

                                ?>
                                <li>
                                    <div class="doc-icon">
                                        <img  class="active-img" src="<?php echo get_theme_file_uri('/assets/images/icon-word.png') ?>"  alt="иконка doc" />
                                        <img  class="main-img" src="<?php echo get_theme_file_uri('/assets/images/icon-word-main.png') ?>"  alt="иконка doc" />
                                    </div>
                                    <div class="docs-content">
                                        <h3 class="title-accordion"><?= get_the_title($post_id); ?></h3>
                                        <div class="doc-dropdown-content-walp">
                                            <div  class="doc-dropdown-content">
                                                <?= get_the_content($post_id); ?>
                                            </div>
                                            <a href="<?= $file; ?>"  target="_blank" class="link-download-file-doc">
                                                <img src="<?php echo get_theme_file_uri('/assets/images/download.png') ?>"  alt="иконка загрузки файла" />
                                                <p>
                                                    Скачать документ
                                                </p>
                                            </a>
                                        </div>
                                    </div>


                                </li>
                             <?php

                            endwhile;
                            $GLOBALS['wp_query'] = $the_query;
                            the_posts_pagination([
                                'show_all' => false,
                                'prev_text' => __('<', 'light'),
                                'next_text' => __('>', 'light'),
                                'end_size' => '2',     // количество страниц на концах
                                'mid_size' => '2',
                                'screen_reader_text' => __(' ', 'light'),
                            ]);
                        endif;
                        ?>

                    </ul>
                </div>
            </div>
        </div>

    </div>

<?php get_footer();
