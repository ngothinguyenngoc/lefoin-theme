
<?php
/*
Template Name: Profile
*/

get_header();

if (!is_user_logged_in()) {
    wp_safe_redirect(home_url('/login'));
    exit;
}

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

<main class="container">

<div class="profile-card">

    <div class="profile-avatar">
        👤
    </div>

    <h1>
        <?php echo esc_html($current_user->display_name); ?>
    </h1>

    <p class="profile-subtitle">
        LE FOIN ID
    </p>

    <div class="wallet">

        <div class="wallet-title">
            🪙 Foin Coin
        </div>

        <div class="wallet-balance">
            <?php echo esc_html($balance); ?>
        </div>

        <a
            class="wallet-btn"
            href="<?php echo esc_url(home_url('/wallet')); ?>">
            Deposit
        </a>

    </div>

    <div class="profile-menu">

        <a href="<?php echo esc_url(home_url('/wallet')); ?>">
            My Wallet
        </a>

        <a href="<?php echo esc_url(home_url('/library')); ?>">
            My Library
        </a>

        <a href="<?php echo esc_url(home_url('/settings')); ?>">
            Settings
        </a>

        <a href="<?php echo wp_logout_url(home_url()); ?>">
            Logout
        </a>

    </div>

</div>

</main>

<?php get_footer(); ?>

