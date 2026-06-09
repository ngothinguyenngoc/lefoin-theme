<?php
/*
Template Name: Profile
*/

get_header();

$current_user = wp_get_current_user();


?>
<div class="profile-subtitle">

Le Foin ID

</div>

<main class="container">

<div class="profile-card">

<div class="profile-avatar">

👤

</div>

<h1>

<?php echo esc_html($current_user->display_name); ?>

</h1>

<p>

Le Foin Member

</p>

<div class="wallet">

<div class="wallet-title">

🪙 Foin Coin

</div>

<div class="wallet-balance">

0

</div>

<a class="wallet-btn" href="<?php echo esc_url(home_url('/wallet')); ?>">

Deposit

</a>

</div>

<div class="profile-menu">

<a href="#">My Wallet</a>

<a href="#">My Library</a>

<a href="#">Settings</a>

<a href="<?php echo wp_logout_url(home_url()); ?>">

Logout

</a>

</div>

</div>

</main>

<?php get_footer(); ?>