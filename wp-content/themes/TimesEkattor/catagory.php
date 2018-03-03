
<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<?php the_post_thumbnail('catagorypic', array('class' => 'catagorypic')); ?>
<h3 class="catagory_title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
<div class="catagory_matar"><?php echo excerpt('30'); ?></div>
<?php endwhile; ?>
<?php endif; ?>






