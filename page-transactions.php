
<?php
/*
Template Name: Transactions
*/

get_header();

if (!is_user_logged_in()) {
    wp_safe_redirect(home_url('/login'));
    exit;
}

$current_user = wp_get_current_user();

$transactions = lefoin_get_transactions(
    $current_user->ID
);

?>

<main class="container">

<div class="profile-card">

    <div class="profile-avatar">
        🪙
    </div>

    <h1>
        Foin Coin Transactions
    </h1>

    <p class="profile-subtitle">
        Transactions History
    </p>

    <div class="profile-menu">

    <?php if(empty($transactions)) : ?>

        <p>No transactions yet.</p>

    <?php else : ?>

        <?php foreach($transactions as $transaction) : ?>

            <div class="transaction-item">

                <strong>

                <?php echo esc_html($transaction['amount']); ?>

                Foin Coin

                </strong>

                <br>

                <?php echo esc_html($transaction['note']); ?>

                <br>

                <small>

                <?php echo esc_html($transaction['time']); ?>

                </small>

            </div>

            <hr>

        <?php endforeach; ?>

    <?php endif; ?>

    </div>

</div>

</main>

<?php get_footer(); ?>

