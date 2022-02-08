<?php
/*
    Template Name: Страница Партнеры
    Template Post Type: page
*/
?>
<?php get_header(); ?>
<section class="page-parthners" id="page-parthners">
    <div class="container">
        <div class="page-parthners-block">
            <h2 class="page-parthners-block__title">
                HR партнер
            </h2>
            <div class="page-parthners-block__logos">
                <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                        'post_type'   => 'partner',
                        'category_name' => 'hr',
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                            ?>
                            <a href="<?php the_field('add_link_parthner');?>" target="_blank" class="page-parthners-block__link">
                                <img src="<?php the_field('add_logo_parthners');?>" alt="<?php get_the_title(); ?>" class="page-parthners-block__image">
                                <span class="page-parthners-block__desc">
                                    <?php get_the_title(); ?>
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
        <div class="page-parthners-block">
            <h2 class="page-parthners-block__title">
                информационный партнер
            </h2>
            <div class="page-parthners-block__logos">
                <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                        'post_type'   => 'partner',
                        'category_name' => 'hr',
                    ]);

                    if ($myposts) {
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                            ?>
                            <a href="<?php the_field('add_link_parthner');?>" target="_blank" class="page-parthners-block__link">
                                <img src="<?php the_field('add_logo_parthners');?>" alt="<?php get_the_title(); ?>" class="page-parthners-block__image">
                                <span class="page-parthners-block__desc">
                                            <?php get_the_title(); ?>
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
    </div>
</section>
<?php get_footer(); ?>