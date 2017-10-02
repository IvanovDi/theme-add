<?php get_header(); ?>
    <div class="container" style="margin-top: 200px;">
        <div class="row">
                <div class="col-md-12">

                    <?php if (have_posts()) {?>
                        <?php while( have_posts() ) : the_post(); ?>

                            <?php get_template_part('template-parts/content'); ?>
                            <?php
                            if ( comments_open() || get_comments_number() ) {
                            comments_template();
                            }
                            ?>
                        <?php endwhile; ?>
                    <?php } ?>
                </div>
        </div>
    </div>
<?php get_footer(); ?>