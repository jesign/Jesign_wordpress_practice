<?php get_header(); ?>
<div id="main">
	<div id="content">
		<h1>Search kunohay ahhahahaa</h1>
			<div> <!-- searching -->
				<?php get_search_form(); ?>
			</div>
		<h1>Filtered Posts</h1>
		<?php $lastBlog = new WP_Query('type=post&posts_per_page=2&offset=1'); ?>
		<?php if ($lastBlog->have_posts()) : while ($lastBlog->have_posts()) : $lastBlog->the_post(); ?>
        		<?php get_template_part('content', get_post_format()); ?>
				<hr> 
			<?php endwhile; 
			endif; 

			wp_reset_postdata();
		?>

		<h1>Main Area</h1>
		<?php if (have_posts()) : ?> 
				<div>
					<?php previous_posts_link('<<< Back!!!' ); ?>
					<br>
					<?php next_posts_link('Next!!! >>>' ); ?>
				</div>
			
			<?php while (have_posts()) : the_post(); ?>
<!-- 
				//this is already used in content.php. called by get_template_part
				 <h1><?php the_title(); ?></h1>
				<h4>Posted on <?php the_time('F jS, Y') ?></h4>
				<p><?php the_content(__('(more...)')); ?></p> 
 -->
				

        		<?php get_template_part('content', get_post_format()); ?>
				<hr> 
			<?php endwhile; ?>
			<?php else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>
	
</div>
<div id="delimiter"></div>
