<?php
/*
    Template Name: Страница Официальная поддержка
    Template Post Type: page
*/
?>
<?php get_header(); ?>
    <section class="page-parthners" id="page-parthners">
        <div class="container">
            <div class="page-parthners-block">
                <h2 class="page-parthners-block__title">
                    <?php the_field('name_category_parthners_oficial', 2)?>
                </h2>
                <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    'category_name' => 'official-partner',
                ]);

                if ($myposts) {
                    foreach ($myposts as $post) {
                        setup_postdata($post);
                        ?>
                        <a href="<?php the_field('add_link_parthner');?>" target="_blank" class="page-parthners-block__link">
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>" class="page-parthners-block__image">
                            <span class="page-parthners-block__desc">
                                        <?php echo get_the_title();?>
                                    </span>
                        </a>
                        <?php
                    }
                } else {
                    ?> <p><?php _e('No posts', 'human-exhibition')?></p> <?php
                }

                wp_reset_postdata(); // Сбрасываем $post
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>