<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package HumanExhibition
 */
?>
<?php get_header();?>

<?php
//запускаем цикл wp и проверяем, есть ли посты
while ( have_posts() ) :
    //если пост есть, выводим содержимое
    the_post();
    //находим шаблон для вывода поста в папке template/parts
    get_template_part( 'template-parts/content-post', get_post_type() );
    // ищет файл template-parts/content-{post-type}
endwhile; // End of the loop.
?>

<?php get_footer();?>
