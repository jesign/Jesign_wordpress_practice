    <h6>from search</h6>
    <h4>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>  
            </a>
    </h4>
    <p ><?php the_time('F j, Y g:i a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a></p>

    <?php if(has_post_thumbnail()) : ?>
            <div > 
              <?php the_post_thumbnail('thumbnail'); ?>
            </div>
    <?php endif; ?>

        <?php the_excerpt(); ?> 

        <?php comments_template() ;?>

</div><!-- /.blog-post -->
