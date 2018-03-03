<?php get_header(); ?>


	<div class="clear"></div>
	<!--Start Scrool-->
		<div class="scrool fix">
		  <div class="boxc">
			<div class="scrool_01 fix"> সদ্য প্রাপ্ত </div>
			<div class="arrow"></div>
			<div class="scrool_02 fix">
			<marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="60"  onmouseover="this.stop();" onmouseout="this.start();">
<?php $latest = get_posts('numberposts='.$bnews_options["BnEnumber"].'&offset='.$bnews_options["BnPostSkip"].'&cat='.$bnews_options["BnCatID"]); foreach( $latest as $post ): ?> <img src="https://dhakacrime.com/wp-content/uploads/2017/07/fav-1.png"> </font><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
</a><?php endforeach; ?></marquee> </div>
		</div>
		</div>
	<!--Close Scrool-->
	<div class="clear"></div>
	<!--Start Main Con-->
		<div class="main_con fix">
	<!--Start Contant-->
			<div class="contant fix">
	
					
	<?php get_template_part('post-loop'); ?>


<div class="nav-next"><?php previous_posts_link( __( 'Previous Page<span
class="meta-nav">&larr;</span>') ); ?></div><div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&rarr;</span> Next Page') ); ?></div>
	

			<!--Start Add-->
	<img src="https://dhakacrime.com/wp-content/uploads/2017/07/dkfpsdk.jpg" alt="Add" height="150px" width="95%">	
	     <br> </br>
	    <!--Close Add-->	
	
			
			</div>
	<!--Close Contant-->
		
		
	<!--Start Sidebar-->
			<div class="sidebar fix">
				<div class="last fix">
					<h3 class="last_title">সর্বশেষ সংবাদ</h3>
					<div class="last_detial">
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title2'); ?>
					</div>
				</div>
		<!--Start Add-->
	<img src="https://dhakacrime.com/wp-content/uploads/2017/07/20371071_815776631915402_927827616_n.jpg" alt="Add" height="200px" width="100%">	
	     <br> </br>
	    <!--Close Add-->
				<div class="popular fix">
				<h3 class="popular_title">সর্বাধিক পঠিত</h3>
				<div class="popular_detial">
 <?php query_posts('post_type=post&post_status=publish&orderby=comment_count&posts_per_page=5&paged='. get_query_var('paged')); ?>
<?php get_template_part('title2'); ?>
				</div>
			
			</div>
	<!--Close Sidebar-->
	

		
		</div>
		
		
	<!--Close Main Con-->
	<div class="clear"></div>
	
	<!--Start Footer-->
 <? include ('footer.php'); ?>
	<!--Close Footer-->	
	
	
	</div>	
	
	<?php wp_footer();?>
	
	
	</body>
</html>