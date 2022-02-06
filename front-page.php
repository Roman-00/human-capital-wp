<?php get_header() ?>

    <main>
        <section class="hero" id="hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-content__block">
                        <div class="hero-content__block-timer">
                            <div class="hero-content__block-timer-number">
                                <div>
									<span id="days">
										22
									</span>
                                </div>
                                <div class="hero-content__block-timer-description">
                                    Дня
                                </div>
                            </div>
                            <!-- /.hero-content__block-timer-number -->

                            <div class="hero-content__block-timer-number">
                                <div>
									<span id="hours">
										12
									</span>
                                </div>
                                <div class="hero-content__block-timer-description">
                                    Часов
                                </div>
                            </div>
                            <!-- /.hero-content__block-timer-number -->

                            <div class="hero-content__block-timer-number">
                                <div>
									<span id="minutes">
										58
									</span>
                                </div>
                                <div class="hero-content__block-timer-description">
                                    Минут
                                </div>
                            </div>
                            <!-- /.hero-content__block-timer-number -->

                            <div class="hero-content__block-timer-number">
                                <div>
									<span id="seconds">
										09
									</span>
                                </div>
                                <div class="hero-content__block-timer-description">
                                    Секунд
                                </div>
                            </div>
                            <!-- /.hero-content__block-timer-number -->
                        </div>
                        <!-- /.hero-content__block-timer -->

                        <div class="button button--no-bg button-open-modal" data-modal="1">
                            Регистрация
                        </div>
                        <!-- /.button button--no-bg button-open-modal -->

                        <div class="news-block">
                            <div class="news-block__interface">
                                <a href="/media-center/" class="news-block__interface-link-more">
                                    Смотреть все новости
                                </a>
                                <!-- /.news-block__interface-link-more -->
                            </div>
                            <!-- /.news-block__interface -->

                            <div class="news-block__slider-wrapper">
                                <!-- Slider main container -->
                                <div class="swiper news-block__swiper">
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
                                                setup_postdata($post);
                                                ?>
                                                <div class="swiper-slide">
                                                    <div class="news-block__card">
                                                        <img src="<?php the_post_thumbnail_url();?>" alt="<?php echo get_the_title();?>" class="news-block__card-images">
                                                        <div class="news-block__card-content">
                                                            <?php
                                                            foreach (get_the_category() as $category) {
                                                                printf(
                                                                    '<span class="news-block__card-tag %s">%s</span>',
                                                                    esc_url(get_category_link($category)),
                                                                    esc_html( $category -> name),
                                                                    );
                                                            }
                                                            ?>

                                                            <h3 class="news-block__card-title">
                                                                <?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?>
                                                            </h3>

                                                            <p class="news-block__card-description">
                                                                <?php echo mb_strimwidth(get_the_excerpt(), 0, 400, '...'); ?>
                                                            </p>

                                                            <div class="news-block__card-inter">
                                                                <a href="<?php echo get_the_permalink();?>" class="news-block__card-link-more">
                                                                    Читать новость
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- /.news-block__card-content -->
                                                    </div>
                                                    <!-- /.news-block__card -->
                                                </div>
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
                            <!-- /.news-block__slider-wrapper -->
                        </div>
                        <!-- /.news-block -->
                    </div>
                    <!-- /.hero-content__block -->

                    <div class="hero-parthners">
                        <div class="hero-parthners-wrapper">
                            <h3 class="hero-parthners__title">
                                Партнеры
                            </h3>

                            <div class="hero-parthners__slider-wrapper">
                                <!-- Slider main container -->
                                <div class="swiper hero-parthners__swiper">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <a href="#" class="hero-parthners__block-logo">
                                                <img src="<?php echo bloginfo('template_url');?>/assets/images/logo-parthners.png" alt="Manpower Group">
                                                <!--p>Manpower Group</p -->
                                            </a>
                                            <!-- /.hero-parthners__block-logo -->
                                        </div>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <a href="#" class="hero-parthners__block-logo">
                                                <img src="<?php echo bloginfo('template_url');?>/assets/images/logo-parthners-2.png" alt="Manpower Group">
                                            </a>
                                            <!-- /.hero-parthners__block-logo -->
                                        </div>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <a href="#" class="hero-parthners__block-logo">
                                                <img src="<?php echo bloginfo('template_url');?>/assets/images/logo-parthners.png" alt="Manpower Group">
                                            </a>
                                            <!-- /.hero-parthners__block-logo -->
                                        </div>
                                        <!-- Slides -->
                                        <div class="swiper-slide">
                                            <a href="#" class="hero-parthners__block-logo">
                                                <img src="<?php echo bloginfo('template_url');?>/assets/images/logo-parthners-2.png" alt="Manpower Group">
                                            </a>
                                            <!-- /.hero-parthners__block-logo -->
                                        </div>
                                    </div>

                                    <!-- If we need navigation buttons -->
                                    <div class="hero-parthners__swiper-navigation">
                                        <div class="hero-parthners__swiper-button-prev"></div>
                                        <div class="hero-parthners__swiper-button-next"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.hero-parthners__slider-wrapper -->
                        </div>
                    </div>
                    <!-- /.hero-parthners -->
                </div>
                <!-- /.hero-content -->
            </div>
        </section>
        <!-- /#hero.hero -->
    </main>

<?php get_footer(); ?>