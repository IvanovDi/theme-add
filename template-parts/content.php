<article id="post-<?php the_ID(); ?>" <?php post_class();?> style="margin-bottom: 25px;">

    <div class="row">


        <div>
            <div class="blog_post_img col-md-4">
                <a href="<?php the_permalink(); ?>">     <?php the_post_thumbnail(); ?> </a>
            </div>
            <!--                            выводит контент поста-->

            
            <div class="col-md-8">
                <h4> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h4>
                <?php the_excerpt();  ?>
                <a href="<?php the_permalink(); ?>"> Continue reading</a>
            </div>


<!--            <div >-->
<!--                <p> Post By : --><?php //the_author(); ?><!--</p>-->
<!--                <p>  On : --><?php //the_time('j F Y'); ?><!-- </p>-->
<!--            </div>-->
        </div>
    </div>
</article>