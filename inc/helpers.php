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
function lefoin_breadcrumb(){

    if(is_front_page()){
        return;
    }

    echo '<div class="breadcrumb">';

    echo '<a href="' . home_url() . '">Home</a>';

    if(is_single()){

        $cats = get_the_category();

        if(!empty($cats)){

            echo ' &nbsp;>&nbsp; ';

            echo '<a href="' .
                get_category_link($cats[0]->term_id)
                . '">';

            echo esc_html($cats[0]->name);

            echo '</a>';

        }

        echo ' &nbsp;>&nbsp; ';

        the_title();

    }

    echo '</div>';

}