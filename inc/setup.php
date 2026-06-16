<?php

function lefoin_setup(){

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
register_nav_menus(

    array(

        'primary' => 'Primary Menu'

    )

);
}

add_action(
    'after_setup_theme',
    'lefoin_setup'
);


function lefoin_assets(){

    wp_enqueue_style(
        'lefoin-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );

    wp_enqueue_style(
        'lefoin-framework',
        get_template_directory_uri() .
        '/assets/css/lefoin.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'lefoin-js',
        get_template_directory_uri() .
        '/assets/js/lefoin.js',
        [],
        '1.0',
        true
    );

    wp_enqueue_script(
        'auth-js',
        get_template_directory_uri() .
        '/assets/js/auth.js',
        [],
        '1.0',
        true
    );

    wp_enqueue_script(
        'wallet-js',
        get_template_directory_uri() .
        '/assets/js/wallet.js',
        [],
        '1.0',
        true
    );

}


add_action(

    'wp_enqueue_scripts',

    'lefoin_assets'

);