<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class GrowGoal_student_registration extends \Elementor\Widget_Base {

    public function get_name() {
        return 'growgoal_student_registration';
    }

    public function get_title() {
        return __( 'GrowGoal ST Registration', 'growgoal' );
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
        ?>
        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
        <?php
        include GROWGOAL_PLUGIN_DIR . 'elementor/pages/student/st-sign-up.php';
    }

}
