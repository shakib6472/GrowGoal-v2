<?php
function teacher_left_nav_menu_list($value)
{

    // Get current logged-in user information
    $current_user = wp_get_current_user();

    // Get user's first name
    $user_first_name = $current_user->first_name;

    // Get user's role
    $user_roles = $current_user->roles;
    $user_role_display = !empty($user_roles) ? ucfirst($user_roles[0]) : '';

    // Get user's avatar, fallback to placeholder if not found
    $user_avatar = get_user_meta($current_user->ID, 'profile_picture', true);
    $placeholder_avatar = 'https://growgoal.online/wp-content/uploads/2024/09/placeholder.png'; // Placeholder image URL

    // If no avatar is found, use the placeholder image
    if (!$user_avatar) {
        $user_avatar = '<img src="' . $placeholder_avatar . '" class="custom-profile" alt="Profile">';
    } else {
        $user_avatar = '<img src="' . $user_avatar . '" class="custom-profile" alt="Profile">';
    }
?>


    <div class="custom-nav-bar custom-background">
        <div class="custom-nav-child-img">
            <div class="custom-child-images <?php if ('dairy' == $value) {
                                                echo 'active';
                                            } ?>">
                <a href="<?php echo home_url('/teacher-dashboard'); ?>">
                    <?php if ('dairy' == $value) { ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/profile.png" alt="">
                    <?php } else {
                    ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/profile-na-.png" alt="">

                    <?php } ?>
                    <h3 class="custom-lesson-name">Dairy</h3>
                </a>
            </div>
            <div class="custom-child-images <?php if ('enter-lesson' == $value || 't-learn' == $value) {
                                                echo 'active';
                                            } ?>">
                <a href="<?php echo home_url('/teacher-dashboard/enter-lesson'); ?>">
                    <?php if ('enter-lesson' == $value || 't-learn' == $value) { ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/enter-the-lesson.png" alt="">
                    <?php } else {
                    ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/enter-the-lesson-na.png" alt="">

                    <?php } ?>
                    <h3 class="custom-lesson-name">Enter The Lesson</h3>
                </a>
            </div>
            <div class="custom-child-images <?php if ('t-lesson' == $value ) {
                                                echo 'active';
                                            } ?>">
                <a href="<?php echo home_url('/teacher-dashboard/lesson'); ?>">
                    <?php if ('t-lesson' == $value) { ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/enter-the-lesson.png" alt="">
                    <?php } else {
                    ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/enter-the-lesson-na.png" alt="">

                    <?php } ?>
                    <h3 class="custom-lesson-name">Lesson</h3>
                </a>
            </div>

            <div class="custom-child-images <?php if ('t-messages' == $value) {
                                                echo 'active';
                                            } ?>"><a href="<?php echo home_url('/teacher-dashboard/messages'); ?>">
                    <?php if ('t-messages' == $value) { ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/message.png" alt="">
                    <?php } else {
                    ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/message-na.png" alt="">

                    <?php } ?>
                    <h3 class="custom-lesson-name">Messages</h3>
                </a>
            </div>
            <div class="custom-child-images <?php if ('schedule' == $value) {
                                                echo 'active';
                                            } ?>"><a href="<?php echo home_url('/teacher-dashboard/schedule'); ?>">
                    <?php if ('schedule' == $value) { ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/money-na.png" alt="">
                    <?php } else {
                    ?>
                        <img src="https://growgoal.online/wp-content/uploads/2024/10/money-na.png" alt="">

                    <?php } ?>
                    <h3 class="custom-lesson-name">Schedule</h3>
                </a>
            </div>
        </div>
        <div class="custom-nav-child-profile">
            <div class="custom-profile-one">
                <i class="fas fa-bell custom-bell"></i>
                <?php echo $user_avatar; // Display user's avatar or placeholder 
                ?>
            </div>
            <div class="custom-profile-two">
                <h2 class="custom-student-name"><?php echo $user_first_name ? $user_first_name : 'Guest'; // Display user's first name or "Guest" 
                                                ?></h2>
                <h4 class="custom-student"><?php echo $user_role_display ? $user_role_display : 'Student'; // Display user's role or "Student" 
                                             ?></h4>
            </div>
        </div>
        <div class="custom-nav-child-logout">
            <div class="custom-logout-button-container">
                <button class="custom-logout-button">
                    Logout
                    <i class="fas fa-right-long"></i>
                </button>
            </div>

        </div>
    </div>







<?php
}
