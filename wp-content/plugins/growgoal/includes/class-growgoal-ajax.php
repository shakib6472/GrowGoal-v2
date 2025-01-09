<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class GrowGoal_Ajax
{

    public function __construct()
    {
        add_action('wp_ajax_nopriv_growgoal_verify_login', array($this, 'growgoal_verify_login'));
        add_action('wp_ajax_growgoal_verify_login', array($this, 'growgoal_verify_login'));
    }

    public function growgoal_verify_login()
    {
        error_log('growgoal_verify_login:' . print_r($_POST, true));
        // check is nonce is valid
        if (! wp_verify_nonce($_POST['security'], 'growgoal_nonce')) {
            wp_send_json_error(array('message' => 'Nonce verification failed'));
        } else {
            error_log('growgoal_verify_login: nonce verified');
        }
        // Get the POST data
        $username = isset($_POST['username']) ? sanitize_text_field($_POST['username']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';

        // Attempt to sign in the user
        $user = wp_signon(array(
            'user_login'    => $username,
            'user_password' => $password,
            'remember'      => true,
        ));

        if (is_wp_error($user)) {
            wp_send_json_error(array('message' => $user->get_error_message()));
        } else {
            wp_send_json_success(array('message' => 'Login successful'));
        }
    }
}

new GrowGoal_Ajax();
