<?php
class Elementor_tiny_tutor_main_dashboard_elementor extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'd-dashboard';
    }

    public function get_title()
    {
        return esc_html__('tiny Dashboard', 'boikotha');
    }

    public function get_icon()
    {
        return 'eicon-slider-album';
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__('Dashboard Item', 'grow-goal'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'dashboard-item',
            [
                'label' => esc_html__('Dashboard Item', 'grow-goal'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'dashboard',
                'options' => [
                    'profile' => esc_html__('My Profile', 'grow-goal'),
                    'lesson' => esc_html__('Enter The Lesson', 'grow-goal'),
                    'learn' => esc_html__('Learn', 'grow-goal'),
                    'book ' => esc_html__('Book A Lesson ', 'grow-goal'),
                    'practice' => esc_html__('Practice', 'grow-goal'),
                    'messages' => esc_html__('Messages', 'grow-goal'),
                    'money' => esc_html__('Money tools', 'grow-goal'),
                ],
            ]
        );

        $this->end_controls_section();
    }

    public function get_categories()
    {
        return ['basic'];
    }

    public function get_keywords()
    {
        return ['dash', 'Dashboard'];
    }

    protected function render()
    {

        $settings = $this->get_settings();
        // Now you can create an instance of the Left_menu class
        $value = $settings['dashboard-item']; // Pass the value you want to check against

        $current_user = wp_get_current_user();
        $roles = $current_user->roles;
        error_log(print_r($roles, true));
        $is_student = in_array('subscriber', $roles) || in_array('student', $roles);
        $is_teacher = in_array('teacher', $roles) || in_array('tutor_instructor', $roles);
        $is_admin = in_array('administrator', $roles);

        if (empty($is_student)) { 
            if ($is_teacher) { 
                echo '<script type="text/javascript">window.location.href = "' . home_url('/teacher-dashboard') . '";</script>';
            } else if ($is_admin) { 
                echo '<script type="text/javascript">window.location.href = "' . admin_url() . '";</script>';
            }
        } 

        // Pagination.
        if (is_user_logged_in()) { ?>
            <div class="main-custom-page">
                <?php
                left_nav_menu_list($value);
                require_once(__DIR__ . '/parts/' . $value . '.php');
                ?>
                <div class="back-button">
                    <a href="<?php echo home_url('/dashboard') ?>" class="back-button">
                        <img src="https://growgoal.online/wp-content/uploads/2024/09/Group-1597883289.png" alt="" class="cutom-sec-right-arrow">
                    </a>
                </div>
            </div>
<?php  } else {
            echo '<script type="text/javascript">window.location.href = "' . home_url('/login') . '";</script>';
            //exit;
        }
    }
}
