<?php
global $wpdb;
$table_courses = $wpdb->prefix . 'growgoal_courses';
$courses = $wpdb->get_results("SELECT id, course_name FROM $table_courses");

?>

<div class="base w-100 vh-75 d-flex align-items-center justify-content-center">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="l-container">
        <div class="choose course active">
          <div class="choose-con">
            <p class="m-0 p-0 course-name">Choose the course</p>
            <i class="fas fa-minus"></i>
          </div>

          <div class="d-flex justify-content-center align-items-center">
            <div class="course-box">
              <span class="close-btn">&times;</span>

              <!-- Dynamically display courses from database -->
              <?php if (!empty($courses)): ?>
                <?php foreach ($courses as $course): ?>
                  <div class="item course-item" data-id="<?php echo esc_attr($course->id); ?>">
                    <?php echo esc_html($course->course_name); ?>
                  </div>
                <?php endforeach; ?>
              <?php else: ?>
                <p>No courses available.</p>
              <?php endif; ?>

            </div>
          </div>
        </div>

        <!-- Grade and lesson sections will be dynamically filled by AJAX -->
        <div class="choose grade">
          <div class="choose-con">
            <p class="m-0 p-0 grade-name">Choose the Grade</p>
            <i class="fas fa-plus"></i>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <div class="course-box">
              <span class="close-btn">&times;</span>
              <p class="grade-notice notice m-0">Please Select Course First</p>
            </div>
          </div>
        </div>

        <div class="choose lesson">
          <div class="choose-con">
            <p class="m-0 p-0 lesson-name">Choose the Lesson</p>
            <i class="fas fa-plus"></i>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <div class="course-box">
              <span class="close-btn">&times;</span>
              <p class="lesson-notice notice m-0">Please Select Grade First</p>
            </div>
          </div>
        </div>

        <div class="take">
          <button class="btn-take-lesson">Take Me To The Lesson</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
