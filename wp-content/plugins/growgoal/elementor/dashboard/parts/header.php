<?php

/**
 * Header template
 * 
 * @package GrowGoal
 * @since 1.0.0
 * @subpackage Dashbaord/Header
 */

$user = wp_get_current_user();
$user_id = $user->ID;
$first_name = get_user_meta($user_id, 'first_name', true);
$last_name = get_user_meta($user_id, 'last_name', true);
$full_name = $first_name . ' ' . $last_name;
$nickname = $user->user_nicename;
$display_name = $user->display_name;
$username = $user->user_login;
$student_name = $full_name ? $full_name : $display_name;
$profile_image = get_user_meta($user_id, 'profile_image', true);
$profile_image_url = wp_get_attachment_image_url($profile_image, 'thumbnail');
$profile_image_url = $profile_image_url ? $profile_image_url : GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png';
$email = $user->user_email;

?>

<header class="twg-relative twg-py-3 twg-z-99">
    <div
        class="twg-max-w-[1340px] twg-px-4 twg-mx-auto twg-flex twg-items-center twg-justify-between lg:twg-gap-5 mm-sm-lg:twg-gap-3 max-sm:twg-gap-2">
        <button
            class="twg-header-sidebar-button lg:twg-hidden md:twg-size-40px max-md:twg-size-35px twg-rounded-full twg-bg-light-400 twg-overflow-hidden twg-grid twg-place-items-center twg-relative">
            <i class="fa-solid fa-bars"></i>
        </button>
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/GrowGoal-Dark-Logo-Sm.svg'; ?>" class="mm-md-lg:twg-h-11 max-md:twg-h-9 max-lg:twg-w-auto"
                alt="" />
        </a>
        <div
            class="twg-flex twg-items-center twg-flex-1 twg-justify-end lg:twg-gap-5 mm-sm-lg:twg-gap-3 max-sm:twg-gap-1">
            <div
                class="xl:twg-max-w-550px max-xl:twg-max-w-350px max-lg:twg-hidden twg-w-full twg-bg-light-400 twg-rounded-full twg-overflow-hidden twg-relative">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="twg-absolute twg-left-5 twg-top-50/100 -twg-translate-y-50/100">
                    <path d="M11.7158 21C16.9625 21 21.2158 16.7467 21.2158 11.5C21.2158 6.25329 16.9625 2 11.7158 2C6.46912 2 2.21582 6.25329 2.21582 11.5C2.21582 16.7467 6.46912 21 11.7158 21Z" stroke="#6B6B6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M22.2158 22L20.2158 20" stroke="#6B6B6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="text" id="search_bar" name="search_bar"
                    class="twg-w-full twg-h-50px twg-leading-[50px] twg-text-light-500 twg-text-16px twg-pl-57px twg-bg-transparent !twg-border-none !twg-ring-0 !twg-outline-none twg-pr-5"
                    placeholder="Find anything you want..." />
            </div>

            <button
                class="twg-header-search-modal-button lg:twg-hidden md:twg-size-40px max-md:twg-size-35px twg-rounded-full twg-bg-light-400 twg-overflow-hidden twg-grid twg-place-items-center twg-relative">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7158 21C16.9625 21 21.2158 16.7467 21.2158 11.5C21.2158 6.25329 16.9625 2 11.7158 2C6.46912 2 2.21582 6.25329 2.21582 11.5C2.21582 16.7467 6.46912 21 11.7158 21Z" stroke="#6B6B6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M22.2158 22L20.2158 20" stroke="#6B6B6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <!-- Notifications Dropdown -->
            <div class="twg-relative">
                <button
                    class="lg:twg-size-50px mm-md-lg:twg-size-40px max-md:twg-size-35px twg-rounded-full twg-bg-light-400 twg-overflow-hidden twg-grid twg-place-items-center twg-relative dropdown-action">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.9316 6.43994V9.76994" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M12.9515 2C9.27154 2 6.29154 4.98 6.29154 8.66V10.76C6.29154 11.44 6.01154 12.46 5.66154 13.04L4.39154 15.16C3.61154 16.47 4.15154 17.93 5.59154 18.41C10.3715 20 15.5415 20 20.3215 18.41C21.6715 17.96 22.2515 16.38 21.5215 15.16L20.2515 13.04C19.9015 12.46 19.6215 11.43 19.6215 10.76V8.66C19.6115 5 16.6115 2 12.9515 2Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" />
                        <path d="M16.2616 18.8198C16.2616 20.6498 14.7616 22.1498 12.9316 22.1498C12.0216 22.1498 11.1816 21.7698 10.5816 21.1698C9.98156 20.5698 9.60156 19.7298 9.60156 18.8198" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" />
                    </svg>
                    <span class="twg-size-10px twg-rounded-full twg-bg-primary-100 twg-absolute lg:twg-right-14px mm-md-lg:twg-right-10px max-md:twg-right-4px lg:twg-top-12px mm-md-lg:twg-top-8px max-md:twg-top-4px twg-border twg-border-light-400"></span>
                </button>
                <div class="dropdown-menu twg-z-50 twg-hidden">
                    <div class="twg-absolute twg-top-full lg:twg-right-0 max-lg:twg-left-50/100 mm-md-lg:-twg-translate-x-60/100 max-md:-twg-translate-x-66/100 twg-bg-white twg-border twg-border-dark-100/10 twg-shadow-md twg-rounded-md md:twg-min-w-350px max-md:twg-min-w-320px twg-mt-2 twg-flex twg-flex-col twg-overflow-hidden">
                        <div class="twg-py-3 twg-px-4 twg-flex twg-items-center twg-justify-between twg-gap-5 twg-border-b twg-border-b-dark-100/10">
                            <h3 class="twg-text-xl twg-font-semibold twg-text-dark-100"> Notifications </h3> <button class="twg-text-blue-500 twg-font-medium twg-text-sm"> Mark all as read </button>
                        </div>
                        <ul class="twg-list-none twg-divide-y twg-divide-dark-100/10 twg-flex-1 twg-max-h-300px twg-overflow-y-auto">
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-light-400 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL .  'elementor/assets/images/header-profile.png'; ?> " class="twg-size-full" alt="John Doe" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">John Doe</span> <span>has sent you a $50 tip</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-accent-100 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="twg-size-full" alt="Jane Smith" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">Jane Smith</span> <span>sent you a message</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-light-400 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="twg-size-full" alt="Alice Johnson" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">Alice Johnson</span> <span>commented on your post</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-light-400 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="twg-size-full" alt="John Doe" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">John Doe</span> <span>has sent you a $50 tip</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-accent-100 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="twg-size-full" alt="Jane Smith" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">Jane Smith</span> <span>sent you a message</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-light-400 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="twg-size-full" alt="Jane Smith" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">Alice Johnson</span> <span>commented on your post</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-light-400 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="twg-size-full" alt="Jane Smith" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">John Doe</span> <span>has sent you a $50 tip</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-accent-100 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="twg-size-full" alt="Jane Smith" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">Jane Smith</span> <span>sent you a message</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                            <li class="twg-py-2 twg-cursor-pointer twg-px-4 twg-bg-light-400 twg-text-sm twg-text-dark-100 twg-flex twg-items-center twg-gap-3">
                                <div class="twg-size-12 twg-rounded-full twg-bg-gray-400 twg-overflow-hidden twg-grid twg-place-items-center twg-border"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="twg-size-full" alt="Jane Smith" /> </div>
                                <div class="twg-flex-1">
                                    <h3 class="twg-text-16px twg-text-dark-100 twg-line-clamp-1"> <span class="twg-font-medium">Alice Johnson</span> <span>commented on your post</span> </h3>
                                    <p class="twg-text-13px twg-text-light-200 twg-line-clamp-1"> Log in to continue learning and exploring. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Messages Dropdown -->
            <div class="twg-relative">
                <button
                    class="lg:twg-size-50px mm-md-lg:twg-size-40px max-md:twg-size-35px twg-rounded-full twg-bg-light-400 twg-overflow-hidden twg-grid twg-place-items-center twg-relative dropdown-action">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.43164 18.9995H8.93164C4.93164 18.9995 2.93164 17.9995 2.93164 12.9995V7.99951C2.93164 3.99951 4.93164 1.99951 8.93164 1.99951H16.9316C20.9316 1.99951 22.9316 3.99951 22.9316 7.99951V12.9995C22.9316 16.9995 20.9316 18.9995 16.9316 18.9995H16.4316C16.1216 18.9995 15.8216 19.1495 15.6316 19.3995L14.1316 21.3995C13.4716 22.2795 12.3916 22.2795 11.7316 21.3995L10.2316 19.3995C10.0716 19.1795 9.70164 18.9995 9.43164 18.9995Z" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16.9281 10.9995H16.9371" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.9271 10.9995H12.9361" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.92615 10.9995H8.93513" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="dropdown-menu twg-z-50 twg-hidden">
                    <div class="twg-absolute twg-top-full lg:twg-right-0 max-lg:twg-left-50/100 mm-md-lg:-twg-translate-x-73/100 max-md:-twg-translate-x-78/100 twg-bg-white twg-border twg-border-dark-100/10 twg-shadow-md twg-rounded-md md:twg-min-w-350px max-md:twg-min-w-320px twg-mt-2 twg-flex twg-flex-col twg-overflow-hidden">
                        <div class="twg-py-3 twg-px-4 twg-flex twg-items-center twg-justify-between twg-gap-5 twg-border-b twg-border-b-dark-100/10">
                            <h3 class="twg-text-xl twg-font-semibold twg-text-dark-100"> Chats </h3> <button class="twg-text-blue-500 twg-font-medium twg-text-sm"> Mark all as read </button>
                        </div>
                        <div class="twg-space-y-5 twg-py-4 twg-px-4 twg-flex-1 twg-max-h-300px twg-overflow-y-auto">

                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-1.png'; ?>" class="twg-size-full" alt="Killan James" />
                                    <div class="twg-size-12px twg-rounded-full twg-bg-success-500 twg-border-3 twg-border-accent-100 twg-absolute twg-right-0px twg-bottom-3px"></div>
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Killan James </h4>
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-success-600"> Typing... </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> 4:30 PM </p>
                                    </div>
                                </div>
                            </div>


                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-2.png'; ?>" class="twg-size-full" alt="Design Team" />
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Design Team </h4>
                                        <p class="lg:twg-text-13px max-lg:twg-text-12px twg-text-light-500"> Hello! Everyone </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> 9:36 AM </p>
                                        <span class="twg-size-18px twg-text-center twg-ml-auto twg-grid twg-place-items-center twg-leading-none twg-rounded-full twg-bg-secondary-100 twg-text-dark-100 twg-text-12px twg-font-medium">2</span>
                                    </div>
                                </div>
                            </div>


                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-3.png'; ?>" class="twg-size-full" alt="Ahmed Medi" />
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Ahmed Medi </h4>
                                        <p class="lg:twg-text-13px max-lg:twg-text-12px twg-text-light-500"> Wow really Cool 🔥 </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> 1:15 AM </p>
                                    </div>
                                </div>
                            </div>


                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-4.png'; ?>" class="twg-size-full" alt="Claudia Maudi" />
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Claudia Maudi </h4>
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-success-600"> Typing... </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> 4:30 PM </p>
                                    </div>
                                </div>
                            </div>


                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-5.png'; ?>" class="twg-size-full" alt="Novita" />
                                    <div class="twg-size-12px twg-rounded-full twg-bg-success-500 twg-border-3 twg-border-accent-100 twg-absolute twg-right-0px twg-bottom-3px"></div>
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Novita </h4>
                                        <p class="lg:twg-text-13px max-lg:twg-text-12px twg-text-light-500"> yah, nice design </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> 4:30 PM </p>
                                        <span class="twg-size-18px twg-text-center twg-ml-auto twg-grid twg-place-items-center twg-leading-none twg-rounded-full twg-bg-secondary-100 twg-text-dark-100 twg-text-12px twg-font-medium">2</span>
                                    </div>
                                </div>
                            </div>


                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-6.png'; ?>" class="twg-size-full" alt="Milie Nose" />
                                    <div class="twg-size-12px twg-rounded-full twg-bg-success-500 twg-border-3 twg-border-accent-100 twg-absolute twg-right-0px twg-bottom-3px"></div>
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Milie Nose </h4>
                                        <p class="lg:twg-text-13px max-lg:twg-text-12px twg-text-light-500"> Awesome 🔥 </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> 8:20 PM </p>
                                        <span class="twg-size-18px twg-text-center twg-ml-auto twg-grid twg-place-items-center twg-leading-none twg-rounded-full twg-bg-secondary-100 twg-text-dark-100 twg-text-12px twg-font-medium">1</span>
                                    </div>
                                </div>
                            </div>


                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-7.png'; ?>" class="twg-size-full" alt="Ikhsan SD" />
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Ikhsan SD </h4>
                                        <p class="lg:twg-text-13px max-lg:twg-text-12px twg-text-light-500 twg-flex twg-gap-1 twg-items-center"> <!-- <i class="fa-solid fa-microphone"></i> --> <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="twg-h-14px">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.708333 6.875C1.09953 6.875 1.41667 7.19213 1.41667 7.58333V8.29167C1.41667 10.6389 3.31946 12.5417 5.66667 12.5417C8.01388 12.5417 9.91667 10.6389 9.91667 8.29167V7.58333C9.91667 7.19213 10.2338 6.875 10.625 6.875C11.0162 6.875 11.3333 7.19213 11.3333 7.58333V8.29167C11.3333 11.1814 9.1703 13.5659 6.375 13.9145V16.0833H8.5C8.8912 16.0833 9.20833 16.4005 9.20833 16.7917C9.20833 17.1829 8.8912 17.5 8.5 17.5H6.375H4.95833H2.83333C2.44213 17.5 2.125 17.1829 2.125 16.7917C2.125 16.4005 2.44213 16.0833 2.83333 16.0833H4.95833V13.9145C2.16303 13.5659 0 11.1814 0 8.29167V7.58333C0 7.19213 0.317132 6.875 0.708333 6.875Z" fill="currentColor" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.08276 8.29167V3.33333C7.08276 2.55093 6.4485 1.91667 5.6661 1.91667C4.88369 1.91667 4.24943 2.55093 4.24943 3.33333V8.29167C4.24943 9.07407 4.88369 9.70833 5.6661 9.70833C6.4485 9.70833 7.08276 9.07407 7.08276 8.29167ZM5.6661 0.5C4.10129 0.5 2.83276 1.76853 2.83276 3.33333V8.29167C2.83276 9.85647 4.10129 11.125 5.6661 11.125C7.2309 11.125 8.49943 9.85647 8.49943 8.29167V3.33333C8.49943 1.76853 7.2309 0.5 5.6661 0.5Z" fill="currentColor" />
                                            </svg> <span>Voice message</span> </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> yesterday </p>
                                    </div>
                                </div>
                            </div>


                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-8.png'; ?>" class="twg-size-full" alt="Aditya" />
                                    <div class="twg-size-12px twg-rounded-full twg-bg-success-500 twg-border-3 twg-border-accent-100 twg-absolute twg-right-0px twg-bottom-3px"></div>
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Aditya </h4>
                                        <p class="lg:twg-text-13px max-lg:twg-text-12px twg-text-light-500"> publish now </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> yesterday </p>
                                    </div>
                                </div>
                            </div>


                            <div data-target=".twg-message-wrapper" class="twg-message-open-btn twg-flex twg-gap-12px twg-items-center twg-cursor-pointer">
                                <div class="twg-relative twg-size-50px twg-overflow-hidden"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/messages-icon-dp-3.png'; ?>" class="twg-size-full" alt="Ahmed Medi" />
                                </div>
                                <div class="twg-flex-1 twg-flex twg-justify-between twg-gap-2">
                                    <div>
                                        <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-bold twg-text-dark-100"> Ahmed Medi </h4>
                                        <p class="lg:twg-text-13px max-lg:twg-text-12px twg-text-light-500"> Wow really Cool 🔥 </p>
                                    </div>
                                    <div class="twg-flex twg-flex-col twg-items-end twg-text-right">
                                        <p class="lg:twg-text-14px max-lg:twg-text-12px twg-text-light-500 twg-whitespace-nowrap"> 1:15 AM </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="twg-bg-secondary-300 twg-h-15px twg-w-1px twg-rounded-full max-lg:twg-hidden"></div>
            <!-- Profile Dropdown -->
            <div class="twg-relative">
                <button class="dropdown-action twg-flex twg-items-center lg:twg-gap-3 max-lg:twg-gap-1">
                    <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/header-profile.png'; ?>" class="lg:twg-size-50px mm-md-lg:twg-size-40px max-md:twg-size-35px twg-rounded-full twg-object-cover" alt="Profile" />
                    <div class="twg-space-y-0 max-lg:twg-hidden twg-text-left">
                        <h4 class="twg-text-16px twg-text-dark-100"><?php echo $student_name; ?></h4>
                        <p class="twg-text-14px twg-font-medium twg-text-light-300"><?php echo $email; ?></p>
                    </div>
                    <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="twg-ml-1">
                        <path d="M1.5 1.38818L6.5 6.38818L11.5 1.38818" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div
                    class="twg-absolute twg-top-full twg-right-0 twg-min-w-140px twg-w-full twg-bg-white twg-shadow-md twg-rounded-md twg-hidden dropdown-menu twg-z-50">
                    <ul class="twg-list-none twg-p-3 twg-space-y-2">
                        <li class="twg-text-lg twg-text-dark-100 twg-py-1 twg-cursor-pointer twg-flex twg-items-center twg-gap-2 twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-70"> <a href="#"> <i class="fa-solid fa-user"></i> <span>Profile</span></a> </li>
                        <li class="twg-text-lg twg-text-dark-100 twg-py-1 twg-cursor-pointer twg-flex twg-items-center twg-gap-2 twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-70"><a href="#"> <i class="fa-solid fa-gear"></i> <span>Settings</span> </a> </li>
                        <li class="twg-text-lg twg-py-1 twg-cursor-pointer twg-flex twg-items-center twg-gap-2 twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-70 twg-text-red-500"> <a href="#"> <i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Logout</span></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="twg-header-search-modal twg-hidden">
        <div
            class="twg-absolute twg-inset-0 twg-size-full twg-bg-accent-100/80 twg-backdrop-blur twg-border-b twg-border-dark-100 twg-py-5 sm:twg-px-6 max-sm:twg-px-3 twg-flex twg-items-center twg-gap-4">
            <div class="twg-flex-1 twg-w-full twg-bg-light-400 twg-rounded-full twg-overflow-hidden twg-relative">
                <input type="text"
                    class="twg-w-full twg-h-50px twg-leading-[50px] twg-text-light-500 twg-text-16px twg-bg-transparent !twg-border-none !twg-ring-0 !twg-outline-none twg-px-5"
                    placeholder="Find anything you want..." />
            </div>
            <button
                class="twg-size-50px twg-grid twg-place-items-center twg-bg-primary-100 twg-rounded-full twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7158 21C16.9625 21 21.2158 16.7467 21.2158 11.5C21.2158 6.25329 16.9625 2 11.7158 2C6.46912 2 2.21582 6.25329 2.21582 11.5C2.21582 16.7467 6.46912 21 11.7158 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M22.2158 22L20.2158 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button
                class="twg-header-search-modal-button-close twg-size-50px twg-grid twg-place-items-center twg-bg-primary-100 twg-rounded-full twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80">
                <svg viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="twg-size-20px">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="currentColor" />
                </svg>
            </button>
        </div>
    </div>
</header>