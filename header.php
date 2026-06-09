<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header>

<div class="container">

<h2><a class="logo" href="<?php echo esc_url(home_url('/')); ?>">LE FOIN® LAB</a></h2>

<nav>

<a href="<?php echo home_url('/category/research'); ?>">
Research
</a>

<a href="<?php echo home_url('/category/books'); ?>">
Books
</a>

<a href="<?php echo home_url('/category/comics'); ?>">
Comics
</a>

<a href="<?php echo home_url('/category/game'); ?>">
Games
</a>

<a href="<?php echo home_url('/category/music'); ?>">
Music
</a>

</nav>

</div>

</header>
