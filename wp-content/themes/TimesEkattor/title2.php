<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

<div class="titleloop2 fix">

<h3 class="title_loop2">&raquo; <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
</div>

<?php endwhile; ?>
<?php endif; ?>