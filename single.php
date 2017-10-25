<?php get_header(); ?>


    <div class="container" style="margin-top:40px;">

        <div class="row" style="margin-bottom: 50px;">
            <div class="col-md-offset-1 col-md-9">

                <?php if (have_posts()) {?>
                    <?php the_post(); ?>
                    <div>
                        <div class="blog_post_img col-md-4">
                                 <?php the_post_thumbnail(); ?>
                        </div>
                        <!--                            выводит контент поста-->

                        <div class="col-md-8">
                            <h4><?php the_title(); ?></h4>
                            <p><?php  the_content(); ?></p>

                            <div >
                                <p> Post By : <?php the_author(); ?> </p>
                                <p>  On : <?php the_time('j F Y'); ?> </p>
                            </div>
                        </div>


                        <?php
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>