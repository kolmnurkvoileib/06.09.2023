<!doctype html>
<html>

<head>
  <meta name="description" content="">

  <meta charset="utf-8">
  <title>EMPTY WP</title>
  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<div>
  <nav class="navbar">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'container'      => false,
        'depth'          => 1,
        'menu_class'     => 'main-nav',
      ));
      ?>

  </nav>
</div>

<body>