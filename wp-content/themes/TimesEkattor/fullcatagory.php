<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<?php the_post_thumbnail('fullcatagory', array('class' => 'fullcatagory')); ?>
<h3 class="fullcatagory_title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
<div class="fullcatagory_matar"><?php echo excerpt('90'); ?></div>
<?php endwhile; ?>
<?php endif; ?>

