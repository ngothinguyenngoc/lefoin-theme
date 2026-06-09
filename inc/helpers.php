<?php

function lefoin_reading_time(){

    $content = get_post_field(
        'post_content',
        get_the_ID()
    );

    $word_count = str_word_count(
        wp_strip_all_tags($content)
    );

    $minutes = ceil($word_count / 200);

    if($minutes < 1){
        $minutes = 1;
    }

    return $minutes . ' min read';

}