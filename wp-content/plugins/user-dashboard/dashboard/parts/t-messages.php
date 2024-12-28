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
			<div class=" custom-six-roting-box border">
				<div class="sec-clock-img-clock-container">
					<img src="https://growgoal.online/wp-content/uploads/2024/09/Group-40.png" alt="" class="sec-clock-img">
					<h4 class="sec-clock">Daily Reminder:</h4>
				</div>
				<h4 class="custom-sec-roting-heading">
					<a href="<?php echo home_url('/chat') ?>" class="message">
						See Messages
					</a>

				</h4>

			</div>
		</div>
		<!-- -------Right Container------- -->
		<div class="six-todo-container border">
			<h2 class="custom-six-right-main-heading">The more you question, the<br> more you learn</h2>
			<h2 class="custom-six-question-form">send a message or a answer to your student</h2>
			<div class="custom-six-contact-form">

				<textarea name="message" id="message" placeholder="Text Here"></textarea>
				<img src="https://growgoal.online/wp-content/uploads/2024/09/Vector-9.png" alt="" class="sent_message">
			</div>
			<h2 class="custom-six-question-form">choose your student</h2>

			<div class="custom-teacher-choose-min-container">
				<?php
				global $wpdb;

				// Log the start of the function
				error_log("Starting the teacher query process");

				// Get the current user ID
				$user_id = get_current_user_id();
				$no_std = false;
				error_log("Current user ID: " . $user_id);

				// Set up the WP_Query arguments
				$args = array(
					'post_type'      => 'teacher',        // Custom post type
					'posts_per_page' => 1,                // Limit to 1 post
					'author'         => $user_id,         // Get posts by this author ID
					'fields'         => 'ids'             // Only return the post ID
				);

				// Execute the WP_Query
				$query = new WP_Query($args);

				// Check if posts are found
				if ($query->have_posts()) {
					// Get the first post ID
					$teacher = $query->posts[0];
					error_log("Teacher post ID: " . $teacher);  // Log the teacher post ID
					// Reset the post data
					wp_reset_postdata();
				} else {
					$no_std = true;
				}

				// Query the teacher bookings table
				$table_name = $wpdb->prefix . 'teacher_bookings';

				// Prepare and execute the query to get the student ID where the teacher_id matches
				$query = $wpdb->prepare("SELECT student_id FROM $table_name WHERE teacher_id = %d", $teacher);

				$results = $wpdb->get_results($query); 
				$student_ids = array_map(function ($result) {
					return $result->student_id;
				}, $results);

				// Get unique student IDs
				$results = array_unique($student_ids);
				// $results = array_unique($results);
				
				// Loop through the results
				foreach ($results as $result) {
					error_log(print_r($result, true));

					// Use the teacher_id to get the post details
					$user_id = $result;  // Assuming this should be a student post
					$user_info = get_userdata($user_id);
					if ($user_info) {
						$user_name = $user_info->display_name;
						$profile_picture_url = get_avatar_url($user_id);
					}

					if (!$profile_picture_url) {
						$profile_picture_url = 'https://growgoal.online/wp-content/uploads/2024/10/image.png';
					}

					if (!$no_std) {

				?>
						<label class="teacher">
							<input type="radio" name="teacher" class="t-radio" value="<?php echo $user_id; ?>" />
							<img class="t-profile" src="<?php echo $profile_picture_url; ?>" alt="">
							<div class="t-name"><?php echo $user_name; ?></div>
							<div class="t-tag">student</div>
						</label>
					<?php
					} else {
					?>
						<div class="t-tag">You Don't Have any Student</div>
				<?php
					}
				}  // End of foreach loop
				?>
			</div>

		</div>
	</div>
</div>