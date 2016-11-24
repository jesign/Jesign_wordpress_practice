<?php get_header(); ?>
<div id="main">
	<div id="content">	
		<h1>Main Area</h1>
		<?php if (have_posts()) : ?> 
				<div>
					<?php previous_posts_link('<<< Back!!!' ); ?>
					<br>
					<?php next_posts_link('Next!!! >>>' ); ?>
				</div>
				<header>
					<?php 
						the_archive_title('<h1 class="page-title">', '</h1>');
						the_archive_description('<div class="taxonomy=description">', '</div>');
					 ?>
				</header>		
			<?php while (have_posts()) : the_post(); ?>
<!-- 
				//this is already used in content.php. called by get_template_part
				 <h1><?php the_title(); ?></h1>
				<h4>Posted on <?php the_time('F jS, Y') ?></h4>
				<p><?php the_content(__('(more...)')); ?></p> 
 -->
        		<?php get_template_part('content', 'archive'); ?>
				<hr> 
			<?php endwhile; ?>
			<?php else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>
	
</div>
<div id="delimiter"></div>
