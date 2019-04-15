<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="start-content lightgallery">
                        <?php
                        $type = get_field('type');
                        if($type == 'video'){
                            $video = get_field('video');

                            echo $video;

                        }else{ ?>
                            <div class="carousel">
                                <?php
                                $gallery = get_field('gallery');
                                foreach ($gallery as $value){

                                    echo '
                                <a  href="'.$value['url'].'"    class="   col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <img src="'.$value['url'].'"     />
                                </a>
                                ';
                                }
                                ?>

                            </div>
                        <?php } ?>



                    </div>
                </div>
            </div>
        </div>

    </div>


<?php get_footer();
