<?php get_header(); ?>
<?php lefoin_breadcrumb(); ?>

<main class="container">

<?php

if(have_posts()) :

while(have_posts()) :

the_post();

?>

<article class="single-post">

    <?php if(has_post_thumbnail()) : ?>

        <div class="single-thumb">

            <?php the_post_thumbnail('large'); ?>

        </div>

    <?php endif; ?>

    <h1>

        <?php the_title(); ?>

    </h1>

    <div class="post-meta">

    <?php the_time('F j, Y'); ?>

    •

    <?php echo lefoin_reading_time(); ?>

    •

    <?php the_category(', '); ?>

</div>
    <div class="single-content">

        <?php the_content(); ?>

    </div>

</article>

<div class="post-navigation">

    <div>
        <section class="related-posts">

<h2>

Continue Exploring

</h2>

<div class="post-grid">

<?php

$current=get_the_ID();

$cats=wp_get_post_categories($current);

$query=new WP_Query([

'posts_per_page'=>3,

'post__not_in'=>[$current],

'category__in'=>$cats

]);

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

18

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

<?php

endwhile;

wp_reset_postdata();

?>

</div>

</section>

        <?php previous_post_link('%link','← Previous'); ?>

    </div>

    <div>

        <?php next_post_link('%link','Next →'); ?>

    </div>

</div>

<?php

endwhile;

endif;

?>

</main>

<?php get_footer(); ?>