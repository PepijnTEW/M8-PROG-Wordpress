<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
  <header class="site-nav">
    <div class="site-nav__inner">
      <!-- Site Title on the left -->
      <div class="site-nav__title">
        <a href="<?php echo home_url() ?>">The Chinese Kitchen</a>
      </div>

      <!-- Navigation links on the right -->
      <nav class="site-nav__menu">
        <a href="<?php echo home_url() ?>">Home</a>
        <a href="<?php echo get_post_type_archive_link('recepten') ?>">Recipes</a>
        <a href="<?php echo home_url('/about') ?>">About</a>
      </nav>
    </div>
  </header>
