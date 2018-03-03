<?php if(have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>        

						<div class="single_post">
							<h2 class="single_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
<div class="post-meta">  
	<div class="user_meta">
		<?php $author_id=$post->post_author; ?>
		 
		 </br>
		
	</div>
	<div class="post_metas"
		<span class="date pf-date">
			<i class="fa fa-calendar-o"></i>
			<?php the_time('j F Y') ?>
		</span>
		<span class="comment">
			<i class="fa fa-external-link"></i>
			<?php the_category(', ') ?>
		</span>
		<span class="post_count">
		<!--	<?php echo do_shortcode('[post-views] বার') ?> -->
		</span>
	</div>
</div>	

<div class="picture fix">
</div>
<?php the_post_thumbnail('single_thumb', array('class' => 'single_thumb')); ?> 

																			<div class="post_content">
	
								<?php the_content(); ?>
								
								</div>
								
<div class="znews-share">
					<div class="share">
						<ul>
							<li class="share-pin">
								share
							</li>
							<!-- facebook -->
							<li>
								<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink( $post->ID ); ?>" onclick="window.open(this.href, '', 'width=600,height=300');return false;"><i class="fa fa-facebook"></i></a>
							</li>
							<!-- twitter -->
							<li>
								<a href="https://twitter.com/share?text=The%20Dress%20of%20Many%20Colors%20Blue%20White%20and%20Blue&amp;url=<?php echo get_permalink( $post->ID ); ?>" onclick="window.open(this.href, '', 'width=600,height=400');return false;"><i class="fa fa-twitter"></i></a>
							</li>
							<!-- google plus -->
							<li>
								<a href="https://plus.google.com/share?url=http://znews.weblogtemplates.org/the-dress-of-many-colors/" onclick="window.open(this.href, '', 'width=600,height=530');return false;"><i class="fa fa-google-plus"></i></a>
							</li>
							<!-- reddit -->
							<li>
								<a target="_blank" href="http://reddit.com/submit?url=http://znews.weblogtemplates.org/the-dress-of-many-colors/&amp;title=The Dress of Many Colors Blue White and Blue"><i class="fa fa-reddit"></i></a>
							</li>
							<!-- linkedin -->
							<li>
								<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://znews.weblogtemplates.org/the-dress-of-many-colors/" onclick="window.open(this.href, '', 'width=600,height=530');return false;"><i class="fa fa-linkedin"></i></a>
							</li>
							<!-- pinterest -->
							<li>
								<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
              <?php if (function_exists('wp_get_shortlink')) { ?>
<div><span class="post-shortlink">শর্টলিংকঃ
<input type='text' value='<?php echo wp_get_shortlink(get_the_ID()); ?>' onclick='this.focus(); this.select();' />
</span></div>
<?php } ?>
</div>
</div>
<div class="DCopyright">সকল প্রকাশিত/প্রচারিত কোনো সংবাদ, তথ্য, ছবি, আলোকচিত্র, রেখাচিত্র, ভিডিওচিত্র, অডিও কনটেন্ট কপিরাইট আইনে পূর্বানুমতি ছাড়া ব্যবহার করা যাবে না। পাঠকের মতামতের জন্য কৃর্তপক্ষ দায়ী নয়। লেখাটির দায় সম্পূর্ন লেখকের। </div>


					<?php endwhile; ?>    
					<?php endif; ?>