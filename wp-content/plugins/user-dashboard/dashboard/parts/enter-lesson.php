<div class="custom-pageone-sec-container">
    <div class="custom-page-two">
        <!-- ----Left Container -->
        <div class="custom-sec-left-container">
            <div class="custom-sec-clock-box border">
                <div class="sec-clock-img-clock-container">
                    <img src="https://growgoal.online/wp-content/uploads/2024/09/Mask-group-6.png" alt="" class="sec-clock-img">
                    <h4 class="sec-clock">Clock :</h4>

                </div>
                <h2 class="custom-sec-current-time">8:00AM</h2>
                <h2 class="custom-sec-current-date">Monday,3rd October,2022</h2>
            </div>
            <div class="custom-sec-roting-box border">
                <div class="sec-clock-img-clock-container">
                    <img src="https://growgoal.online/wp-content/uploads/2024/09/Group-40.png" alt="" class="sec-clock-img">
                    <h4 class="sec-clock">Daily Reminder:</h4>

                </div>
                <h4 class="custom-sec-roting-heading">The Price is Hard<br> Work and Dedication</h4>
            </div>

        </div>
        <!-- -------Right Container------- -->
        <div class="custom-sec-right-container border">
            <h2 class="custom-sec-right-main-heading">Enter Your Lesson</h2>

            <div class="custom-sec-right-lessong-container">
                <?php
                global $wpdb;
                $user_id = get_current_user_id();
                $teacher_id = get_user_meta($user_id, 'teacher_id', true);
                $table_name = $wpdb->prefix . 'teacher_bookings';
                $query = $wpdb->prepare("SELECT * FROM $table_name WHERE  teacher_id = %d",  $teacher_id);
                $results = $wpdb->get_results($query);
                $total_class = count($results); 
                $page = isset($_GET['ln']) ? $_GET['ln'] : 1;
                $lessons_per_page = 8;
                $start_lesson = ($page * $lessons_per_page) - 7;
                $end_lesson = min($page * $lessons_per_page, $total_class);
                $start = 0;

                foreach ($results as $result) {

                    if ($start < $end_lesson) {
                        error_log('Start Number :' . $start);
                        $start++; 
                ?>
                        <div class="custom-sec-right-lesson">
                            <a href="<?php echo home_url('/t-learn/?l=' . $result->lesson_name . '&s=' . $result->student_id); ?>">
                                <img src="https://growgoal.online/wp-content/uploads/2024/09/2201549.png" alt="" class="lesson-book-img booked">
                                <p class="profile-student-name"><?php echo esc_html(get_userdata($result->student_id)->first_name . ' ' . get_userdata($result->student_id)->last_name); ?></p>
                                <h6 class="lesson-undername">Lesson <?php echo $result->lesson_name; ?></h6>
                            </a>
                        </div>
                <?php

                    } else { 
                        $start++; 
                        continue;
                    }
                }
                ?>
            </div>

            <div class="custom-sec-pagi">
                <?php if ($page > 1) { ?>
                    <a href="?ln=<?php echo $page - 1; ?>">Prev</a>
                <?php } ?>

                <?php if ($end_lesson < $total_class) { ?>
                    <a href="?ln=<?php echo $page + 1; ?>">Next</a>
                <?php } ?>
            </div>



        </div>

    </div>
</div>