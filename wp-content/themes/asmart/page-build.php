<?php
/*
 * Template Name: Страница разработки
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
                <h2 class="spec-title-h2"><?php _e( 'Страница в разработке', 'light' ); ?></h2>
                </div>
            </div>
        </div>

    </div>

<?php get_footer();
