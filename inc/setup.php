<?php

function lefoin_setup(){

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

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

}

add_action(

    'wp_enqueue_scripts',

    'lefoin_assets'

);