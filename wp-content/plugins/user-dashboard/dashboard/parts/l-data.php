<?php
global $wpdb;

// Get course, lesson, and grade IDs from URL
$course_id = isset($_GET['cid']) ? intval($_GET['cid']) : 0;
$lesson_id = isset($_GET['lid']) ? intval($_GET['lid']) : 0;
$grade_id  = isset($_GET['gid']) ? intval($_GET['gid']) : 0;

// Table names (assuming the tables exist from your previous project)
$table_courses = $wpdb->prefix . 'growgoal_courses';
$table_grades = $wpdb->prefix . 'growgoal_grades';
$table_lessons = $wpdb->prefix . 'growgoal_lessons';

// Fetch the lesson details based on the provided lesson_id
$lesson_details = $wpdb->get_row(
    $wpdb->prepare("SELECT lesson_name, lesson_url, practice_url FROM $table_lessons WHERE id = %d", $lesson_id)
);

$lesson_url = $lesson_details ? $lesson_details->lesson_url : '';
$practice_url = $lesson_details ? $lesson_details->practice_url : '';
?>

<div class="container d-flex justify-content-center align-items-center vh-65">


    <div class="link-box p-4">
        <?php

        if (!empty($lesson_url) && !empty($practice_url)) {
        ?>
            <div class="mb-3">
                <label for="lesson-link" class="form-label lesson-label">Lesson:</label>
                <div class="input-group">
                    <input type="text" class="form-control lesson-input" value="<?php echo esc_url($lesson_url); ?>" id="lesson-link" disabled />
                    <button class="btn btn-outline-secondary link-icon" data-copy-target="#lesson-link">
                        <i class="fas fa-clipboard"></i>
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <label for="practice-link" class="form-label practice-label">Practice:</label>
                <div class="input-group">
                    <input type="text" class="form-control practice-input" value="<?php echo esc_url($practice_url); ?>" id="practice-link" disabled />
                    <button class="btn btn-outline-secondary link-icon" data-copy-target="#practice-link">
                        <i class="fas fa-clipboard"></i>
                    </button>
                </div>
            </div>
        <?php

        } else { ?> 
            <div class="h-100 w-100 d-flex align-content-center justify-content-center">
                <p class="m-0 text-white l-data-wrong-text">Something is Missing</p>
            </div>
        <?php 
        }


        ?>


    </div>
</div>

<!-- Toast notification -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
    <div id="copyToast" class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">Copied to clipboard!</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>