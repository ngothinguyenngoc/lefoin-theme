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

<nav class="main-nav">

<?php

wp_nav_menu(
    array(
        'theme_location' => 'primary',
        'container'      => false
    )
);

?>

</nav>
</div>

</header>
