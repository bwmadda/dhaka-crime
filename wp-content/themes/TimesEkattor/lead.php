

    <?php if(have_posts()) : ?>
	    <?php while (have_posts()) : the_post(); ?>
       
        <h3 class="leadcatagory_title">
        
        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
        
        </h3>
        
        <?php the_post_thumbnail('leadcatagory', array('class' => 'leadcatagory')); ?>
        
        <div class="fullcatagory_matar">
        <?php echo excerpt('40'); ?></div>

        <?php endwhile; ?>
    <?php endif; ?>

