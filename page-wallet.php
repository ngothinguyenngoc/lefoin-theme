<?php
/*
Template Name: Wallet
*/

get_header();

$current_user = wp_get_current_user();

?>

<main class="container">

<div class="profile-card">

<div class="profile-avatar">

🪙

</div>

<h1>

Foin Coin Wallet

</h1>

<p>

Current Balance

</p>

<div class="wallet">

<strong>0 Foin Coin</strong>

</div>

<div class="profile-menu">

<a href="<?php echo home_url('/profile'); ?>">

👤 Profile

</a>

<a href="#">

💳 Deposit

</a>

<a href="#">

📜 Transaction History

</a>

<a href="<?php echo wp_logout_url(home_url()); ?>">

🚪 Logout

</a>

</div>

</div>

</main>

<?php get_footer(); ?>