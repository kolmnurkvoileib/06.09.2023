<?php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'     => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Header',
        'menu_title'    => 'Header',
        'parent_slug'    => 'theme-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'     => 'Theme Footer',
        'menu_title'    => 'Footer',
        'parent_slug'    => 'theme-settings',
    ));
}
