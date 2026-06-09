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
<div class="header-user">

<?php if (is_user_logged_in()) : ?>

<?php

$current_user = wp_get_current_user();

$balance = get_user_meta(
    $current_user->ID,
    'foin_coin',
    true
);

if ($balance === '') {
    $balance = 0;
}

?>

<a class="coin-btn"
href="<?php echo esc_url(home_url('/wallet')); ?>">

🪙 <?php echo esc_html($balance); ?> Foin Coin

</a>

<a class="user-btn"
href="<?php echo esc_url(home_url('/profile')); ?>">

👤 <?php echo esc_html($current_user->display_name); ?>

</a>

<?php else : ?>

<a class="user-btn"
href="<?php echo esc_url(home_url('/login')); ?>">

Login

</a>

<a class="user-btn register-btn"
href="<?php echo esc_url(home_url('/register')); ?>">

Register

</a>

<?php endif; ?>

</div>
</div>

</header>
