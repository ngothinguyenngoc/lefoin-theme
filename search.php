<?php get_header(); ?>

<main class="container">

<section class="hero">

    <div class="hero-content">

        <span class="hero-tag">

            LE FOIN® SEARCH

        </span>

        <h1>

            Search Results

        </h1>

        <p>

            Explore the Le Foin Universe.

        </p>

    </div>

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

<?php

the_posts_pagination();

?>

<?php else : ?>

<div class="hero">

<h2>

No results found.

</h2>

<p>

Try another keyword.

</p>

</div>

<?php endif; ?>

</main>

<?php get_footer(); ?>