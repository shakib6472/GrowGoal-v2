<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class GrowGoal_login_form extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'growgoal_login_form';
    }

    public function get_title()
    {
        return __('GrowGoal Login Form', 'growgoal');
    }

    public function get_icon()
    {
        return 'eicon-lock-user';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'growgoal'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'gg_forms',
            [
                'label' => __('Select Form', 'growgoal'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'sign-in' => __('Login', 'growgoal'),
                    'st-sign-up' => __('Student Signup', 'growgoal'),

                ],
                'default' => 'login',
            ]
        );
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
<?php
        include GROWGOAL_PLUGIN_DIR . "elementor/forms/{$settings['gg_forms']}.php";
    }
}
