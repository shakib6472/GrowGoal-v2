<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class GrowGoal_teacher_dashboard extends \Elementor\Widget_Base {

    public function get_name() {
        return 'growgoal_teacher_dashboard';
    }

    public function get_title() {
        return __( 'GrowGoal T Dashboard', 'growgoal' );
    }

    public function get_icon() {
        return 'eicon-dashboard';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    protected function _register_controls() {
        // register controls with select for dashbaord pages
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'growgoal' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'dashboard_page',
            [
                'label' => __( 'Select Dashboard Page', 'growgoal' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [ 
                    'lesson' => __( 'Dashboard', 'growgoal' ),
                    'courses-materials' => __( 'Course Metarial', 'growgoal' ),
                    'calender' => __( 'Calender', 'growgoal' ),
                    'diary' => __( 'Diary', 'growgoal' ),
                    'messages' => __( 'Messages', 'growgoal' ),
                    'scheduler' => __( 'Scheduler', 'growgoal' ),
                    'session' => __( 'Session', 'growgoal' ),
                    'settings' => __( 'Settings', 'growgoal' ),
                    'vault' => __( 'Vault', 'growgoal' ),
                ],
                'default' => 'lesson',
            ]
        );
        
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
        <?php
        include GROWGOAL_PLUGIN_DIR . 'elementor/t-dashboard/parts/header.php';
        include GROWGOAL_PLUGIN_DIR . "elementor/t-dashboard/{$settings['dashboard_page']}.php";
        
    }

}
