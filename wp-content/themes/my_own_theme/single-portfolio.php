
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

                  echo 'Types:';
                  echo jesign_get_terms($post->ID, 'field');
                  echo ' | Software: ';
                  echo jesign_get_terms($post->ID, 'software');
                  if(current_user_can('manage_options' )){
                    echo ' | ';
                  	echo "category: ";
                  	the_category(' ');
                  	echo " | TAgs:";
                  	the_tags();
                  	echo " | ";
                  	edit_post_link();
                  	the_content();
                    
                  }
                
                ?>


          <?php endwhile; ?>
        
        <?php else :?>
          <p><?php __('No Posts Found'); ?></p>
          <?php endif; ?>
          

    <?php get_footer(); ?>