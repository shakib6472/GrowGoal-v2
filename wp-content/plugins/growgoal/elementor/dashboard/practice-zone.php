 <main
     class="twg-flex-1 twg-flex twg-flex-col  lg:twg-max-h-[calc(100vh-90px)] max-lg:twg-max-h-[calc(100vh-69px)] ">



     <section
         class="twg-flex-1 twg-pt-5 twg-flex twg-h-full max-lg:twg-flex-col max-lg:twg-overflow-y-auto max-lg:twg-px-4 max-lg:twg-space-y-6 max-lg:twg-pb-5 twg-relative twg-main-content-section">
         <?php echo student_menu($settings['dashboard_page']); ?>

         <div
             class="twg-main-wrapper-content lg:twg-flex-1 lg:twg-overflow-y-auto lg:twg-px-5 max-lg:!twg-mt-0">
             <h1 class="main-heading">Practice</h1>
             <p
                 class="lg:twg-text-16px max-lg:twg-text-14px twg-text-dark-100 twg-mt-1 twg-mb-2">
                 Practice makes perfect! Take this time to apply what you’ve learned.
             </p>
             <p
                 class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-500 twg-mt-5 twg-mb-2">
                 Practice Area
             </p>
             <div
                 class="twg-grid mm-md-2xl:twg-grid-cols-3 2xl:twg-grid-cols-4 lg:twg-gap-5 max-lg:twg-gap-4 twg-rounded-10px lg:twg-p-20px max-lg:twg-p-14px lg:twg-mb-3 twg-border twg-border-dark-100/70">

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-success-300 twg-text-success-200 twg-border-success-200 "> Completed </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 1. </p>


                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px twg-bg-secondary-400 twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-primary-100"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-secondary-500 twg-text-primary-100 twg-border-primary-100 "> Today’s Practice </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 2. </p>

                         <button class="twg-mt-5 twg-px-14px twg-py-10px twg-leading-none twg-rounded-lg twg-text-14px twg-font-medium twg-uppercase twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-37px twg-w-full  twg-bg-primary-100 twg-text-white "> Enter Practice </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 3. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 4. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 5. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 6. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 7. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 8. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 9. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 10. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 11. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

                 <a href="/pages/student/practice-details/" class="twg-h-full">
                     <div class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col twg-justify-center twg-min-h-168px">
                         <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
                             <div class="twg-relative">
                                 <h3 class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-light-500"> Practice Material </h3>
                             </div>
                             <div class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 "> Upcoming </div>
                         </div>
                         <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-2 twg-mb-2"> Complete the Practice for Lesson 12. </p>

                         <button class="twg-mt-auto twg-ml-auto twg-flex twg-gap-3 twg-text-dark-100"> <span class="twg-text-14px twg-font-medium">Locked</span> <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M1.26781 17.8447C1.49269 19.515 2.87613 20.8235 4.55966 20.9009C5.97627 20.966 7.4153 21 9 21C10.5847 21 12.0237 20.966 13.4403 20.9009C15.1239 20.8235 16.5073 19.515 16.7322 17.8447C16.879 16.7547 17 15.6376 17 14.5C17 13.3624 16.879 12.2453 16.7322 11.1553C16.5073 9.48502 15.1239 8.17649 13.4403 8.09909C12.0237 8.03397 10.5847 8 9 8C7.4153 8 5.97627 8.03397 4.55966 8.09909C2.87613 8.17649 1.49269 9.48502 1.26781 11.1553C1.12104 12.2453 0.999998 13.3624 0.999998 14.5C0.999998 15.6376 1.12104 16.7547 1.26781 17.8447Z" stroke="currentColor" stroke-width="1.5" />
                                 <path d="M4.5 8V5.5C4.5 3.01472 6.51472 1 9 1C11.4853 1 13.5 3.01472 13.5 5.5V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M8.99609 14.5H9.00508" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                             </svg> </button>

                     </div>
                 </a>

             </div>
         </div>
     </section>

 </main>
 <div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>