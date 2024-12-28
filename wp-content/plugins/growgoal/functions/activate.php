<?php
// Activation function
function growgoal_activation_function()
{
    // Your activation code here
    // For example, create database tables or set default options
    global $wpdb;
    // Table for teacher availability
    $t_table_name = $wpdb->prefix . 'teacher_availability';
    $ta_table_name = $wpdb->prefix . 'teacher_availability_slots';
    $tb_table_name = $wpdb->prefix . 'teacher_bookings';
    $table_courses = $wpdb->prefix . 'growgoal_courses';
    $table_grades  = $wpdb->prefix . 'growgoal_grades';
    $table_lessons = $wpdb->prefix . 'growgoal_lessons';


    $t_sql = "CREATE TABLE $t_table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        teacher_id mediumint(9) NOT NULL,
        unavailable_from datetime NOT NULL,
        unavailable_to datetime NOT NULL,
        PRIMARY KEY (id)
    );";
    // Table for teacher availability
    $ta_sql = "CREATE TABLE $ta_table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        teacher_id mediumint(9) NOT NULL,
        unavailable_date datetime NOT NULL,
        time_slot time NOT NULL,
        PRIMARY KEY (id)
    );";
    // Table for bookings
    $tb_sql = "CREATE TABLE $tb_table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        teacher_id mediumint(9) NOT NULL,
        student_id mediumint(9) NOT NULL,
        booking_time datetime NOT NULL,
        booking_reason text NOT NULL,
        booking_type text NOT NULL,
        lesson_name text NOT NULL,
        status text NOT NULL,
        zoom text NOT NULL,
        record text NOT NULL,
        practice text NOT NULL,
        PRIMARY KEY (id)
    );";

    // Charset and collation setup
    // SQL for courses table
    $sql_courses = "CREATE TABLE $table_courses (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        course_name varchar(255) NOT NULL,
        PRIMARY KEY  (id)
    ) ;";

    // SQL for grades table
    $sql_grades = "CREATE TABLE $table_grades (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        grade_name varchar(255) NOT NULL,
        course_id mediumint(9) NOT NULL,
        PRIMARY KEY  (id),
        FOREIGN KEY (course_id) REFERENCES $table_courses(id) ON DELETE CASCADE
    ) ;";

    // SQL for lessons table
    $sql_lessons = "CREATE TABLE $table_lessons (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        lesson_name varchar(255) NOT NULL,
        lesson_url varchar(255) NOT NULL,
        practice_url varchar(255) NOT NULL,
        grade_id mediumint(9) NOT NULL,
        PRIMARY KEY  (id),
        FOREIGN KEY (grade_id) REFERENCES $table_grades(id) ON DELETE CASCADE
    ) ;";


    // Include the dbDelta function to safely create/update the table
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    // Run the SQL queries to create the tables
    dbDelta($t_sql);
    dbDelta($ta_sql);
    dbDelta($tb_sql);
    dbDelta($sql_courses);
    dbDelta($sql_grades);
    dbDelta($sql_lessons);
}

// Hook to add admin menu
add_action('admin_menu', 'growgoal_add_admin_menu');

function growgoal_add_admin_menu()
{
    add_menu_page(
        __('GrowGoal', 'growgoal'), // Page Title
        'GrowGoal', // Menu Title
        'manage_options', // Capability
        'growgoal_admin', // Menu Slug
        'growgoal_view_all', // Callback function for the main page
        'dashicons-welcome-learn-more', // Icon
        6 // Position in the admin menu
    );

    // Submenus
    add_submenu_page(
        'growgoal_admin', // Parent slug
        __('View All', 'growgoal'), // Page Title
        'View All', // Menu Title
        'manage_options', // Capability
        'growgoal_view_all', // Menu slug
        'growgoal_view_all' // Callback function
    );
    // Add "Entry Data" submenu page
    add_submenu_page(
        'growgoal_admin',
        __('Entry Data', 'growgoal'),
        'Entry Data',
        'manage_options',
        'growgoal_entry_data',
        'growgoal_entry_data' // Callback function for Entry Data form
    );


    add_submenu_page(
        'growgoal_admin',
        __('Create a Course', 'growgoal'),
        'Create a Course',
        'manage_options',
        'growgoal_create_course',
        'growgoal_create_course' // Callback function
    );

    add_submenu_page(
        'growgoal_admin',
        __('Create a Grade', 'growgoal'),
        'Create a Grade',
        'manage_options',
        'growgoal_create_grade',
        'growgoal_create_grade' // Callback function
    );

    add_submenu_page(
        'growgoal_admin',
        __('Create a Lesson', 'growgoal'),
        'Create a Lesson',
        'manage_options',
        'growgoal_create_lesson',
        'growgoal_create_lesson' // Callback function
    );
}

// Callback for 'View All' page
function growgoal_view_all()
{
    global $wpdb;

    // Table names
    $table_courses = $wpdb->prefix . 'growgoal_courses';
    $table_grades = $wpdb->prefix . 'growgoal_grades';
    $table_lessons = $wpdb->prefix . 'growgoal_lessons';

    // Query to get all courses, grades, and lessons
    $results = $wpdb->get_results("
        SELECT c.course_name, g.grade_name, l.lesson_name, l.lesson_url, l.practice_url, l.id as lesson_id
        FROM $table_lessons l
        INNER JOIN $table_grades g ON l.grade_id = g.id
        INNER JOIN $table_courses c ON g.course_id = c.id
    ");

    // Display table header
    echo '<h1>' . __('View All Courses, Grades, and Lessons', 'growgoal') . '</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead>
            <tr>
                <th>' . __('Course Name', 'growgoal') . '</th>
                <th>' . __('Grade Name', 'growgoal') . '</th>
                <th>' . __('Lesson Name', 'growgoal') . '</th>
                <th>' . __('Lesson URL', 'growgoal') . '</th>
                <th>' . __('Practice URL', 'growgoal') . '</th>
                <th>' . __('Action', 'growgoal') . '</th>
            </tr>
          </thead>';
    echo '<tbody>';

    if (!empty($results)) {
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->course_name) . '</td>';
            echo '<td>' . esc_html($row->grade_name) . '</td>';
            echo '<td>' . esc_html($row->lesson_name) . '</td>';
            echo '<td><a href="' . esc_url($row->lesson_url) . '" target="_blank">' . esc_html($row->lesson_url) . '</a></td>';
            echo '<td><a href="' . esc_url($row->practice_url) . '" target="_blank">' . esc_html($row->practice_url) . '</a></td>';
            echo '<td>
                    <a href="?page=growgoal_edit_lesson&id=' . intval($row->lesson_id) . '" class="button button-primary">' . __('Edit', 'growgoal') . '</a>
                    <a href="?page=growgoal_view_all&delete_id=' . intval($row->lesson_id) . '" class="button button-secondary" onclick="return confirm(\'' . __('Are you sure you want to delete this lesson?', 'growgoal') . '\')">' . __('Delete', 'growgoal') . '</a>
                  </td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="6">' . __('No lessons found', 'growgoal') . '</td></tr>';
    }

    echo '</tbody>';
    echo '</table>';

    // Handle deletion
    if (isset($_GET['delete_id'])) {
        $lesson_id = intval($_GET['delete_id']);
        $wpdb->delete($table_lessons, ['id' => $lesson_id]);
        echo '<script>location.href="?page=growgoal_view_all";</script>';
        exit;
    }
}

function growgoal_entry_data()
{
    global $wpdb;

    // Table names
    $table_courses = $wpdb->prefix . 'growgoal_courses';
    $table_grades = $wpdb->prefix . 'growgoal_grades';
    $table_lessons = $wpdb->prefix . 'growgoal_lessons';

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $course_id = intval($_POST['course_id']);
        $grade_id = intval($_POST['grade_id']);
        $lesson_id = intval($_POST['lesson_id']);
        $lesson_url = sanitize_text_field($_POST['lesson_url']);
        $practice_url = sanitize_text_field($_POST['practice_url']);

        // Update the lesson with the new URLs
        $wpdb->update(
            $table_lessons,
            [
                'lesson_url' => $lesson_url,
                'practice_url' => $practice_url
            ],
            ['id' => $lesson_id]
        );

        // Show success message
        echo '<div class="notice notice-success is-dismissible">
                <p>' . __('Lesson URLs updated successfully.', 'growgoal') . '</p>
              </div>';
    }

    // Fetch all courses, grades, and lessons
    $courses = $wpdb->get_results("SELECT id, course_name FROM $table_courses");
    $grades = $wpdb->get_results("SELECT id, grade_name FROM $table_grades");
    $lessons = $wpdb->get_results("SELECT id, lesson_name FROM $table_lessons");

    // Now we'll output the HTML for the form:
?>
    <h1><?php _e('Enter Lesson and Practice URLs', 'growgoal'); ?></h1>
    <form method="POST" action="">

        <label for="course_id"><?php _e('Select Course', 'growgoal'); ?></label>
        <select name="course_id" id="course_id">
            <?php foreach ($courses as $course) : ?>
                <option value="<?php echo intval($course->id); ?>"><?php echo esc_html($course->course_name); ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="grade_id"><?php _e('Select Grade', 'growgoal'); ?></label>
        <select name="grade_id" id="grade_id">
            <?php foreach ($grades as $grade) : ?>
                <option value="<?php echo intval($grade->id); ?>"><?php echo esc_html($grade->grade_name); ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="lesson_id"><?php _e('Select Lesson', 'growgoal'); ?></label>
        <select name="lesson_id" id="lesson_id">
            <?php foreach ($lessons as $lesson) : ?>
                <option value="<?php echo intval($lesson->id); ?>"><?php echo esc_html($lesson->lesson_name); ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="lesson_url"><?php _e('Lesson URL', 'growgoal'); ?></label>
        <input type="url" name="lesson_url" id="lesson_url" required><br><br>

        <label for="practice_url"><?php _e('Practice URL', 'growgoal'); ?></label>
        <input type="url" name="practice_url" id="practice_url" required><br><br>

        <input type="submit" class="button button-primary" value="<?php _e('Update URLs', 'growgoal'); ?>">
    </form>
<?php
}

// Callback for 'Create a Course' page
function growgoal_create_course() {
    global $wpdb;
    $table_courses = $wpdb->prefix . 'growgoal_courses';

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $course_name = sanitize_text_field($_POST['course_name']);

        // Insert into the database
        $wpdb->insert($table_courses, ['course_name' => $course_name]);

        // Display success message
        echo '<div class="notice notice-success is-dismissible">
                <p>' . __('New course added successfully.', 'growgoal') . '</p>
              </div>';
    }

    // Display the form
    ?>
    <h1><?php _e('Create a New Course', 'growgoal'); ?></h1>
    <form method="POST" action="">
        <label for="course_name"><?php _e('Course Name', 'growgoal'); ?></label>
        <input type="text" name="course_name" id="course_name" required><br><br>
        <input type="submit" class="button button-primary" value="<?php _e('Add Course', 'growgoal'); ?>">
    </form>
    <?php
}

// Callback for 'Create a Grade' page
function growgoal_create_grade() {
    global $wpdb;
    $table_grades = $wpdb->prefix . 'growgoal_grades';
    $table_courses = $wpdb->prefix . 'growgoal_courses';

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $grade_name = sanitize_text_field($_POST['grade_name']);
        $course_id = intval($_POST['course_id']);

        // Insert into the database
        $wpdb->insert($table_grades, ['grade_name' => $grade_name, 'course_id' => $course_id]);

        // Display success message
        echo '<div class="notice notice-success is-dismissible">
                <p>' . __('New grade added successfully.', 'growgoal') . '</p>
              </div>';
    }

    // Fetch all courses
    $courses = $wpdb->get_results("SELECT id, course_name FROM $table_courses");

    // Display the form
    ?>
    <h1><?php _e('Create a New Grade', 'growgoal'); ?></h1>
    <form method="POST" action="">
        <label for="course_id"><?php _e('Select Course', 'growgoal'); ?></label>
        <select name="course_id" id="course_id" required>
            <?php foreach ($courses as $course) : ?>
                <option value="<?php echo intval($course->id); ?>"><?php echo esc_html($course->course_name); ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="grade_name"><?php _e('Grade Name', 'growgoal'); ?></label>
        <input type="text" name="grade_name" id="grade_name" required><br><br>

        <input type="submit" class="button button-primary" value="<?php _e('Add Grade', 'growgoal'); ?>">
    </form>
    <?php
}


// Callback for 'Create a Lesson' page
function growgoal_create_lesson() {
    global $wpdb;
    $table_lessons = $wpdb->prefix . 'growgoal_lessons';
    $table_grades = $wpdb->prefix . 'growgoal_grades';

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $lesson_name = sanitize_text_field($_POST['lesson_name']);
        $lesson_url = sanitize_text_field($_POST['lesson_url']);
        $practice_url = sanitize_text_field($_POST['practice_url']);
        $grade_id = intval($_POST['grade_id']);

        // Insert into the database
        $wpdb->insert($table_lessons, [
            'lesson_name' => $lesson_name,
            'lesson_url' => $lesson_url,
            'practice_url' => $practice_url,
            'grade_id' => $grade_id
        ]);

        // Display success message
        echo '<div class="notice notice-success is-dismissible">
                <p>' . __('New lesson added successfully.', 'growgoal') . '</p>
              </div>';
    }

    // Fetch all grades
    $grades = $wpdb->get_results("SELECT id, grade_name FROM $table_grades");

    // Display the form
    ?>
    <h1><?php _e('Create a New Lesson', 'growgoal'); ?></h1>
    <form method="POST" action="">
        <label for="grade_id"><?php _e('Select Grade', 'growgoal'); ?></label>
        <select name="grade_id" id="grade_id" required>
            <?php foreach ($grades as $grade) : ?>
                <option value="<?php echo intval($grade->id); ?>"><?php echo esc_html($grade->grade_name); ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="lesson_name"><?php _e('Lesson Name', 'growgoal'); ?></label>
        <input type="text" name="lesson_name" id="lesson_name" required><br><br>

        <label for="lesson_url"><?php _e('Lesson URL', 'growgoal'); ?></label>
        <input type="url" name="lesson_url" id="lesson_url" required><br><br>

        <label for="practice_url"><?php _e('Practice URL', 'growgoal'); ?></label>
        <input type="url" name="practice_url" id="practice_url" required><br><br>

        <input type="submit" class="button button-primary" value="<?php _e('Add Lesson', 'growgoal'); ?>">
    </form>
    <?php
}





// Deactivation function
function growgoal_deactivation_function()
{
    // Your deactivation code here
    // For example, delete database tables or clean up options
}

// Add admin menu
add_action('admin_menu', 'tb_admin_menu');
function tb_admin_menu()
{
    add_menu_page('Teacher Availability', 'Teacher Availability', 'manage_options', 'teacher-availability', 'tb_admin_page');
}

function tb_admin_page()
{
    global $wpdb;
    $teachers = get_posts(array('post_type' => 'teacher', 'numberposts' => -1));

    // Handle form submission
    if (isset($_POST['teacher_id']) && isset($_POST['unavailable_from']) && isset($_POST['unavailable_to'])) {
        $teacher_id = intval($_POST['teacher_id']);
        $unavailable_from = sanitize_text_field($_POST['unavailable_from']);
        $unavailable_to = sanitize_text_field($_POST['unavailable_to']);

        $wpdb->insert(
            $wpdb->prefix . 'teacher_availability',
            array(
                'teacher_id' => $teacher_id,
                'unavailable_from' => $unavailable_from,
                'unavailable_to' => $unavailable_to
            )
        );

        echo '<div class="updated"><p>Availability updated.</p></div>';
    }

?>
    <div class="wrap">
        <h1>Set Teacher Unavailability</h1>
        <form method="post" action="">
            <label for="teacher_id">Teacher:</label>
            <select id="teacher_id" name="teacher_id">
                <?php foreach ($teachers as $teacher) : ?>
                    <option value="<?php echo $teacher->ID; ?>"><?php echo $teacher->post_title; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label for="unavailable_from">Unavailable From:</label>
            <input type="datetime-local" id="unavailable_from" name="unavailable_from">
            <br>
            <label for="unavailable_to">Unavailable To:</label>
            <input type="datetime-local" id="unavailable_to" name="unavailable_to">
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
<?php
}


/*============================
 * Shortcode - Check 
 * ==========================*/

add_shortcode('teacher_booking', 'tb_booking_shortcode');

function tb_booking_shortcode()
{
    if (! is_user_logged_in()) {
        return '<p>You need to be logged in to book a teacher.</p>';
    }

    global $wpdb;
    $teachers = get_posts(array('post_type' => 'teacher', 'numberposts' => -1));

    // Handle booking form submission
    if (isset($_POST['teacher_id']) && isset($_POST['booking_time'])) {
        $teacher_id = intval($_POST['teacher_id']);
        $student_id = get_current_user_id();
        $booking_time = sanitize_text_field($_POST['booking_time']);

        // Check availability
        $unavailable = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->prefix}teacher_availability WHERE teacher_id = %d AND %s BETWEEN unavailable_from AND unavailable_to",
            $teacher_id,
            $booking_time
        ));

        $booked = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->prefix}teacher_bookings WHERE teacher_id = %d AND booking_time = %s",
            $teacher_id,
            $booking_time
        ));

        if ($unavailable || $booked) {
            echo '<p>Selected time slot is not available.</p>';
        } else {
            $wpdb->insert(
                $wpdb->prefix . 'teacher_bookings',
                array(
                    'teacher_id' => $teacher_id,
                    'student_id' => $student_id,
                    'booking_time' => $booking_time,
                    'booking_reason' => 'Booking'
                )
            );

            echo '<p>Booking successful.</p>';
        }
    }

?>
    <form method="post" action="">
        <label for="teacher_id">Teacher:</label>
        <select id="teacher_id" name="teacher_id">
            <?php foreach ($teachers as $teacher) : ?>
                <option value="<?php echo $teacher->ID; ?>"><?php echo $teacher->post_title; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="booking_time">Booking Time:</label>
        <input type="datetime-local" id="booking_time" name="booking_time">
        <br>
        <input type="submit" value="Book">
    </form>
<?php
}

//Create Message Post type
function create_teacher_student_message_cpt()
{
    $labels = array(
        'name'                  => _x('Messages', 'Post type general name', 'growgoal'),
        'singular_name'         => _x('Message', 'Post type singular name', 'growgoal'),
        'menu_name'             => _x('Messages', 'Admin Menu text', 'growgoal'),
        'name_admin_bar'        => _x('Message', 'Add New on Toolbar', 'growgoal'),
        'add_new'               => __('Add New', 'growgoal'),
        'add_new_item'          => __('Add New Message', 'growgoal'),
        'new_item'              => __('New Message', 'growgoal'),
        'edit_item'             => __('Edit Message', 'growgoal'),
        'view_item'             => __('View Message', 'growgoal'),
        'all_items'             => __('All Messages', 'growgoal'),
        'search_items'          => __('Search Messages', 'growgoal'),
        'not_found'             => __('No messages found.', 'growgoal'),
        'not_found_in_trash'    => __('No messages found in Trash.', 'growgoal'),
        'featured_image'        => _x('Message Image', 'Overrides the “Featured Image” phrase for this post type.', 'growgoal'),
        'set_featured_image'    => _x('Set message image', 'Overrides the “Set featured image” phrase for this post type.', 'growgoal'),
        'remove_featured_image' => _x('Remove message image', 'Overrides the “Remove featured image” phrase for this post type.', 'growgoal'),
        'use_featured_image'    => _x('Use as message image', 'Overrides the “Use as featured image” phrase for this post type.', 'growgoal'),
        'archives'              => _x('Message archives', 'The post type archive label used in nav menus. Default “Post Archives”.', 'growgoal'),
        'insert_into_item'      => _x('Insert into message', 'Overrides the “Insert into post” phrase (used when inserting media into a post).', 'growgoal'),
        'uploaded_to_this_item' => _x('Uploaded to this message', 'Overrides the “Uploaded to this post” phrase (used when viewing media attached to a post).', 'growgoal'),
        'filter_items_list'     => _x('Filter messages list', 'Screen reader text for the filter links heading on the post type listing screen.', 'growgoal'),
        'items_list_navigation' => _x('Messages list navigation', 'Screen reader text for the pagination heading on the post type listing screen.', 'growgoal'),
        'items_list'            => _x('Messages list', 'Screen reader text for the items list heading on the post type listing screen.', 'growgoal'),
    );



    $args = array(
        'labels'             => $labels,
        'public'             => false, // Hides it from the front end
        'publicly_queryable' => false, // Disables querying this post type from the front end
        'show_ui'            => true,  // Enables the UI for the post type
        'show_in_menu'       => true, // Hides it from the admin menu
        'query_var'          => true,
        'rewrite'            => array('slug' => 'message'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'custom-fields'),
    );

    register_post_type('message', $args);
}
add_action('init', 'create_teacher_student_message_cpt');
