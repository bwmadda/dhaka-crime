<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="single_news_detils">
<h2 class="archive_loop_title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
<?php the_post_thumbnail('archive', array('class' => 'archive')); ?>
<div class="archive_loop_matar"><?php echo excerpt('30'); ?></div></div>

<?php endwhile; ?>
<?php endif; ?>

