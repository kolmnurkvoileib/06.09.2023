<!doctype html>

<html>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
      * {
      font-family: 'Space Grotesk', sans-serif;
      }
    .navbar {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .logo {
      margin-right: auto;
    }

    .logo img {
      height: 100%;
      width: auto;
    }

    .main-nav {
      display: flex;
      list-style-type: none;
      padding: 0;
    }

    .menu-items li {
      margin: 0 10px;
    }
      
  </style>
<head>
    <meta charset="utf-8">
  
  <title>EMPTY WP</title>
  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<div class="navbar">
  <div class="logo">
    <img src="assets/img/images/LOGO-PNG.png alt="Logo">
  </div>
  <nav class="main-nav">
    <?php
    wp_nav_menu(array(
      'theme_location' => 'primary',
      'menu_id'        => 'primary-menu',
      'container'      => false,
      'depth'          => 1,
      'menu_class'     => 'menu-items',
    ));
    ?>
  </nav>
</div>

<body>