<section class="detail-page" id="detail-page">
    <div class="container">
        <div class="detail-page-content">
            <?php
            foreach (get_the_category() as $category) {
                printf(
                    '<span class="detail-page-content__tag %s">%s</span>',
                    esc_url(get_category_link($category)),
                    esc_html( $category -> name),
                    );
            }
            ?>
            <?php
            if ( is_singular() ) :
                the_title( '<h2 class="detail-page-content__title">', '</h2>' );
            else :
                the_title( '<h2 class="detail-page-content__title"></h2>' );
            endif;
            ?>

            <div class="detail-page-content__additional-block">
                <div class="breadcrumbs detail-page-content__additional-block-breadcrumbs">
                    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' / '); ?>
                </div>

                <span class="date__text detail-page-content__additional-block-date">
                    <?php the_date( 'Y-m-d' ); ?>
                </span>
            </div>

            <div class="detail-page-content__grid">
                <asside id="detail-page-content__aside-left">
                    <div class="share-social">
                        <h3 class="share-social__title">
                            Поделиться
                        </h3>
                        <?php
                        meks_ess_share();
                        ?>
                    </div>
                    <!-- /.share-social -->
                </asside>
                <!-- /#detail-page-content__aside-right -->
                <div class="detail-page-content__info">
                    <?php the_content(); ?>
                </div>
                <!-- /.detail-page-content__info -->
                <aside id="detail-page-content__aside-right">
                    <div class="similar-posts">
                        <?php
                        global $post;

                        $query = new WP_Query([
                            'posts_per_page' => 3,
                            'category_name' => 'news',
                        ]);

                        if ( $query->have_posts() ) {
                            $cnt = 0;

                            while ($query->have_posts()) {
                                $query->the_post();
                                $cnt++;
                                switch ($cnt) {
                                    case '1':
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="similar-posts__item">
                                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>" class="similar-posts__item-images">
                                            <h4 class="similar-posts__item-title">
                                                <?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?>
                                            </h4>
                                            <span class="similar-posts__item-description">
                                                    <?php echo mb_strimwidth(get_the_excerpt(), 0, 100, '...'); ?>
                                                </span>
                                        </a>
                                        <?php
                                        break;
                                    default:
                                        ?>
                                        <a href="<?php the_permalink(); ?>" class="similar-posts__item">
                                            <h4 class="similar-posts__item-title">
                                                <?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?>
                                            </h4>
                                            <span class="similar-posts__item-description">
                                                    <?php echo mb_strimwidth(get_the_excerpt(), 0, 100, '...'); ?>
                                                </span>
                                        </a>
                                        <?php
                                        break;
                                }
                                ?>
                                <?php
                            }
                        } else {
                            ?> <p><?php _e('No posts', 'world-monitor')?></p> <?php
                        }

                        wp_reset_postdata(); // Сбрасываем $post
                        ?>
                    </div>

                    <img src="assets/images/add-banner.jpg" alt="" class="aside-banner">
                </aside>
                <!-- /#detail-page-content__aside-left -->
            </div>
            <!-- /.detail-page-content__grid -->
        </div>
        <!-- /.detail-page-content -->
    </div>
</section>
<!-- /#detail-page.detail-page -->