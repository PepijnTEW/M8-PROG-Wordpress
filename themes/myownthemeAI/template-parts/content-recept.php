<article class="recept-card">
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('medium'); ?>
    <h3><?php the_title(); ?></h3>
    <p><?php echo get_the_term_list(get_the_ID(), 'regio', '', ', '); ?> - 
       <?php echo get_the_term_list(get_the_ID(), 'spice_level', '', ', '); ?></p>
  </a>
</article>
