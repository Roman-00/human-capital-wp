<?php
/*
    Template Name: Страница Инфо-Партнеры
    Template Post Type: page
*/
?>
<?php get_header(); ?>
<section class="page-parthners" id="page-parthners">
    <div class="container">
        <div class="page-parthners-block">
            <a href="https://mybusiness.kz/" target="_blank" class="page-parthners-block__link">
                <h2 class="page-parthners-block__title">
                    информационный партнер
                </h2>
                <img src="<?php echo bloginfo('template_url');?>/assets/images/parthners/my-bussines.svg" alt="My Busiines" class="page-parthners-block__image">
                <span class="page-parthners-block__desc">
                    MyBusiness
                </span>
            </a>
        </div>
    </div>
</section>
<?php get_footer(); ?>