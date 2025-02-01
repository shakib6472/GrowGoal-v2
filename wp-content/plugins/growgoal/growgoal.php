<?php /*
 * Plugin Name:       GrowGoal
 * Plugin URI:        https://facebook.com/shakib6472/
 * Description:       This is the growgoal websites Custom Plugin. All features are came from here.
 * Version:           1.1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Shakib Shown
 * Author URI:        https://facebook.com/shakib6472/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       growgoal
 * Domain Path:       /languages
 */
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

// Define GROWGOAL_PLUGIN_FILE & URI.
define('GROWGOAL_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('GROWGOAL_PLUGIN_URL', plugin_dir_url(__FILE__));

// Include the main GrowGoal class.
if (!class_exists('GrowGoal')) {
	include_once GROWGOAL_PLUGIN_DIR . 'includes/class-growgoal.php';
	//ajax handler
	include_once GROWGOAL_PLUGIN_DIR . 'includes/class-growgoal-ajax.php';
}
// add style and script
function growgoal_enqueue_scripts()
{
	wp_enqueue_style('growgoal-frontend-style', GROWGOAL_PLUGIN_URL . 'elementor/assets/css/frontend.css', array(), '1.0.0', 'all');
	wp_enqueue_style('growgoal-style', GROWGOAL_PLUGIN_URL . 'elementor/assets/css/styles.css', array(), '1.0.0', 'all');
	wp_enqueue_style('growgoal-tailwind-style', GROWGOAL_PLUGIN_URL . 'elementor/assets/css/tailwind.css', array(), '1.0.0', 'all');
	wp_enqueue_style('growgoal-fontowsome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('growgoal-fontowsomea-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '1.0.0', 'all');

	wp_enqueue_script('jquery');
	wp_enqueue_script('growgoal-fullcalender-script', 'https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js', array(), '1.0.0', true);
	wp_enqueue_script('growgoal-lottie-script', 'https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs', array(), '2.7.12', false);
	wp_enqueue_script('growgoal-chart-script', 'https://cdn.jsdelivr.net/npm/chart.js', array(), '1.0.0', true);
	wp_enqueue_script('growgoal-functions-script', GROWGOAL_PLUGIN_URL . 'elementor/assets/js/functions.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('growgoal-script', GROWGOAL_PLUGIN_URL . 'elementor/assets/js/growgoal.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('growgoal-tail-script', GROWGOAL_PLUGIN_URL . 'elementor/assets/js/script.js', array('jquery'), '1.0.0', true);
	// localizing script
	wp_localize_script('growgoal-script', 'growgoal_ajax', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('growgoal_nonce'),
		'home_url' => home_url(),
		'admin_url' => admin_url(),
		'logout_url' => wp_logout_url(home_url()),
	));
}
add_action('wp_enqueue_scripts', 'growgoal_enqueue_scripts');

new GrowGoal(__FILE__);




