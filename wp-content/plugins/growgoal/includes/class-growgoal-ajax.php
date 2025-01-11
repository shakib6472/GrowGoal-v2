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
        add_action('wp_ajax_nopriv_growgoal_student_registration', array($this, 'growgoal_student_registration'));
        add_action('wp_ajax_growgoal_student_registration', array($this, 'growgoal_student_registration'));
    }

    // Verify login
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

    // student registration
    public function growgoal_student_registration()
    {
        error_log('growgoal_student_registration:' . print_r($_POST, true));
        // check is nonce is valid
        if (! wp_verify_nonce($_POST['security'], 'growgoal_nonce')) {
            wp_send_json_error(array('message' => 'Nonce verification failed'));
        } else {
            error_log('growgoal_verify_login: nonce verified');
        }
        // Get the POST data
        $first_name = isset($_POST['firstName']) ? sanitize_text_field($_POST['firstName']) : '';
        $last_name = isset($_POST['lastName']) ? sanitize_text_field($_POST['lastName']) : '';
        $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
        $dob = isset($_POST['dob']) ? sanitize_text_field($_POST['dob']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';


        // Attempt to create the user
        $user_id = wp_create_user($email, $password, $email);
        if (is_wp_error($user_id)) {
            wp_send_json_error(array('message' => $user_id->get_error_message()));
        }
        // Update the user meta
        update_user_meta($user_id, 'first_name', $first_name);
        update_user_meta($user_id, 'last_name', $last_name);
        update_user_meta($user_id, 'dob', $dob);

        // Attempt to sign in the user
        $user = wp_signon(array(
            'user_login'    => $email,
            'user_password' => $password,
            'remember'      => true,
        ));

        if (is_wp_error($user)) {
            wp_send_json_error(array('message' => $user->get_error_message()));
        } else {
            wp_send_json_success(array('message' => 'Registration successful'));
        }
        die();
    }
}

new GrowGoal_Ajax();
