<?php if(have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>        

						<div class="single_post">
							<h2 class="single_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_post_thumbnail('single', array('class' => 'single-post-thumb')); ?>

																			<div class="post_content">
	
								<?php the_content(); ?>
								
								</div>
						</div>


					<?php endwhile; ?>    
					<?php endif; ?>


	