<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class GrowGoal_login_form extends \Elementor\Widget_Base {

    public function get_name() {
        return 'growgoal_login_form';
    }

    public function get_title() {
        return __( 'GrowGoal Login Form', 'growgoal' );
    }

    public function get_icon() {
        return 'eicon-lock-user';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    protected function _register_controls() {
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        include GROWGOAL_PLUGIN_DIR . 'elementor/pages/student/sign-in.php';
    }

}
