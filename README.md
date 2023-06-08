# mike
mike repository

'npm run watch' to watch for changes
'npm run sync' to run browsersync

<div class="navbar">
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