
<?php get_header(); ?>

 

        <?php if(have_posts()) : ?>
			<div>==================<br>
				pagination here 
				<br>	
				<?php previous_post_link(); ?>
				<br>
				<?php next_post_link(); ?>
				<br>===================
			</div>
          <?php while(have_posts()) : the_post(); ?>
           <?php the_title('<h3>', '</h3>'); ?>  
                <?php if(has_post_thumbnail()): 
                	the_post_thumbnail('thumbnail');
                	endif;
                	echo "category: ";
                	the_category(' ');
                	echo " | TAgs:";
                	the_tags();
                	echo " | ";
                	edit_post_link();
                	the_content();
                	if(comments_open()){
                		comments_template();
                	}
                ?>


          <?php endwhile; ?>
        
        <?php else :?>
          <p><?php __('No Posts Found'); ?></p>
          <?php endif; ?>
          

    <?php get_footer(); ?>