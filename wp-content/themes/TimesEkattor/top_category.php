<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<?php the_post_thumbnail('topimg', array('class' => 'topimg')); ?>
<h3 class="top_img_title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
<?php endwhile; ?>
<?php endif; ?>

