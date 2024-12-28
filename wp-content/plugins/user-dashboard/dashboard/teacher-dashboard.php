<?php
class Elementor_tiny_tutor_teacher_dashboard_elementor extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'teacher-dashboard';
    }

    public function get_title()
    {
        return esc_html__('Teacher Dashboard', 'boikotha');
    }

    public function get_icon()
    {
        return 'fab fa-accusoft';
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'style_section',
            [
                'label' => esc_html__('Dashboard Items', 'grow-goal'),
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
                    'dairy' => esc_html__('Diary', 'grow-goal'),
                    'enter-lesson' => esc_html__('Enter the lesson', 'grow-goal'),
                    't-learn' => esc_html__('T-Learn', 'grow-goal'),
                    'l-data' => esc_html__('Lesson Data', 'grow-goal'),
                    't-lesson' => esc_html__('Lesson', 'grow-goal'),
                    't-messages' => esc_html__('Messages', 'grow-goal'),
                    't-students' => esc_html__('List of Students', 'grow-goal'),
                    'schedule' => esc_html__('Schedule', 'grow-goal'),
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
        error_log(message: print_r($roles, true));
        $is_teacher = in_array('teacher', $roles) || in_array('tutor_instructor', $roles);
        $is_student = in_array('subscriber', $roles) || in_array('student', $roles);
        $is_admin = in_array('administrator', $roles);

        if (empty($is_teacher)) { 
            if ($is_student) { 
                echo '<script type="text/javascript">window.location.href = "' . home_url('/dashboard') . '";</script>';
            } else if ($is_admin) { 
                echo '<script type="text/javascript">window.location.href = "' . admin_url() . '";</script>';
            }
        } 

        // Pagination.
        if (is_user_logged_in()) { ?>
            <div class="main-custom-page">
                <?php
                teacher_left_nav_menu_list($value);
                require_once(__DIR__ . '/parts/' . $value . '.php');
                ?>
                <div class="back-button">
                    <a href="<?php echo home_url('/teacher-dashboard') ?>" class="back-button">
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
