<?php
/*
 * Template name: Блог
 */

?>
<?php get_header(); ?>


<div class="container" style="margin-top: 100px;">
    <div class="row">
            <div class="col-md-offset-1 col-md-9">

            <?php
                $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
                $args = array(
                'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
                'paged'          => $current_page // текущая страница
                );
                query_posts( $args );

                $wp_query->is_archive = true;
                $wp_query->is_home = false;
            ?>
                <?php if (have_posts()) {?>
                    <?php while( have_posts() ) : the_post(); ?>
                        <?php get_template_part('template-parts/content'); ?>
                    <?php endwhile; ?>
                <?php } ?>
                <?php the_posts_pagination(); ?>
            </div>
    </div>
</div>


<?php get_footer(); ?>
