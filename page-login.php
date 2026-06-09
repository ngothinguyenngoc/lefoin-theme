
<?php
/*
Template Name: Login
*/

$login_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $credentials = array(
        'user_login'    => sanitize_email($_POST['email']),
        'user_password' => $_POST['password'],
        'remember'      => true
    );

    $user = wp_signon($credentials, false);

    if (is_wp_error($user)) {

        $login_error = "Invalid email or password.";

    } else {

        wp_safe_redirect(home_url('/profile'));
        exit;

    }

}

get_header();
?>

<main class="container">

<div class="auth-box">

<h1>Welcome Back</h1>

<p>

Sign in to Le Foin.

</p>

<?php if (!empty($login_error)) : ?>

<p style="color:#ff6666;">

<?php echo esc_html($login_error); ?>

</p>

<?php endif; ?>

<form method="post">

<label>Email</label>

<input
    type="email"
    name="email"
    required
>

<label>Password</label>

<input
    type="password"
    name="password"
    required
>

<button type="submit">

Sign In

</button>

</form>

</div>

</main>

<?php get_footer(); ?>

