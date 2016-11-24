<?php get_header(); ?>
<div id="main">
	<div id="content">
		<h1>Search kunohay</h1>
			<div> <!-- searching -->
				<?php get_search_form(); ?>
			</div>


		<h1>Searched Posts</h1>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		<?php get_template_part('content', 'search'); ?>
				<hr> 
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>

	<?php get_sidebar(); ?>
	
</div>
<div id="delimiter"></div>
