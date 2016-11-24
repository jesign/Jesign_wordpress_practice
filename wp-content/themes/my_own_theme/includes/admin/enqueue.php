<?php 
	/* Created by Jesign */

	function ju_admin_enqueue(){
		if(!isset($_GET['page']) || $_GET['page'] != "ju_theme_opts"){
			return 
		}

		wp_register_style( 'jesign_bootstrap', get_template_directory_uri() . '/css/bootstrap.css'	);
		wp_enqueue_style('jesign_bootstrap');

		wp_register_script('jesign_options', get_template_directory_uri() . '/js/options.js', array(), false, true );
		wp_enqueue_script('ju_options' );
	}