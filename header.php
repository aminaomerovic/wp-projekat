<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container bar">
    <div>
      <h1 class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration:none;color:inherit">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <p class="site-tagline"><?php bloginfo('description'); ?></p>
    </div>
    <nav class="nav" aria-label="Primary">
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'container'      => false,
    'menu_class'     => 'menu',
    'fallback_cb'    => false,
  ]);
  ?>
</nav>

  </div>
</header>
<main class="site-main">
