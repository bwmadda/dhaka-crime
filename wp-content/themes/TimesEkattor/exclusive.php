<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<h3 class="exclusive_title2"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
<?php the_post_thumbnail('exclusive', array('class' => 'exclusivepic')); ?>
<div class="matar"><?php echo excerpt('20'); ?></div>

<?php endwhile; ?>
<?php endif; ?>

