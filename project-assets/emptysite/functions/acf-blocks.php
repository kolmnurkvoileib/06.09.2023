<?php

function mike_block_categories($categories, $post)
{
    $categories[] = [
        'slug' => 'mike',
        'title' => __('Mike', 'mike')
    ];

    return array_reverse($categories);
}
add_filter('block_categories', 'mike_block_categories', 1, 2);

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{


    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name'              => 'headerbanner',
            'title'             => __('Header Banner'),
            'description'       => __('Header Banner.'),
            'render_template'   => 'acf_blocks/header-banner.php',
            'category'          => 'mike',
            'icon'              => 'email',
            'keywords'          => array('headerbanner'),
        ));

    }
}

