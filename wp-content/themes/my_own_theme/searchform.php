<form action=" <?php echo home_url('/' ); ?>">
	Search
	<input type="search" class="form-control" placeholder="Search" 
		value=" <?php echo get_search_query(); ?>" name="s" title="Search">
</form>