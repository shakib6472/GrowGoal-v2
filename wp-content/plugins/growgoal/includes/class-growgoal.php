<?php
 
 class GrowGoal {

    public function __construct($file) {
        
        $this->init();
        register_activation_hook($file, array($this, 'activate'));
        register_deactivation_hook($file, array($this, 'deactivate'));
        add_action('elementor/widgets/register', array($this, 'register_elementor_widget'));
    }

    public function init() {
        // Initialization code here
        error_log('GrowGoal class initialized');

    }

    public function activate() {
        // Activation code here
        error_log('Activated');
    }

    public function deactivate() {
        // Deactivation code here
        error_log('Deactivated');
    }

    // another class for elementor widget
    public function register_elementor_widget($widgets_manager) {
        // Elementor widget registration code here
        require_once GROWGOAL_PLUGIN_DIR . 'elementor/login-form.php';
        require_once GROWGOAL_PLUGIN_DIR . 'elementor/student-registration.php';
        require_once GROWGOAL_PLUGIN_DIR . 'elementor/st-dashboard.php';
        
        $widgets_manager->register( new \GrowGoal_login_form() );
        $widgets_manager->register( new \GrowGoal_student_registration() );
        $widgets_manager->register( new \GrowGoal_student_dashboard() );

    }
}
