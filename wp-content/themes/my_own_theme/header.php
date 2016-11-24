<html <?php language_attributes(); ?>>
	<head>
		<meta charset=" <?php bloginfo('charset' ); ?> ">
		<meta name="description" content=" <?php bloginfo('description') ?>">
		<title><?php bloginfo('title'); wp_title(' | ' ); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
			<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> class="teal  lighten-5">
		<div id="wrapper">	
			<div id="header" style="margin-top: 0px;">
				<!-- <?php if ( get_header_image() ) : ?>
				<div id="site-header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" 
							width="<?php echo get_custom_header()->width; ?>" 
							height="<?php echo get_custom_header()->height; ?>" 
							alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
				<?php endif; ?>  -->
				<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" width="100%" height="<?php echo get_custom_header()->height; ?>" />
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						
					<?php 
						$args = array( 
							'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'container'         => 'div',
			                'container_class'   => 'collapse navbar-collapse',
                			'container_id'      => 'bs-example-navbar-collapse-1',
			                'menu_class'        => 'nav navbar-nav',
			                'walker' => new wp_bootstrap_navwalker()
    						 );
						wp_nav_menu($args)
					?>
					</div>
				</nav>
			</div>
			<?php get_sidebar(); ?>