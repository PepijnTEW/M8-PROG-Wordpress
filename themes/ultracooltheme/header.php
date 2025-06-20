<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<?php wp_body_open() ?>
<header id="site-nav">
	<div id="site-nav__title"><a class="nav-item" id="nav-title" href="<?php echo home_url() ?>">The Chinese Kitchen</a></div>
	<nav id="site-nav__menu">
		<a class="nav-item link" href="<?php echo home_url() ?>">Home</a>
        <a class="nav-item link" href="<?php echo get_post_type_archive_link('recepten') ?>">Recipes</a>
        <a class="nav-item link" href="<?php echo home_url('/about') ?>">About</a>
	</nav>
</header>