<?php
/*
    Template Name: Страница Медиа Центр
    Template Post Type: page
*/
?>
<?php get_header(); ?>
<section class="page-media" id="page-media">
    <div class="container">
        <div class="page-media-content">
            <div class="page-media-content__swiper-news">
                <!-- Slider main container -->
                <div class="swiper page-media-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                        global $post;

                        $myposts = get_posts([
                            'numberposts' => 4,
                            'category_name' => 'news',
                        ]);

                        if ($myposts) {
                            foreach ($myposts as $post) {
                                setup_postdata( $post );
                                ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo get_the_permalink();?>" class="page-media-news-card">
                                        <div class="page-media-news-card__overlay"></div>
                                        <img src="<?php the_field('images_media-centre-slides');?>" alt="<?php echo get_the_title();?>" class="page-media-news-card__images">
                                        <h2 class="page-media-news-card__title">
                                            <?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?>
                                        </h2>
                                    </a>
                                    <!-- /.page-media-news-card -->
                                </div>
                                <?php
                            }
                        } else {
                            ?> <p><?php _e('No posts', 'world-monitor')?></p> <?php
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="page-media-content__swiper-news-navigation">
                        <div class="page-media-content__swiper-news-button-prev"></div>
                        <div class="page-media-content__swiper-news-button-next"></div>
                    </div>
                </div>
            </div>
            <!-- /.page-media-content__swiper-news -->
            <div class="page-media-content__news-grid">
                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'category_name' => 'news',
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata( $post );
                        ?>
                        <div class="page-media-news__card">
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>" class="page-media-news__card-images">
                            <h3 class="page-media-news__card-title">
                                <?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?>
                            </h3>
                            <p class="page-media-news__card-description">
                                <?php echo mb_strimwidth(get_the_excerpt(), 0, 400, '...'); ?>
                            </p>
                            <div class="page-media-news__card-additional">
                                <a href="<?php echo get_the_permalink();?>" class="page-media-news__card-link">
                                    Читать подробнее
                                </a>
                                <span class="page-media-news__card-date">
                                         <?php the_date( 'Y-m-d' ); ?>
                                    </span>
                            </div>
                        </div>
                        <!-- /.page-media-news__card -->
                        <?php
                    }
                } else {
                    ?> <p><?php _e('No posts', 'world-monitor')?></p> <?php
                }

                wp_reset_postdata(); // Сбрасываем $post

                ?>
            </div>
            <!-- /.page-media-content__news-grid -->
        </div>
    </div>
</section>
<!-- /#page-media.page-media -->
<?php  get_footer(); ?>