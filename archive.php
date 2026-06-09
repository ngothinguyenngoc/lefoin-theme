<?php get_header(); ?>

<main class="container">

<section class="hero">

    <h1>

        <?php single_cat_title(); ?>

    </h1>

    <p>

        <?php echo category_description(); ?>

    </p>

</section>

<?php if(have_posts()) : ?>

<div class="post-grid">

<?php while(have_posts()) : the_post(); ?>

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

        <a
            class="readmore"
            href="<?php the_permalink(); ?>">

            Read More →

        </a>

    </div>

</div>

<?php endwhile; ?>

</div>

<div style="margin-top:50px;">

<?php

the_posts_pagination([

    'mid_size'=>2,

    'prev_text'=>'← Previous',

    'next_text'=>'Next →'

]);

?>

</div>

<?php else : ?>

<p>No posts found.</p>

<?php endif; ?>

</main>

<?php get_footer(); ?>