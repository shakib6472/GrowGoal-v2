 <main class="twg-flex-1 twg-flex twg-flex-col  lg:twg-max-h-[calc(100vh-90px)] max-lg:twg-max-h-[calc(100vh-69px)] ">

     <section class="twg-flex-1 twg-pt-5 twg-flex twg-h-full max-lg:twg-flex-col max-lg:twg-overflow-y-auto max-lg:twg-px-4 max-lg:twg-space-y-6 max-lg:twg-pb-5 twg-relative twg-main-content-section">

     <?php echo student_menu($settings['dashboard_page']); ?>

         <div
             class="lg:twg-flex-1 lg:twg-overflow-y-auto lg:twg-px-5 max-lg:!twg-mt-0 twg-space-y-4">
             <div class="twg-flex twg-items-center twg-gap-3 lg:twg-text-16px max-lg:twg-text-16px twg-text-light-500"> <a href="/pages/student/">Lessons</a> <i class="fa-solid fa-chevron-right"></i> <span class="twg-text-primary-100">Session</span>
             </div>
             <div class="twg-flex twg-items-center twg-justify-between twg-gap-5">
                 <h1 class="main-heading">Session</h1> <button data-target="complete_lesson" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-success-200 twg-rounded-lg twg-text-14px twg-font-medium twg-text-dark-100 twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-37px twg-text-center twg-uppercase"> Complete Lesson </button>
             </div>
             <div class="twg-relative lg:twg-space-y-5 max-lg:twg-space-y-3 lg:twg-pb-4"> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/meet-preview-img.svg'; ?>" class="twg-w-full twg-rounded-lg twg-overflow-hidden" alt="" />
             </div>
         </div>
     </section>
     <!-- Completed Lesson -->
     <div
         id="complete_lesson"
         class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
         <div
             class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative">
             <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/complete-confirmation-icon.svg'; ?>" alt="Forgot Password Image" class="twg-size-48px" />
             <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5"> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>

             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px]">
                     <h2 class="lg:twg-text-20px max-lg:twg-text-18px twg-font-semibold twg-text-primary-100"> Complete Lesson Confirmation </h2>
                     <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200 twg-text-center"> Your teacher has marked this lesson as complete. <br /> Do you agree to end the session? </p>
                     <div class="twg-grid md:twg-grid-cols-2 twg-gap-3 twg-pt-2 md:twg-w-468px"> <!-- data-target="invite_success" --> <button class="twg-px-14px twg-py-10px twg-leading-none twg-bg-danger-100 twg-rounded-lg twg-text-14px twg-font-medium twg-text-danger-200 twg-border twg-border-danger-200 twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-40px twg-text-center twg-uppercase twg-flex twg-gap-2 twg-justify-center twg-items-center"> <i class="fa-solid fa-xmark"></i> <span>Deny and Continue</span> </button> <button data-target="twg_session_wrapper" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-success-100 twg-rounded-lg twg-text-14px twg-font-medium twg-text-accent-100 twg-border twg-border-success-100 twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-40px twg-text-center twg-capitalize twg-flex twg-gap-2 twg-justify-center twg-items-center"> <i class="fa-solid fa-check-double"></i> <span>Confirm Completion</span> </button> </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Session Wrapper -->
     <div
         id="twg_session_wrapper"
         class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
         <div
             class="twg-max-w-380px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative">
             <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5"> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>

             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px]">
                     <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100 twg-w-full"> Session Complete Confirmation </h2>
                     <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200 twg-text-center"> Lesson marked as reviewed as your progress tracker update. </p>
                     <div class="twg-pt-2 twg-w-full"> <button data-target="lesson_feedback" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-text-14px twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-37px twg-text-center twg-w-full twg-rounded-full"> Mark as Reviewed </button> </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Practice Confirmation -->
     <div
         id="practice_confirmation"
         class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
         <div
             class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative twg-overflow-hidden">
             <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/lesson_feedback_stars.png'; ?>" alt="Forgot Password Image" class="twg-w-46px twg-absolute twg-top-0 twg-left-0" />
             <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5"> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>

             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px] twg-pt-40px">
                     <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100"> How Was Your Lesson? </h2>
                     <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-300/70 twg-text-center twg-pb-2"> Share your thoughts on the session and your teacher's performance to help us improve. </p> <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/feedback_start_empty.svg' ?>" alt="" />
                     <div class="twg-relative twg-w-full"> <label for="schedule_lesson_additional_details" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Additional Notes</label> <textarea class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800/60 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-w-full twg-resize-none" rows="5" name="schedule_lesson_additional_details" id="schedule_lesson_additional_details"></textarea> </div>
                     <div class="twg-pt-2 twg-w-full"> <button data-target="thankyou_modal" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-text-14px twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-40px twg-text-center twg-w-full twg-rounded-full"> Submit </button> </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Lesson Feedback -->
     <div
         id="lesson_feedback"
         class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
         <div
             class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative">
             <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/lesson_feedback_stars.png'; ?>" alt="" class="twg-absolute twg-top-0 twg-left-0" />
             <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5"> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>

             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px]">
                     <h2 class="lg:twg-text-20px max-lg:twg-text-18px twg-font-semibold twg-text-primary-100"> Session Completed! Ready to Practice? </h2>
                     <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200 twg-text-center"> Great job on completing your session with John Doe! Continue your learning journey by practicing the skills you’ve just learned. </p>
                     <div class="twg-pt-2 twg-w-full"> <button data-target="practice_confirmation" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-text-14px twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-37px twg-text-center twg-w-full twg-rounded-7px"> Start Practice </button> </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Thanks You Modal -->
     <div
         id="thankyou_modal"
         class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
         <div
             class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative">
             <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5"> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>

             <dotlottie-player src="https://lottie.host/ebe930ad-d9f6-4a7b-aea7-c0bba13b7989/BgDVJGL9t8.lottie" background="transparent" speed="1" class="twg-size-203px" loop autoplay></dotlottie-player>
         </div>
     </div>

 </main>
 <div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>