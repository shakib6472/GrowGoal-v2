<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class GrowGoal_student_dashboard extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'growgoal_student_dashboard';
    }

    public function get_title()
    {
        return __('GrowGoal ST Dashboard', 'growgoal');
    }

    public function get_icon()
    {
        return 'eicon-dashboard';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {
        // register controls with select for dashbaord pages
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'growgoal'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'dashboard_page',
            [
                'label' => __('Select Dashboard Page', 'growgoal'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'lesson' => __('Dashboard', 'growgoal'),
                    'session' => __('Session', 'growgoal'),
                    'scheduler' => __('Scheduler', 'growgoal'),
                    'message' => __('Message', 'growgoal'),
                    'goals' => __('Goals', 'growgoal'),
                    'progress-tracker' => __('Progress Tracker', 'growgoal'),
                    'practice-zone' => __('Practice Zone', 'growgoal'),
                    'practice-details' => __('Practice Details', 'growgoal'),
                ],
                'default' => 'lesson',
            ]
        );
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        include GROWGOAL_PLUGIN_DIR . 'elementor/dashboard/parts/menu.php'; 
        ?>
        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
<?php
        include GROWGOAL_PLUGIN_DIR . 'elementor/dashboard/parts/header.php';
        include GROWGOAL_PLUGIN_DIR . "elementor/dashboard/{$settings['dashboard_page']}.php";
    }
}
