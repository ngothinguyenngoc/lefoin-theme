<?php

function lefoin_customize_register($wp_customize){

    $wp_customize->add_section(
        'lefoin_homepage',
        array(
            'title' => 'Le Foin Homepage'
        )
    );

    $wp_customize->add_setting(
        'lefoin_hero_title',
        array(
            'default' => 'Research Meets Entertainment'
        )
    );

    $wp_customize->add_control(
        'lefoin_hero_title',
        array(
            'label' => 'Hero Title',
            'section' => 'lefoin_homepage',
            'type' => 'text'
        )
    );

}

add_action(
    'customize_register',
    'lefoin_customize_register'
);