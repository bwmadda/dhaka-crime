<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

<div class="titleloop fix">
<?php the_post_thumbnail('title_img', array('class' => 'title_img')); ?>
<h3 class="title_loop"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
</div>

<?php endwhile; ?>
<?php endif; ?>