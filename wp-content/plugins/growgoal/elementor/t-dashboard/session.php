 <main class="twg-flex-1 twg-flex twg-flex-col  lg:twg-max-h-[calc(100svh-90px)] max-lg:twg-max-h-[calc(100svh-69px)] ">


     <section class="twg-flex-1 twg-pt-5 twg-flex twg-h-full max-lg:twg-flex-col max-lg:twg-overflow-y-auto max-lg:twg-px-4 max-lg:twg-space-y-6 max-lg:twg-pb-5 twg-relative twg-main-content-section">

         <!-- Menuber -->
           <?php include GROWGOAL_PLUGIN_DIR . 'elementor/t-dashboard/parts/menu.php'; ?>
         <div class="lg:twg-flex-1 lg:twg-overflow-y-auto lg:twg-px-5 max-lg:!twg-mt-0 twg-space-y-4">
             <div class="twg-flex md:twg-items-center twg-justify-between twg-gap-5 max-md:twg-flex-wrap">
                 <h1 class="main-heading">Session</h1>
                 <div class="twg-flex md:twg-justify-end twg-gap-3 max-md:twg-flex-wrap"> 
                    <button data-target="course_material" class="twg-modal-open twg-main-btn twg-uppercase"> Go to Course Matrial </button>
                     <button data-target="course_material" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-success-200 twg-rounded-lg twg-text-14px twg-font-medium twg-text-dark-100 twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-37px twg-text-center twg-uppercase"> 
                        Complete Lesson 
                    </button>
                 </div>
             </div>
             <div class="twg-relative lg:twg-space-y-5 max-lg:twg-space-y-3 lg:twg-pb-4">
                 <img src="../../../assets/images/meet-preview-img.svg" class="twg-w-full twg-rounded-lg twg-overflow-hidden" alt="" /> 
                </div>
         </div>
     </section>
     <div id="course_material" class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-769px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative"> 
            <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-space-y-[10px]">
                     <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100"> Today's Course Material </h2>
                     <p class="lg:twg-text-12px max-lg:twg-text-11px twg-text-dark-100"> Lesson 3: Advanced Algebra </p>
                     <div class="twg-flex twg-items-start twg-justify-start twg-gap-[10px]"> 
                        <button class="twg-main-btn !twg-rounded-full !twg-text-12px">Slide 1</button>
                         <button class="twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-font-medium twg-transition-colors twg-duration-300 twg-ease-linear hover:twg-bg-dark-100 hover:twg-text-accent-100 twg-h-37px twg-text-center twg-bg-transparent twg-border-dark-100 twg-text-dark-100 twg-border twg-rounded-full twg-text-12px">Slide 2</button> <button class="twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-font-medium twg-transition-colors twg-duration-300 twg-ease-linear hover:twg-bg-dark-100 hover:twg-text-accent-100 twg-h-37px twg-text-center twg-bg-transparent twg-border-dark-100 twg-text-dark-100 twg-border twg-rounded-full twg-text-12px">Slide 3</button> </div>
                     <h2 class="lg:twg-text-14px max-lg:twg-text-12px twg-font-semibold twg-text-dark-100"> Resources/Links: </h2>
                     <div class="twg-flex twg-justify-between md:twg-items-center max-md:twg-flex-col twg-gap-4">
                         <p class="twg-text-12px twg-text-dark-100 twg-uppercase twg-font-semibold">Quadratic Equation Reference Sheet </p> 
                         <button class="twg-modal-open twg-main-btn twg-flex twg-items-center twg-gap-3 !twg-bg-white twg-border twg-border-dark-100">
                             <span class="twg-text-light-800">Sheet Data.pdf</span> 
                             <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M4.99976 12.25V1" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M1.24976 9.25L4.29265 12.2929C4.62598 12.6262 4.79265 12.7929 4.99976 12.7929C5.20686 12.7929 5.37353 12.6262 5.70686 12.2929L8.74976 9.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> 
                            </button>
                     </div>
                     <div class="twg-flex twg-justify-between md:twg-items-center max-md:twg-flex-col twg-gap-4 twg-py-2">
                         <p class="twg-text-12px twg-text-dark-100 twg-uppercase twg-font-semibold">Interactive Practice Activity </p>
                         <p class="twg-text-12px twg-text-primary-100 twg-uppercase twg-font-semibold twg-underline">Access File </p>
                     </div>
                     <div class="twg-w-full twg-flex max-lg:twg-flex-col twg-gap-[10px]"> <button type="button" class="twg-model-close twg-px-20px twg-py-10px twg-leading-none twg-bg-primary-100 twg-font-medium twg-transition-colors twg-duration-300 twg-ease-linear hover:twg-bg-dark-100 hover:twg-text-accent-100 twg-h-37px twg-text-center twg-bg-transparent twg-border-dark-100 twg-text-dark-100 twg-border twg-rounded-full twg-text-14px"> Back </button> <button data-target="twg_session_wrapper" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-text-14px twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-min-h-37px twg-text-center !twg-rounded-full twg-flex-1">Share with Student</button> </div>
                 </div>
             </div>
         </div>
     </div>
     <div id="twg_session_wrapper"
         class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-380px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative">
            <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px]">
                     <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100 twg-w-full"> Session Complete Confirmation </h2>
                     <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200 twg-text-center"> Lesson marked as reviewed as your progress tracker update. </p>
                     <div class="twg-pt-2 twg-w-full"> 
                        <button data-target="session_performance_confirmation" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-text-14px twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-37px twg-text-center twg-w-full twg-rounded-full"> Mark as Reviewed </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div id="practice_confirmation"
         class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative twg-overflow-hidden"> 
            <img src="../../../assets/images/lesson_feedback_stars.png" alt="Forgot Password Image" class="twg-w-46px twg-absolute twg-top-0 twg-left-0" /> 
            <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px] twg-pt-40px">
                     <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100"> How Was Your Lesson? </h2>
                     <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-300/70 twg-text-center twg-pb-2"> Share your thoughts on the session and your teacher's performance to help us improve. </p> 
                     <img src="../../../assets/images/feedback_start_empty.svg" alt="" />
                     <div class="twg-relative twg-w-full">
                         <label for="schedule_lesson_additional_details" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Additional Notes</label>
                         <textarea class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800/60 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-w-full twg-resize-none" rows="5" name="schedule_lesson_additional_details" id="schedule_lesson_additional_details"></textarea>
                     </div>
                     <div class="twg-pt-2 twg-w-full"> 
                        <button data-target="thankyou_modal" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-text-14px twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-40px twg-text-center twg-w-full twg-rounded-full"> Submit </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div id="session_performance_confirmation"
         class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-769px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative">
             <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-space-y-[10px]">
                     <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100"> Session Performance Confirmation </h2>
                     <p class="lg:twg-text-12px max-lg:twg-text-11px twg-text-dark-100"> Session completed. Please provide feedback on the students' performance. </p>
                     <form class="lg:twg-space-y-5 max-lg:twg-space-y-3 twg-pt-3">
                         <h2 class="lg:twg-text-14px max-lg:twg-text-12px twg-font-semibold twg-text-dark-100"> Student Feedback </h2>
                         <div class="twg-relative select-container">
                             <label class="twg-text-12px twg-font-semibold twg-block !twg-mb-1 !twg-uppercase" for="Students">Students</label> 
                         <select id="Students" class="twg-text-12px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none twg-leading-[17px] twg-uppercase twg-h-40px twg-w-full">
                                 <option value="Ahmad" class="twg-text-10px twg-text-dark-100" selected> Ahmad </option>
                                 <option value="profile1" class="twg-text-10px twg-text-dark-100"> Profile 1 </option>
                                 <option value="profile2" class="twg-text-10px twg-text-dark-100"> Profile 2 </option>
                                 <option value="profile3" class="twg-text-10px twg-text-dark-100"> Profile 3 </option>
                             </select> </div>
                         <div class="twg-space-y-2">
                             <div class="twg-relative">
                                 <p class="twg-text-12px twg-text-dark-100 twg-uppercase twg-font-semibold">Performance </p>
                                 <div class="twg-flex twg-gap-5">
                                     <label class="twg-flex twg-gap-2 twg-items-center"> 
                                        <input type="radio" id="radio1" name="performance" class="!twg-ring-0 !twg-outline-none !twg-shadow-none" /> 
                                        <span class="twg-text-14px twg-text-light-900 twg-uppercase">Poor</span> </label> 
                                        <label class="twg-flex twg-gap-2 twg-items-center"> <input type="radio" id="radio2" name="performance" class="!twg-ring-0 !twg-outline-none !twg-shadow-none" /> 
                                        <span class="twg-text-14px twg-text-light-900 twg-uppercase">Average</span> </label> 
                                        <label class="twg-flex twg-gap-2 twg-items-center"> 
                                            <input type="radio" id="radio3" name="performance" class="!twg-ring-0 !twg-outline-none !twg-shadow-none" /> <span class="twg-text-14px twg-text-light-900 twg-uppercase">Good</span> </label> </div>
                             </div>
                             <div class="twg-relative">
                                 <p class="twg-text-12px twg-text-dark-100 twg-uppercase twg-font-semibold">Engagement </p>
                                 <div class="twg-flex twg-gap-5">
                                     <label class="twg-flex twg-gap-2 twg-items-center"> 
                                        <input type="radio" id="radio1" name="engagement" class="!twg-ring-0 !twg-outline-none !twg-shadow-none" />
                                         <span class="twg-text-14px twg-text-light-900 twg-uppercase">Low</span> </label> 
                                         <label class="twg-flex twg-gap-2 twg-items-center"> <input type="radio" id="radio2" name="engagement" class="!twg-ring-0 !twg-outline-none !twg-shadow-none" /> 
                                         <span class="twg-text-14px twg-text-light-900 twg-uppercase">Medium</span> </label> 
                                         <label class="twg-flex twg-gap-2 twg-items-center"> <input type="radio" id="radio3" name="engagement" class="!twg-ring-0 !twg-outline-none !twg-shadow-none" /> 
                                         <span class="twg-text-14px twg-text-light-900 twg-uppercase">High</span> </label> </div>
                             </div>
                         </div>
                         <div class="twg-relative twg-w-full">
                             <label for="schedule_lesson_additional_details" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Additional Notes</label>
                             <textarea class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800/60 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-w-full twg-resize-none" rows="5" name="schedule_lesson_additional_details" id="schedule_lesson_additional_details"></textarea>
                         </div>
                         <div class="twg-w-full twg-flex twg-justify-end twg-gap-[10px]">
                             <button data-target="twg_session_wrapper" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-text-14px twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-min-h-37px twg-text-center !twg-rounded-full twg-w-85px">Submit</button> </div>
                     </form>
                     <div class="!twg-py-4">
                         <hr>
                     </div>
                     <div class="twg-relative twg-pt-2">
                         <div class="accordion-wrapper">
                             <div class="twg-relative">
                                 <button class="accordion-btn twg-flex twg-items-center twg-justify-between twg-h-40px md:twg-px-4 twg-w-full">
                                     <div class="twg-flex twg-items-center twg-gap-3"> <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 15C5 15 6.5 15 8.5 18.5C8.5 18.5 14.0588 9.33333 19 7.5" stroke="#744DE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                         </svg> 
                                         <span class="twg-text-12px twg-text-light-300">Ahmad</span> 
                                        </div> 
                                        <svg class="icon-arrow" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M1 1L6 6L11 1" stroke="#6B6B6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                 </button>
                                 <div class="accordion-content twg-overflow-hidden twg-h-0 twg-transition-all twg-duration-300">
                                     <p class="twg-text-14px twg-text-light-500 twg-px-4 twg-py-2"> This is the accordion content for Ahmad. </p>
                                 </div>
                             </div>
                             <div class="twg-relative"> 
                                <button class="accordion-btn twg-flex twg-items-center twg-justify-between twg-h-40px md:twg-px-4 twg-w-full">
                                     <div class="twg-flex twg-items-center twg-gap-3"> <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 15C5 15 6.5 15 8.5 18.5C8.5 18.5 14.0588 9.33333 19 7.5" stroke="#744DE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                         </svg>
                                          <span class="twg-text-12px twg-text-light-300">Ali</span> 
                                        </div> 
                                        <svg class="icon-arrow" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M1 1L6 6L11 1" stroke="#6B6B6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                 </button>
                                 <div class="accordion-content twg-overflow-hidden twg-h-0 twg-transition-all twg-duration-300">
                                     <p class="twg-text-14px twg-text-light-500 twg-px-4 twg-py-2"> This is the accordion content for Ahmad. </p>
                                 </div>
                             </div>
                             <div class="twg-relative"> 
                                <button class="accordion-btn twg-flex twg-items-center twg-justify-between twg-h-40px md:twg-px-4 twg-w-full">
                                     <div class="twg-flex twg-items-center twg-gap-3"> <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M5 15C5 15 6.5 15 8.5 18.5C8.5 18.5 14.0588 9.33333 19 7.5" stroke="#744DE6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                         </svg>
                                          <span class="twg-text-12px twg-text-light-300">Qasim</span> </div>
                                           <svg class="icon-arrow" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path d="M1 1L6 6L11 1" stroke="#6B6B6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                 </button>
                                 <div class="accordion-content twg-overflow-hidden twg-h-0 twg-transition-all twg-duration-300">
                                     <p class="twg-text-14px twg-text-light-500 twg-px-4 twg-py-2"> This is the accordion content for Ahmad. </p>
                                 </div>
                             </div>
                         </div> 
                         <button data-target="practice_confirmation" class="twg-modal-open twg-main-btn !twg-h-[50px] !twg-w-full !twg-rounded-full !twg-mt-5 lg:!twg-text-16px max-lg:!twg-text-14px">
                            Submit Performance Report
                        </button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div id="thankyou_modal"  class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative"> 
            <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <dotlottie-player src="https://lottie.host/835089fa-8d82-4f5b-9156-d14e0ed33ecd/IxngAqXRbm.lottie" background="transparent" speed="1" class="twg-size-203px" loop autoplay></dotlottie-player>
         </div>
     </div>
 </main>
 <div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>