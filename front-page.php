
<?php get_header(); ?>

<main class="container">

<section class="hero">

    <div class="hero-content">

        <span class="hero-tag">

            LE FOIN® LAB

        </span>

        <h1>

            Research Meets Entertainment

        </h1>

        <p>

            Building worlds through science,
            stories, software and imagination.

        </p>

        <div class="hero-buttons">

            <a href="#research" class="hero-btn">

                Explore Universe

            </a>

            <a href="/category/research" class="hero-btn hero-outline">

                Latest Research

            </a>

        </div>

    </div>

</section>

<?php

function lefoin_show_category($title,$slug){

?>

<section class="universe-card">

   <div class="section-header">

    <h2><?php echo esc_html($title); ?></h2>

    href="<?php echo esc_url(
get_category_link(
get_category_by_slug($slug)
)); ?>"

        View All →

    </a>

</div>

<?php

$query=new WP_Query([

    'posts_per_page'=>5,

    'category_name'=>$slug

]);

if($query->have_posts()) :

?>

<div class="post-grid">

<?php

while($query->have_posts()) :

$query->the_post();

?>

<div class="post-card">

    <?php if(has_post_thumbnail()) : ?>

        <div class="post-thumb">

            <a href="<?php the_permalink(); ?>">

                <?php the_post_thumbnail('medium'); ?>

            </a>

        </div>

    <?php endif; ?>

    <div class="post-content">

        <h3>

            <a href="<?php the_permalink(); ?>">

                <?php the_title(); ?>

            </a>

        </h3>

        <p>

            <?php

            echo wp_trim_words(

                get_the_excerpt(),

                22

            );

            ?>

        </p>

        <a class="readmore"

           href="<?php the_permalink(); ?>">

            Read More →

        </a>

    </div>

</div>

<?php

endwhile;

?>

</div>

<?php

else :

?>

<p>Coming Soon...</p>

<?php

endif;

wp_reset_postdata();

?>

</section>

<?php

}

$sections=[

["Research","research"],

["Books","books"],

["Comics","comics"],

["Games","game"],

["Tarot","tarot"],

["Foin Coin™","foin-coin"]

];

foreach($sections as $section){

    lefoin_show_category(

        $section[0],

        $section[1]

    );

}

?>

</main>

<?php get_footer(); ?>

