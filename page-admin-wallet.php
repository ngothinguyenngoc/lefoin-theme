
<?php
/*
Template Name: Admin Wallet
*/

get_header();

if (!current_user_can('administrator')) {
    wp_die('Access denied.');
}

$users = get_users();

?>

<main class="container">

<div class="profile-card">

<h1>Le Foin Wallet Manager</h1>

<p class="profile-subtitle">

Administrator Only

</p>

<table style="width:100%;border-collapse:collapse;">

<tr>

<th align="left">User</th>

<th align="left">Balance</th>

</tr>

<?php foreach($users as $user): ?>

<tr>

<td>

<?php echo esc_html($user->display_name); ?>

</td>

<td>

<?php

echo esc_html(
    lefoin_get_balance(
        $user->ID
    )
);

?>

 Foin Coin

</td>

</tr>

<?php endforeach; ?>

</table>

</div>

</main>

<?php get_footer(); ?>
