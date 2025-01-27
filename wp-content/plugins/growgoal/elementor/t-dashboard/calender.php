 der>

 <main class="twg-flex-1 twg-flex twg-flex-col  lg:twg-max-h-[calc(100svh-90px)] max-lg:twg-max-h-[calc(100svh-69px)] ">

     <section class="twg-flex-1 twg-pt-5 twg-flex twg-h-full max-lg:twg-flex-col max-lg:twg-overflow-y-auto max-lg:twg-px-4 max-lg:twg-space-y-6 max-lg:twg-pb-5 twg-relative twg-main-content-section">
         <!-- Menubar -->
         <?php include GROWGOAL_PLUGIN_DIR . 'elementor/t-dashboard/parts/menu.php'; ?>
         <div class="twg-main-wrapper-content lg:twg-flex-1 lg:twg-overflow-y-auto lg:twg-px-5 max-lg:!twg-mt-0">
             <div class="twg-custom-calendar twg-pb-5 twg-rounded-lg twg-border twg-border-[#ddd]">
                 <div id="calendar"></div>
             </div>
         </div>
     </section>
     <div id="twg_scheduler_modal" class="twg-model twg-fixed twg-hidden twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-end twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
         <div class="twg-max-w-330px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[18px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-5 twg-relative"> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5"> <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                 </svg> </button>
             <div class="twg-relative twg-space-y-5 twg-w-full">
                 <div class="twg-text-lg twg-font-semibold twg-mb-4">January</div> <!-- TODO: if you need to use full calendar for the scheduler popup un commit this code  --> <!-- <div id="twgCustomCalendar" class="twg-rounded-lg twg-bg-white twg-shadow-md"></div> -->
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
                 <div class="twg-mt-8">
                     <div class="twg-font-medium twg-text-16px twg-text-[#333333] twg-mb-2 twg-flex twg-items-center twg-gap-7px"> <img src="../../../assets/images/Spiral-Calendar.png" class="twg-size-18px" alt=""> <span>Today</span> </div>
                     <ul class="twg-space-y-2">
                         <li class="twg-flex twg-justify-between twg-items-center twg-mb-2 twg-text-13px"> <span class="twg-font-semibold" style="color: #2C5A41"> <span style="color: #8FDCB2">●</span> Daily Standup </span> <span class="twg-text-[#333333] twg-font-semibold">08:00</span> </li>
                         <li class="twg-flex twg-justify-between twg-items-center twg-mb-2 twg-text-13px"> <span class="twg-font-semibold" style="color: #FF4D4F"> <span style="color: #FF4D4F">●</span> Budget Review </span> <span class="twg-text-[#333333] twg-font-semibold">09:00</span> </li>
                         <li class="twg-flex twg-justify-between twg-items-center twg-mb-2 twg-text-13px"> <span class="twg-font-semibold" style="color: #D48806"> <span style="color: #FFC069">●</span> Sasha Jay 121 </span> <span class="twg-text-[#333333] twg-font-semibold">10:00</span> </li>
                         <li class="twg-flex twg-justify-between twg-items-center twg-mb-2 twg-text-13px"> <span class="twg-font-semibold" style="color: #2C5A41"> <span style="color: #8FDCB2">●</span> Web Team Progress Update </span> <span class="twg-text-[#333333] twg-font-semibold">11:00</span> </li>
                         <li class="twg-flex twg-justify-between twg-items-center twg-mb-2 twg-text-13px"> <span class="twg-font-semibold" style="color: #2C5A41"> <span style="color: #8FDCB2">●</span> Social team briefing </span> <span class="twg-text-[#333333] twg-font-semibold">12:00</span> </li>
                     </ul>
                 </div>
                 <div class="twg-mt-8">
                     <div class="twg-font-medium twg-text-16px twg-text-[#333333] twg-mb-2 twg-flex twg-items-center twg-gap-7px"> <img src="../../../assets/images/Spiral-Calendar.png" class="twg-size-18px" alt=""> <span>Tomorrow</span> </div>
                     <ul class="twg-space-y-2">
                         <li class="twg-flex twg-justify-between twg-items-center twg-mb-2 twg-text-13px"> <span class="twg-font-semibold" style="color: #2C5A41"> <span style="color: #8FDCB2">●</span> Daily Standup </span> <span class="twg-text-[#333333] twg-font-semibold">08:00</span> </li>
                         <li class="twg-flex twg-justify-between twg-items-center twg-mb-2 twg-text-13px"> <span class="twg-font-semibold" style="color: #744DE6"> <span style="color: #744DE6">●</span> Tech Standup </span> <span class="twg-text-[#333333] twg-font-semibold">09:00</span> </li>
                         <li class="twg-flex twg-justify-between twg-items-center twg-mb-2 twg-text-13px"> <span class="twg-font-semibold" style="color: #744DE6"> <span style="color: #744DE6">●</span> Developer Progress </span> <span class="twg-text-[#333333] twg-font-semibold">10:00</span> </li>
                     </ul>
                 </div>
                 <div class="twg-mt-8">
                     <div class="twg-font-medium twg-text-16px twg-text-[#333333] twg-mb-2 twg-flex twg-items-center twg-gap-7px"> <img src="../../../assets/images/Airplane-icon.png" class="twg-size-18px" alt=""> <span>Tomorrow</span> </div>
                     <ul class="twg-space-y-2">
                         <li class="twg-flex twg-justify-between twg-items-center twg-text-13px"> <span class="twg-font-semibold" style="color: #2C5A41"> <span style="color: #8FDCB2">●</span> Bahamas </span> <span class="twg-text-[#333333] twg-font-semibold">01-02 to 14-02</span> </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </main>
 <div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>