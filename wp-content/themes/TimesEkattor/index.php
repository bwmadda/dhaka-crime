 <?php get_header(); ?>

 
 
 
 
 
		<!--Start Add-->
	      <br>
	<img src="https://dhakacrime.com/wp-content/uploads/2017/11/lux.gif" alt="Add" height="auto" width="100%"> 	
	     <br>
	<!--Close Add-->
	
	

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
	<!--Start Lead-->
				<div class="lead fix">
					<div class="lead_01 fix">

<div class="widget_title"><?php dynamic_sidebar('slider'); ?></div>




				</div>
					<div class="lead_02 fix">






<div class="tv-tabs">
  <label for="tv-tab-1" class="tv-tab">সর্বশেষ </label>
  <label for="tv-tab-2" class="tv-tab">পঠিত</label>
</div>
<input id="tv-tab-1" name="tv-group" type="radio" checked="checked" class="tv-radio"/>
<div class="tv-content">

<?php query_posts('post_type=post&post_status=publish&posts_per_page=20&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>

</div>
<input id="tv-tab-2" name="tv-group" type="radio" class="tv-radio"/>
<div class="tv-content">

 <?php query_posts('post_type=post&post_status=publish&orderby=comment_count&posts_per_page=20&paged='. get_query_var('paged')); ?>
<?php get_template_part('title'); ?>
  
</div>



				</div>
				</div>
	<!--Close Lead-->

	
<!--Start Catagory-->
				<div class="catagory fix">
				<div class="pcata_title fix"><h3><a href="https://dhakacrime.com/?cat=3" target="_blank">জাতীয়</a></h3>   </div>
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=জাতীয়&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>						</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=জাতীয়&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>					</div>
			
			<h4 class="more_news"><a href="https://dhakacrime.com/?cat=3"> আরো সংবাদ &raquo; </a></h4>
				</div>
	<!--Close Catagory-->
	
	
	
<!--Start Catagory-->
				<div class="catagory fix">
				<div class="acata_title fix"><h3><a href="https://dhakacrime.com/?cat=15" target="_blank">আন্তর্জাতিক</a></h3>   </div>
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=আন্তর্জাতিক&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>						</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=আন্তর্জাতিক&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>					</div>
			
			<h4 class="more_news"><a href="https://dhakacrime.com/?cat=15"> আরো সংবাদ &raquo; </a></h4>
				</div>
	<!--Close Catagory-->
	
	
	
	<!--Start Exclusive-->
				<div class="exclusive fix">
 <div class="exclusive_01 fix">
 <div class="" style="background: #28784D; color: #FFF; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 4px;"><h3>শিক্ষা</h3>   </div>
 <div class="" style="background: #eee;">
<?php query_posts('post_type=post&category_name=শিক্ষা&offset=&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>
			

<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=17" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
			                </div>
							</div>
							

							
							
					<div class="exclusive_01 fix">
	<div class="" style="background: #5C9632; color: #FFF; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 4px;"><h3>তথ্য প্রযুক্তি </h3>   </div>
	<div class="" style="background: #eee;">
<?php query_posts('post_type=post&category_name=তথ্যপ্রযুক্তি&offset=&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>
			
			
<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=21" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
			
			</div>
			</div>
			
			
					<div class="exclusive_01 fix">
 <div class="" style="background: #256E5D; color: #FFF; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 4px;"><h3>ক্রাইম নিউজ</h3>   </div>
 <div class="" style="background: #eee;">
<?php query_posts('post_type=post&category_name=ক্রাইম-নিউজ&offset=&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>	
			

<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=22" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
			
			</div>
			</div>


				</div>
	<!--Close Exclusive-->
	

	
<!--Start Catagory===========================================########################################-->
	

	


	
	


	
	
	<!--Close Catagory===========================================########################################-->


	
	
	<!--Start Catagory===========================================########################################-->
	
	
	

<!--Start Catagory-->
				<div class="catagory fix">
				<div class="pcata_title fix"><h3><a href="https://dhakacrime.com/?cat=18" target="_blank">বিনোদন</a></h3>   </div>
					<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=বিনোদন&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('catagory'); ?>						</div>
					<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=বিনোদন&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>					</div>
			
			<h4 class="more_news"><a href="https://dhakacrime.com/?cat=18"> আরো সংবাদ &raquo; </a></h4>
				</div>
	<!--Close Catagory-->
	
	
	<!--Start Add-->
	<img src="https://dhakacrime.com/wp-content/uploads/2017/07/ex.png" alt="Add" height="80px" width="99%">
	<!--Close Add-->	

<br/>
<!--Photo Catagory-->
<h3 class="gallary_title"> ঢাকা ক্রাইম ভিডিও খবর </h3>
<div class="widget_title"><?php echo do_shortcode('[wonderplugin_gallery id="6"]'); ?></div>
	<!--Close Photo Catagory-->
	
	
	
	<!--Start Catagory-->		
	<div class="catagory fix">
				
	<div class="pcata_title fix"><h3><a href="https://dhakacrime.com/?cat=16" target="_blank">খেলাধুলা</a></h3>  
	</div>
		
					
<div class="catagory_01 fix">
<?php query_posts('post_type=post&category_name=খেলাধুলা&post_status=publish&posts_per_page=1&paged='. get_query_var('paged')); ?>					
<?php get_template_part('catagory'); ?>	
</div>
		
					
<div class="catagory_02 fix">
<?php query_posts('post_type=post&category_name=খেলাধুলা&offset=1&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
<?php get_template_part('title'); ?>					
</div>

		
	
			
<h4 class="more_news"><a href="https://dhakacrime.com/?cat=16"> আরো সংবাদ &raquo; </a></h4>
</div>
		
			
<!--Close Catagory-->
	
	
	<!--Close Catagory===========================================########################################-->
	
	
			<!--Start Add-->
	<img src="" alt="" height="150px" width="100%"> 	
	     <br> </br>
	<!--Close Add-->
	
	

<!--Start Catagory===========================================########################################-->


<!--Start Catagory-->
<? include ('smenu.php'); ?>
<!--Close Catagory-->
	
	

	<!--Start Exclusive-->
				<div class="exclusive fix">
 <div class="exclusive_01 fix">
 <div class="" style="background: #28784D; color: #FFF; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 4px;"><h3>তথ্য প্রযুক্তি</h3>   </div>
 <div class="" style="background: #eee;">
<?php query_posts('post_type=post&category_name=তথ্যপ্রযুক্তি&offset=&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>
			

<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=21" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
			                </div>
							</div>
							

							
							
					<div class="exclusive_01 fix">
	<div class="" style="background: #f10909; color: #FFF; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 4px;"><h3>ফিচার </h3>   </div>
	<div class="" style="background: #eee;">
<?php query_posts('post_type=post&category_name=ফিচার&offset=&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>
			
			
<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=19" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
			
			</div>
			</div>
			
			
					<div class="exclusive_01 fix">
 <div class="" style="background: #256E5D; color: #FFF; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 4px;"><h3>লাইফস্টাইল </h3>   </div>
 <div class="" style="background: #eee;">
<?php query_posts('post_type=post&category_name=লাইফস্টাইল&offset=&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>	
			

<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=20" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
			
			</div>
			</div>


				</div>
	<!--Close Exclusive-->
	
	

	
	
	<!--Close Catagory===========================================########################################-->

		<!--Start Add-->
	      <br>
	<img src="https://dhakacrime.com/wp-content/uploads/2017/07/596b05cdc7218.gif" alt="Add" height="auto" width="100%"> 	
	     <br>
	<!--Close Add-->
	
	
	
	





<!--Photo Catagory-->
<h3 class="gallary_title">ছবিঘর</h3>
<div class="widget_title"> <?php echo do_shortcode('[wonderplugin_gallery id="5"]'); ?> </div>
	<!--Close Photo Catagory-->

	
      
      
      
      
	
	<!--Close Catagory===========================================########################################-->








	
	
			
			
			</div>
	<!--Close Contant-->
	<!--Start Sidebar-->
			<div class="sidebar fix">	
	<div class="" style="background: #cc0000; color: #f9f9f9; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 4px; border-radius: 5px;"><h3>নির্বাচিত খবর </h3>   </div>
<?php query_posts('post_type=post&category_name=নির্বাচিত&offset=&post_status=publish&posts_per_page=4&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>
			
 <div class="widget_title"><?php dynamic_sidebar('sidebar-1st'); ?></div>

 <div class="" style="background: #1e211f; color: #FFF; padding: 0px; margin-bottom: 5px; text-align: center; margin-top: 8px; border-radius: 5px;"><h3> রাজনীতি </h3>  </div>
 
 <div class="" style="background: #eee;">
<?php query_posts('post_type=post&category_name=রাজনীতি&offset=&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>
<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=4" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
			 </div>
			
<br>
<br>		

        
        
     

        
        
        
        
 <div class="" style="background: #224373; color: #FFF; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 23px; border-radius: 5px;"><h3> অর্থ বাণিজ্য </h3>  </div>
 
 <div class="" style="background: #eee;">
<?php query_posts('post_type=post&category_name=অর্থ-বাণিজ্য&offset=&post_status=publish&posts_per_page=3&paged='. 
get_query_var('paged')); ?>					
			<?php get_template_part('title'); ?>
<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=5" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
			 </div>

<br>
<br>
<br>

<div class="" style="background: #cc0000; color: #FFF; padding: 6px; margin-bottom: 5px; text-align: center; margin-top: 12px; border-radius: 5px;"><h3>বিশেষ প্রতিবেদন </h3>   </div>

<?php query_posts('post_type=post&category_name=এক্সক্লুসিভ&offset=&post_status=publish&posts_per_page=5&paged='.get_query_var('paged')); ?>	
<?php get_template_part('title'); ?>
			
<div style="background-color:#999;padding:5px 10px;float:right"><a href="https://dhakacrime.com/?cat=23" style="color:#000;outline:none;text-decoration:none;">এই বিভাগের সব খবর </a></div>
	
        <br/><br/>
<div class="widget_title"><?php dynamic_sidebar('sidebar'); ?></div>



       <!--  
 <div class="ads fix"> <div class="widget_title"><?php dynamic_sidebar('ads_01'); ?></div> </div> 
    -->
        
        
	<!--Close Sidebar-->
		
		</div>
	<!--Close Main Con-->
	<div class="clear"></div>
	

		<!--Start Footer-->
	<? include ('footer.php'); ?>
	<!--Close Footer-->	
	
	</div>	
	
	<?php get_footer(); ?>
	
	
	</body>
</html>