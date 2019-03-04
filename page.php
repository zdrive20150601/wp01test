<?php get_header(); ?>

    <?php if (have_posts()): ?>
    	<?php while(have_posts()): the_post(); ?>
      <article class="post">
        <h2><?php the_title(); ?></h2>
        <div class="entry">
          <?php the_content()?>
        </div>
      </article><!-- post -->
 		<?php endwhile; ?>
 	<?php endif; ?>

<?php get_footer(); ?>