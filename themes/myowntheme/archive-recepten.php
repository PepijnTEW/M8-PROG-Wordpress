<?php get_header(); ?>
<form id="filter-form">
  <?php wp_dropdown_categories(['taxonomy' => 'regio', 'name' => 'regio']); ?>
  <?php wp_dropdown_categories(['taxonomy' => 'spice_level', 'name' => 'spice_level']); ?>
</form>

<div id="recept-grid">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/content', 'recept'); ?>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
