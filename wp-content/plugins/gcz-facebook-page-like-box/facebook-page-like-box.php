<?php 
/*
* Plugin Name: GCZ Facebook Page Like Box
* Plugin URI: http://www.shafiqul.info
* Description: This is a Simple Facebook Page Like Box Widget.
* Author: Md. Shafiqul Islam
* Author URI: http://www.facebook.com
* Version: 1.0
*/



if(file_exists(dirname( __FILE__ ) . '/includes/class-facebook-page-like.php')){
	require_once dirname( __FILE__ ) . '/includes/class-facebook-page-like.php';
};


function gcz_facebook_page_widget_register() {

    register_widget( 'gcz_facebook_page_like_box' );
 
}
add_action( 'widgets_init', 'gcz_facebook_page_widget_register' );