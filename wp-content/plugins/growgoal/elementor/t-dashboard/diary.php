 <main class="twg-flex-1 twg-flex twg-flex-col  lg:twg-max-h-[calc(100svh-90px)] max-lg:twg-max-h-[calc(100svh-69px)] ">

     <section class="twg-flex-1 twg-pt-5 twg-flex twg-h-full max-lg:twg-flex-col max-lg:twg-overflow-y-auto max-lg:twg-px-4 max-lg:twg-space-y-6 max-lg:twg-pb-5 twg-relative twg-main-content-section"> <!-- Menubar --> <?php include GROWGOAL_PLUGIN_DIR . 'elementor/t-dashboard/parts/menu.php'; ?>
         <div class="lg:twg-flex-1 lg:twg-overflow-y-auto lg:twg-px-5 max-lg:!twg-mt-0">
             <div class="twg-flex md:twg-items-center twg-justify-between lg:twg-gap-5 max-lg:twg-gap-3 max-md:twg-flex-wrap">
                 <h1 class="main-heading">My diary</h1>
                 <div class="twg-flex md:twg-justify-end twg-gap-3 max-md:twg-flex-wrap"> <button data-target="add_notes_model" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-bg-transparent twg-rounded-lg twg-text-14px twg-font-medium twg-text-primary-100 twg-border twg-border-primary-100 twg-transition-colors twg-duration-300 twg-ease-linear hover:twg-bg-primary-100 hover:twg-text-accent-100 twg-h-[37px] twg-text-center twg-uppercase"> Add Notes </button> <button data-target="add_events_model" class="twg-modal-open twg-px-14px twg-py-10px twg-leading-none twg-border twg-border-primary-100  twg-bg-primary-100 twg-rounded-lg twg-text-14px twg-font-medium twg-text-accent-100 twg-transition-colors twg-duration-300 twg-ease-linear hover:twg-bg-transparent hover:twg-text-primary-100 twg-h-[37px] twg-text-center twg-uppercase"> Add Event </button> </div>
             </div>
             <h4 class="lg:twg-text-20px max-lg:twg-text-18px twg-text-primary-100 twg-uppercase twg-font-medium twg-mb-1"> Plan your lessons and guide your week effectively. </h4>
             <div class="twg-flex lg:twg-h-full max-lg:twg-flex-col lg:twg-mt-5 max-lg:twg-mt-3">
                 <div class="twg-space-y-3 lg:twg-flex-1">
                     <div>
                         <h4 class="lg:twg-text-20px max-lg:twg-text-18px twg-text-dark-100 twg-font-medium twg-mt-6px twg-mb-2"> My Schedule </h4>
                     </div>
                     <div class="twg-relative lg:twg-space-y-5 max-lg:twg-space-y-3 lg:twg-pb-4">
                         <div id="diary_calendar"></div>
                     </div>
                 </div>
                 <div class="twg-right-bar twg-w-full lg:twg-px-5">
                     <div>
                         <div class="twg-flex twg-justify-between twg-items-center twg-my-4"> <span id="currentMonth" class="twg-text-16px twg-font-semibold"></span>
                             <div class="twg-flex twg-gap-2"> <button id="prevMonth" class="twg-text-dark-100 twg-transition-colors twg-duration-300 twg-ease-linear hover:twg-text-primary-100"> <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8131 0.461914L12.1869 1.664L6.55951 6.58795L12.1869 11.5119L10.8131 12.714L3.81189 6.58795L10.8131 0.461914Z" fill="currentColor" />
                                     </svg> </button> <button id="nextMonth" class="twg-text-dark-100 twg-transition-colors twg-duration-300 twg-ease-linear hover:twg-text-primary-100"> <svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <path fill-rule="evenodd" clip-rule="evenodd" d="M2.18692 12.7139L0.81311 11.5118L6.44049 6.58783L0.81311 1.66387L2.18692 0.461785L9.1881 6.58783L2.18692 12.7139Z" fill="currentColor" />
                                     </svg> </button> </div>
                         </div>
                         <div id="calendar-monthly" class="twg-grid twg-grid-cols-7 twg-gap-2 twg-text-center"> <!-- Days of the week -->
                             <div class="twg-text-11px twg-font-medium twg-[#333333]">Mo</div>
                             <div class="twg-text-11px twg-font-medium twg-[#333333]">Tu</div>
                             <div class="twg-text-11px twg-font-medium twg-[#333333]">We</div>
                             <div class="twg-text-11px twg-font-medium twg-[#333333]">Th</div>
                             <div class="twg-text-11px twg-font-medium twg-[#333333]">Fr</div>
                             <div class="twg-text-11px twg-font-medium twg-[#333333]">Sa</div>
                             <div class="twg-text-11px twg-font-medium twg-[#333333]">Su</div> <!-- Days will be dynamically rendered here -->
                         </div>
                     </div>
                     <div class="lg:twg-space-y-5 max-lg:twg-space-y-3 lg:twg-mt-5 max-lg:twg-mt-3">
                         <div class="twg-space-y-[10px]">
                             <div class="twg-flex twg-items-center twg-justify-between twg-gap-4">
                                 <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-text-dark-100 twg-font-medium"> Upcoming Events </h4>
                                 <h4 class="twg-text-10px twg-text-light-800 twg-font-medium"> View All </h4>
                             </div>
                             <div class="twg-space-y-[10px]">
                                 <div class="twg-bg-light-400 twg-rounded-[5px] twg-p-9px twg-flex twg-items-center twg-gap-4"> <img src="../../../assets/images/upcomimg-events-1.png" class="twg-size-44px twg-object-cover" alt="Math Class for Group A">
                                     <div class="twg-relative twg-flex-1">
                                         <h4 class="lg:twg-text-14px max-lg:twg-text-12px twg-text-dark-100"> Math Class for Group A </h4>
                                         <div class="twg-flex twg-gap-18px">
                                             <div class="twg-flex twg-items-center twg-gap-1">
                                                 <div class="twg-size-1 twg-rounded-full twg-bg-accent-700"></div>
                                                 <p class="twg-text-12px twg-text-accent-700">Design</p>
                                             </div>
                                             <div class="twg-flex twg-items-center twg-gap-1">
                                                 <div class="twg-size-1 twg-rounded-full twg-bg-accent-700"></div>
                                                 <p class="twg-text-12px twg-text-accent-700">10:00 am</p>
                                             </div>
                                         </div> <svg class="twg-absolute twg-top-3px twg-right-0" width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <circle cx="2" cy="2" r="2" fill="#9D9D9D" />
                                             <circle cx="10" cy="2" r="2" fill="#9D9D9D" />
                                         </svg>
                                     </div>
                                 </div>
                                 <div class="twg-bg-light-400 twg-rounded-[5px] twg-p-9px twg-flex twg-items-center twg-gap-4"> <img src="../../../assets/images/upcomimg-events-2.png" class="twg-size-44px twg-object-cover" alt="Web Development Workshop">
                                     <div class="twg-relative twg-flex-1">
                                         <h4 class="lg:twg-text-14px max-lg:twg-text-12px twg-text-dark-100"> Web Development Workshop </h4>
                                         <div class="twg-flex twg-gap-18px">
                                             <div class="twg-flex twg-items-center twg-gap-1">
                                                 <div class="twg-size-1 twg-rounded-full twg-bg-accent-700"></div>
                                                 <p class="twg-text-12px twg-text-accent-700">Coding</p>
                                             </div>
                                             <div class="twg-flex twg-items-center twg-gap-1">
                                                 <div class="twg-size-1 twg-rounded-full twg-bg-accent-700"></div>
                                                 <p class="twg-text-12px twg-text-accent-700">2:00 pm</p>
                                             </div>
                                         </div> <svg class="twg-absolute twg-top-3px twg-right-0" width="12" height="4" viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <circle cx="2" cy="2" r="2" fill="#9D9D9D" />
                                             <circle cx="10" cy="2" r="2" fill="#9D9D9D" />
                                         </svg>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="twg-space-y-[10px] lg:twg-pb-4">
                             <div class="twg-flex twg-items-center twg-justify-between twg-gap-4">
                                 <h4 class="lg:twg-text-16px max-lg:twg-text-14px twg-text-dark-100 twg-font-medium"> Top Performing Students </h4>
                                 <h4 class="twg-text-10px twg-text-light-800 twg-font-medium"> View All </h4>
                             </div>
                             <div class="twg-space-y-[10px]">
                                 <div class="twg-bg-light-400 twg-rounded-[5px] twg-p-9px twg-flex twg-items-center twg-gap-4">
                                     <div class="twg-space-y-1 twg-w-full">
                                         <div class="twg-flex twg-items-center twg-gap-10px"> <img src="../../../assets/images/performing-students-1.png" class="twg-size-44px twg-rounded-full twg-object-cover" alt="../../../assets/images/performing-students-1.png">
                                             <div class="twg-flex-1">
                                                 <div class="twg-flex twg-items-start twg-justify-between">
                                                     <div class="twg-space-y-1">
                                                         <div class="twg-flex twg-items-center twg-gap-4">
                                                             <h4 class="lg:twg-text-14px max-lg:twg-text-12px twg-text-dark-100"> John Doe </h4>
                                                             <p class="twg-text-12px twg-text-accent-700"> Age 10 </p>
                                                         </div>
                                                         <div class="twg-flex twg-items-center twg-gap-2"> <img src="../../../assets/images/students-icon-sm.png" class="twg-size-10px" alt="">
                                                             <p class="twg-text-12px twg-text-accent-700"> Mathematics </p>
                                                         </div>
                                                     </div> <img src="../../../assets/images/charts-img.svg" class="twg-w-33px" alt="">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="">
                                             <p class="twg-text-12px twg-text-dark-100 twg-font-medium">Progress:</p>
                                             <p class="twg-text-10px twg-text-accent-700">80% lessons completed.</p>
                                         </div>
                                         <div class="">
                                             <p class="twg-text-12px twg-text-dark-100 twg-font-medium">Last Activity:</p>
                                             <p class="twg-text-10px twg-text-accent-700">Completed Practice 3 on 29th October.</p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="twg-bg-light-400 twg-rounded-[5px] twg-p-9px twg-flex twg-items-center twg-gap-4">
                                     <div class="twg-space-y-1 twg-w-full">
                                         <div class="twg-flex twg-items-center twg-gap-10px"> <img src="../../../assets/images/performing-students-2.png" class="twg-size-44px twg-rounded-full twg-object-cover" alt="../../../assets/images/performing-students-2.png">
                                             <div class="twg-flex-1">
                                                 <div class="twg-flex twg-items-start twg-justify-between">
                                                     <div class="twg-space-y-1">
                                                         <div class="twg-flex twg-items-center twg-gap-4">
                                                             <h4 class="lg:twg-text-14px max-lg:twg-text-12px twg-text-dark-100"> John Doe </h4>
                                                             <p class="twg-text-12px twg-text-accent-700"> Age 10 </p>
                                                         </div>
                                                         <div class="twg-flex twg-items-center twg-gap-2"> <img src="../../../assets/images/students-icon-sm.png" class="twg-size-10px" alt="">
                                                             <p class="twg-text-12px twg-text-accent-700"> Mathematics </p>
                                                         </div>
                                                     </div> <img src="../../../assets/images/charts-img.svg" class="twg-w-33px" alt="">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="">
                                             <p class="twg-text-12px twg-text-dark-100 twg-font-medium">Progress:</p>
                                             <p class="twg-text-10px twg-text-accent-700">80% lessons completed.</p>
                                         </div>
                                         <div class="">
                                             <p class="twg-text-12px twg-text-dark-100 twg-font-medium">Last Activity:</p>
                                             <p class="twg-text-10px twg-text-accent-700">Completed Practice 3 on 29th October.</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <div id="add_notes_model" class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-overflow-x-hidden twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-499px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[20px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative"> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center">
                     <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100 twg-w-full"> Add Notes </h2>
                     <form id="add_notes_form" class="add_notes_form lg:twg-space-y-5 max-lg:twg-space-y-3 twg-w-full twg-mt-5">
                         <div class="twg-grid lg:twg-grid-cols-2 lg:twg-gap-5 max-lg:twg-gap-3">
                             <div class="twg-relative"> <label for="add_notes_date" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Date</label> <input id="add_notes_date" name="add_notes_date" type="date" class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-40px twg-w-full" placeholder="Mathematics" /> </div>
                             <div class="twg-relative"> <label for="confirm_course_time" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Time</label> <input id="confirm_course_time" name="confirm_course_time" type="time" class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-40px twg-w-full" placeholder="Advanced Algebra - Lesson 4x" /> </div>
                         </div>
                         <div class="twg-relative twg-w-full confirm_course_note_text_group"> <label for="confirm_course_note_text" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Note Text</label> <textarea name="confirm_course_note_text" class="confirm_course_note_text twg-w-full"></textarea> </div>
                         <div class="twg-relative twg-w-full"> <label class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Add to Session</label>
                             <div class="twg-relative select-container"> <select class="twg-text-12px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-40px twg-w-full">
                                     <option value="mathematics" class="twg-text-12px twg-text-dark-100" selected> Class A 11:00 AM - 12:30 PM </option>
                                     <option value="profile1" class="twg-text-12px twg-text-dark-100"> Profile 1 </option>
                                     <option value="profile2" class="twg-text-12px twg-text-dark-100"> Profile 2 </option>
                                     <option value="profile3" class="twg-text-12px twg-text-dark-100"> Profile 3 </option>
                                 </select> </div>
                         </div>
                         <div class="twg-w-full"> <button data-target="success_modal" class="twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-text-center twg-modal-open twg-rounded-full twg-min-h-40px lg:twg-text-16px max-lg:twg-text-14px twg-w-full"> Save </button> </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <div id="add_events_model" class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-overflow-x-hidden twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-499px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[20px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative"> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center">
                     <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100 twg-w-full"> Add Event </h2>
                     <form id="add_notes_form" class="add_notes_form lg:twg-space-y-5 max-lg:twg-space-y-3 twg-w-full twg-mt-5">
                         <div class="twg-relative"> <label for="add_notes_date" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Event Name</label> <input id="add_notes_date" name="add_notes_date" type="text" class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-40px twg-w-full" placeholder="Class A 11:00 AM - 12:30 PM" /> </div>
                         <div class="twg-grid lg:twg-grid-cols-2 lg:twg-gap-5 max-lg:twg-gap-3">
                             <div class="twg-relative"> <label for="add_notes_date" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Date</label> <input id="add_notes_date" name="add_notes_date" type="date" class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-40px twg-w-full" placeholder="Mathematics" /> </div>
                             <div class="twg-relative"> <label for="confirm_course_time" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Time</label> <input id="confirm_course_time" name="confirm_course_time" type="time" class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-40px twg-w-full" placeholder="Advanced Algebra - Lesson 4x" /> </div>
                         </div>
                         <div class="twg-relative twg-w-full"> <label class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block twg-uppercase">event Type</label>
                             <div class="twg-relative select-container"> <select class="twg-text-12px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-40px twg-w-full">
                                     <option value="Reminder" class="twg-text-12px twg-text-dark-100" selected> Reminder </option>
                                     <option value="profile1" class="twg-text-12px twg-text-dark-100"> Profile 1 </option>
                                     <option value="profile2" class="twg-text-12px twg-text-dark-100"> Profile 2 </option>
                                     <option value="profile3" class="twg-text-12px twg-text-dark-100"> Profile 3 </option>
                                 </select> </div>
                         </div>
                         <div class="twg-relative twg-w-full confirm_course_note_text_group"> <label for="confirm_course_note_text" class="twg-text-12px twg-text-neutral-700 twg-font-semibold twg-mb-3px twg-block">Event Description</label> <textarea name="confirm_course_note_text" class="confirm_course_note_text twg-w-full"></textarea> </div>
                         <div class="twg-w-full"> <button data-target="events_success_modal" class="twg-px-14px twg-py-10px twg-leading-none twg-bg-primary-100 twg-font-medium twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-text-center twg-modal-open twg-rounded-full twg-min-h-40px lg:twg-text-16px max-lg:twg-text-14px twg-w-full"> Save </button> </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <div id="success_modal" class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-499px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[20px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative"> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center">
                     <div class="twg-flex twg-gap-4"> <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <rect x="0.5" y="0.5" width="24" height="24" />
                         </svg>
                         <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100 twg-w-full"> Notes Added Success </h2>
                     </div> <dotlottie-player src="https://lottie.host/1f1b4c59-0000-45a3-a3aa-fc94c6208ba9/BYkgKp1qvp.lottie" background="transparent" speed="1" class="!twg-max-w-438px twg-aspect-square" loop autoplay></dotlottie-player>
                 </div>
             </div>
         </div>
     </div>
     <div id="events_success_modal" class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-499px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[20px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-3 twg-relative"> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                 <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg>
             </button>
             <div class="twg-relative twg-space-y-3 twg-w-full">
                 <div class="twg-flex twg-flex-col twg-items-center">
                     <div class="twg-flex twg-gap-4"> <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <rect x="0.5" y="0.5" width="24" height="24" />
                         </svg>
                         <h2 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-semibold twg-text-dark-100 twg-w-full"> Events Added Success </h2>
                     </div> <dotlottie-player src="https://lottie.host/1f1b4c59-0000-45a3-a3aa-fc94c6208ba9/BYkgKp1qvp.lottie" background="transparent" speed="1" class="!twg-max-w-438px twg-aspect-square" loop autoplay></dotlottie-player>
                 </div>
             </div>
         </div>
     </div>
 </main>
 <div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>