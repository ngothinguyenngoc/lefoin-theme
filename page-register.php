
<?php
/*
Template Name: Register
*/

$register_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $display_name = sanitize_text_field($_POST['display_name']);
    $email = sanitize_email($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];

    if ($password !== $confirm) {

        $register_error = "Passwords do not match.";

    } elseif (email_exists($email)) {

        $register_error = "Email already exists.";

    } else {

        $username = sanitize_user(current(explode('@', $email)));

        while (username_exists($username)) {
            $username .= rand(0,9);
        }

        $user_id = wp_create_user(
            $username,
            $password,
            $email
        );

        if (!is_wp_error($user_id)) {

            wp_update_user(array(
                'ID' => $user_id,
                'display_name' => $display_name
            ));

            wp_set_current_user($user_id);
            wp_set_auth_cookie($user_id);

            wp_safe_redirect(home_url('/profile'));
        
            echo "SUCCESS";
exit;

        } else {

            $register_error = $user_id->get_error_message();

        }

    }

}

get_header();
?>

<main class="container">

<div class="auth-box">

<h1>Create your account</h1>

<p>Join the Le Foin Universe.</p>

<?php if (!empty($register_error)) : ?>

<p style="color:#ff6666;">

<?php echo esc_html($register_error); ?>

</p>

<?php endif; ?>

<form method="post">

<label>Name</label>
<input type="text" name="display_name" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Confirm Password</label>
<input type="password" name="confirm_password" required>

<button type="submit">

Create Account

</button>

</form>

</div>

</main>

<?php get_footer(); ?>

