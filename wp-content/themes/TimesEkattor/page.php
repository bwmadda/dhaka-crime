<?php get_header(); ?>


	<div class="clear"></div>
	<!--Start Scrool-->
		<div class="scrool fix">
			<div class="scrool_01 fix">Notice :</div>
			<div class="arrow"></div>
			<div class="scrool_02 fix"><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="60"  onmouseover="this.stop();" onmouseout="this.start();">
<?php $latest = get_posts('numberposts='.$bnews_options["BnEnumber"].'&offset='.$bnews_options["BnPostSkip"].'&cat='.$bnews_options["BnCatID"]); foreach( $latest as $post ): ?> &laquo;&raquo; </font><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php endforeach; ?></marquee></div>
		</div>
	<!--Close Scrool-->
	<div class="clear"></div>
	<!--Start Main Con-->
		<div class="main_con fix">
	<!--Start Contant-->
			<div class="contant fix">
	
	
	<?php get_template_part('single-page-loop2'); ?>


	
	
	
	
	
			
			</div>
	<!--Close Contant-->
	
	
	
	
	<!--Start Sidebar-->
			<div class="sidebar fix">
				<div class="last fix">
					<h3 class="last_title">Last News</h3>
					<div class="last_detial">
<?php query_posts('post_type=post&post_status=publish&posts_per_page=25&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title2'); ?>
					</div>
				</div>
				<div class="popular fix">
				<h3 class="popular_title">PopularNews</h3>
				<div class="popular_detial">
 <?php query_posts('post_type=post&post_status=publish&orderby=comment_count&posts_per_page=10&paged='. get_query_var('paged')); ?>
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