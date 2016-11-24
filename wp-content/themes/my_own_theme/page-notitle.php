<?php 
/*
	Template Name: Page No Title
*/

	get_header(); ?>
	<div id="main">
		<div id="content">
			<h4>A static page</h4>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
					<h4>Posted on <?php the_time('F jS, Y') ?></h4>
					<p><?php the_content(__('(more...)')); ?></p>
					<hr> 
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<div id="delimiter"></div>
	<div class="row">
		<nav></nav>
	
	
	</div>
<?php get_footer(); ?>