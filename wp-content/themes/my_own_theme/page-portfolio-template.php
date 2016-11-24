<?php get_header(); 
	/*
		Template Name: Portfolio Template
	*/
?>
        <?php 
        $args = array('post_type' => 'portfolio'); 
        $loop = new WP_Query($args);

        if($loop->have_posts()) : ?>
			<div>
        ==================
        <br>
				Pagination here: 
				<br>	
				<?php previous_post_link(); ?>
				<br>
				<?php next_post_link(); ?>
				<br>
        ===================
			</div>
          <?php while($loop->have_posts()) : $loop->the_post(); ?>
          	 <a href="<?php the_permalink(); ?>">
           		<?php the_title('<h3>', '</h3>'); ?>  
            </a>
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
                
                ?>


          <?php endwhile; ?>
        
        <?php else :?>
          <p><?php __('No Posts Found'); ?></p>
          <?php endif; ?>
          

    <?php get_footer(); ?>