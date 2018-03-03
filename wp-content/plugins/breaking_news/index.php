<?php
/*
Plugin Name: BDiTScroll 
Plugin URI: http://www.bditzone.com
Description: বাংলা নিউজপেপারে ঘোষনা দেয়ার অপশনের দরকার হয়। সেই ঘোষনা দেওয়ার জন্যই এই প্লাগিন। শুধু প্লাগিনটি ইনসটল করে "ঘোষনা" মেনুতে পোস্ট দিলেই পাবলিশ হবে। 
Version: 1.6
Author: PAPPU
Author URI: http://www.facebook.com/djpappu41
*/

function create_rif_breaking_post_type() {
		register_post_type( 'Breaking',
				array(
						'labels' => array(
								'name' => __( 'ঘোষনা'),
								'singular_name' => __( 'breaking' ),
								'add_new' => __( 'নতুন আরেকটি' ),
								'view_item' => __( 'View Rules' ),
								'not_found' => __( 'Sorry, we couldn\'t find the any Custom Notice here.please add Notice to get Home page Notice' )
						),
				'public' => true,
				'publicly_queryable' => true,
				'exclude_from_search' => true,
				'menu_position' => 55,
				'has_archive' => false,
				'hierarchical' => true,
				'capability_type' => 'page',
				'rewrite' => array( 'slug' => 'br-rifoundation' ),
				'supports' => array( 'title' )
				)
		);		
}
add_action( 'init', 'create_rif_breaking_post_type' );

function rif_breaking_news(){
		query_posts(
			array(
				'posts_per_page'=>	10,
				'paged'			=>	get_query_var('paged'),
				'post_status'	=>	'publish',
				'post_type'		=>	'breaking'
			)
		);
global $wp_query;
$total_pages = $wp_query->max_num_pages;		
?>
<div style="height:28px;width: 100%;">			</div>
<div class="breaking_news_box" style="background: none repeat scroll 0 0 #2E8B57;bottom: 0;color: #CCCCCC;direction: ltr;height: 32px;left: 0;min-width: 600px;position: fixed;width: 100%;z-index: 99935;" id="saiful_breaking_news">		
	<b class="breaking_head">ঘোষনাঃ</b>
	<ul style="margin:4px;">

		<marquee height="30" style="behavior=&quot;scroll&quot;" align="center" direction="left" scrollamount="3" scrolldelay="5" onmouseover="this.stop()" onmouseout="this.start()">				
		<?php
		if($total_pages >= 1){
		if(have_posts()):while(have_posts()):the_post();?>
			<a><?php the_title(); ?></a>
		<?php endwhile;else:endif; }
		else {echo ' <span style="color:#fff;">এটা একটা সেম্পল ঘোষনা। আপনার ঘোষনা যুক্ত করতে ড্যাশবোর্ডে "ঘোষনা" অপশন থেকে "নতুন আরাকটি"তে ক্লিক করে ঘোষনা এ্যাড করুন। ধন্যবাদ।  যোগাযোগঃ</span> <a href="http://www.BDiTZone.com" target="_blank">BDiTZone</a>  <a href="http://www.facebook.com/djpappu41" target="_blank">PAPPU</a> ';}
		?>	
		</marquee>
	
	</ul>
</div>
<?php
wp_reset_query();
}
add_action('wp_footer','rif_breaking_news');
function rif_css_fileLink(){
echo '<link rel="stylesheet" type="text/css" href="'.plugin_dir_url(__FILE__).'css/style.css" >';
}
add_action('wp_head','rif_css_fileLink');
?>