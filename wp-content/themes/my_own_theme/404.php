<?php get_header(); ?>
	<section class="error-404 not-found">
		Sorry, Page not found,
		bugo ka. 
	</section>
	<h3>tistinga ra gud nig mga links diri sa ubos or i search nlang nimo. bugo. </h3>
	<?php 
		get_search_form(); 
		the_widget('WP_Widget_Recent_Posts' );
		?>
		<h3>Check the most used categories</h3>
		<ul>
			<?php wp_list_categories(array(
				'orderby' 	=> 'count', 
				'order' 	=> 'DESC',
				'show_count'=> 1,
				'title_li'	=> '',
				'number' 	=> 5,
			)); ?>
			
		</ul>
		<?php the_widget('WP_Widget_Archives', 'dropdown=0', "after_title=</h2>$archive_content"); ?>
<?php get_footer(); ?>