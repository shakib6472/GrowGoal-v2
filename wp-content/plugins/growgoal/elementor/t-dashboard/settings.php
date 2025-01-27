 <main class="twg-flex-1 twg-flex twg-flex-col  lg:twg-max-h-[calc(100svh-90px)] max-lg:twg-max-h-[calc(100svh-69px)] ">


     <section
         class="twg-flex-1 twg-pt-5 twg-flex twg-h-full max-lg:twg-flex-col max-lg:twg-overflow-y-auto max-lg:twg-px-4 max-lg:twg-space-y-6 max-lg:twg-pb-5 twg-relative twg-main-content-section">
         <!-- Menuber -->
         <?php include GROWGOAL_PLUGIN_DIR . 'elementor/t-dashboard/parts/menu.php'; ?>

         <div class="twg-main-wrapper-content lg:twg-flex-1 lg:twg-overflow-y-auto lg:twg-px-5 max-lg:!twg-mt-0">
             <h1 class="main-heading">Settings</h1>
             <div class="twg-flex max-md:twg-justify-center twg-gap-4 twg-mt-4 md:twg-mb-5 max-md:twg-mb-3"> <button data-target="twg-profile-details" class="twg-tabs-button max-md:!twg-px-5 active"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M3 21V19C3 16.7909 4.79086 15 7 15H11C13.2091 15 15 16.7909 15 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M16 3.12988C17.7699 3.58305 19.0078 5.17787 19.0078 7.00488C19.0078 8.83189 17.7699 10.4267 16 10.8799" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M21 20.9999V18.9999C20.9896 17.1845 19.7578 15.6037 18 15.1499" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </svg> <span class="max-md:twg-hidden">Account</span> </button> <button data-target="twg-profile-security" class="twg-tabs-button max-md:!twg-px-5"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <rect x="5" y="10.998" width="14" height="10" rx="2.66667" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                         <circle cx="12" cy="15.998" r="1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                         <path d="M8 10.998V6.99805C8 4.78891 9.79086 2.99805 12 2.99805C14.2091 2.99805 16 4.78891 16 6.99805V10.998" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </svg> <span class="max-md:twg-hidden">Security</span> </button> <button data-target="twg-payment-method" class="twg-tabs-button max-md:!twg-px-5"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M3 9H21M7 15H9M6.2 19H17.8C18.9201 19 19.4802 19 19.908 18.782C20.2843 18.5903 20.5903 18.2843 20.782 17.908C21 17.4802 21 16.9201 21 15.8V8.2C21 7.0799 21 6.51984 20.782 6.09202C20.5903 5.71569 20.2843 5.40973 19.908 5.21799C19.4802 5 18.9201 5 17.8 5H6.2C5.0799 5 4.51984 5 4.09202 5.21799C3.71569 5.40973 3.40973 5.71569 3.21799 6.09202C3 6.51984 3 7.07989 3 8.2V15.8C3 16.9201 3 17.4802 3.21799 17.908C3.40973 18.2843 3.71569 18.5903 4.09202 18.782C4.51984 19 5.07989 19 6.2 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                     </svg> <span class="max-md:twg-hidden">Payment Method</span> </button> </div>
             <div class="twg-tabs-content">
                 <div id="twg-profile-details"
                     class="twg-settings-tabs twg-rounded-10px lg:twg-p-20px max-lg:twg-p-14px lg:twg-mb-3 twg-border twg-border-dark-100/70 twg-custom-shadow active">
                     <div>
                         <h4 class="lg:twg-text-20px max-lg:twg-text-18px twg-text-primary-100 twg-font-medium twg-mt-6px twg-mb-2"> Profile Details </h4>
                         <div class="twg-flex md:twg-gap-26px max-md:twg-gap-13px max-md:twg-mt-3 twg-items-center max-md:twg-flex-col">
                             <div class="twg-size-100px twg-rounded-6px twg-bg-primary-100/80 twg-p-3 twg-overflow-hidden twg-relative">
                                 <div class="twg-size-full twg-rounded-6px twg-bg-accent-100/30"></div> <img src="../../../assets/images/Profile-Avatar.png" class="twg-absolute twg-left-0 twg-bottom-0 twg-w-full twg-h-90px twg-object-cover" alt="" />
                             </div>
                             <div class="twg-flex-1 twg-space-y-2">
                                 <div class="twg-flex twg-gap-4"> <button class="twg-main-btn !twg-bg-transparent !twg-text-primary-100 twg-border twg-border-primary-100"> Upload new photo </button> <button class="twg-main-btn !twg-bg-light-400 !twg-text-[#A8AAAE] twg-border twg-border-light-400"> Reset </button> </div>
                                 <p class="twg-text-12px twg-font-semibold twg-text-[#A8AAAE]"> Allowed JPG, GIF or PNG. Max size of 800K </p>
                             </div>
                         </div>
                         <form class="twg-grid md:twg-grid-cols-2 twg-gap-4 twg-mt-5 profile-details-form" id="profile-details-form">
                             <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col"> <label for="first_name" class="twg-text-14px twg-font-semibold twg-text-light-300"> First Name </label> <input type="text" id="first_name" name="first_name" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0" placeholder="Enter your first name" /> </div>
                             <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col"> <label for="last_name" class="twg-text-14px twg-font-semibold twg-text-light-300"> Last Name </label> <input type="text" id="last_name" name="last_name" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0" placeholder="Enter your last name" /> </div>
                             <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col"> <label for="email" class="twg-text-14px twg-font-semibold twg-text-light-300"> Email </label> <input type="email" id="email" name="email" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0" placeholder="Enter your email address" /> </div>
                             <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col"> <label for="phone" class="twg-text-14px twg-font-semibold twg-text-light-300"> Phone Number* </label> <input type="tel" id="phone" name="phone" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0" placeholder="Enter your phone number" /> </div>
                             <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col"> <label for="gender" class="twg-text-14px twg-font-semibold twg-text-light-300"> Gender </label> <select id="gender" name="gender" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0">
                                     <option disabled selected>Choose your Gender</option>
                                     <option value="male">Male</option>
                                     <option value="female">Female</option>
                                     <option value="other">Other</option>
                                 </select> </div>
                             <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col"> <label for="dob" class="twg-text-14px twg-font-semibold twg-text-light-300"> DOB </label> <input type="date" id="dob" name="dob" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0" placeholder="Enter your Date of Birth" /> </div>
                             <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col"> <label for="country" class="twg-text-14px twg-font-semibold twg-text-light-300"> Country </label> <select id="country" name="country" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0">
                                     <option disabled selected>Select your Country</option>
                                     <option value="usa">USA</option>
                                     <option value="canada">Canada</option>
                                     <option value="uk">UK</option>
                                 </select> </div>
                             <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col"> <label for="city" class="twg-text-14px twg-font-semibold twg-text-light-300"> City </label> <select id="city" name="city" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0">
                                     <option disabled selected>Select your City</option>
                                     <option value="new york">New York</option>
                                     <option value="toronto">Toronto</option>
                                     <option value="london">London</option>
                                 </select> </div>
                             <div class="twg-relative twg-gap-2 twg-flex twg-justify-end twg-col-span-full"> <button type="submit" class="twg-main-btn !twg-bg-light-400 !twg-text-dark-100 !twg-rounded-10px !twg-uppercase !twg-min-w-96px"> Cancel </button> <button type="submit" class="twg-main-btn !twg-rounded-10px !twg-uppercase !twg-min-w-77px"> Save </button> </div>
                         </form>
                     </div>
                 </div>
                 <div class="twg-space-y-5 twg-settings-tabs twg-pb-2" id="twg-profile-security">
                     <div class="twg-rounded-10px lg:twg-p-20px max-lg:twg-p-14px lg:twg-mb-3 twg-border twg-border-dark-100/70 twg-custom-shadow">
                         <h4 class="lg:twg-text-20px max-lg:twg-text-18px twg-text-primary-100 twg-font-medium twg-mt-6px twg-mb-2"> Reset your account password </h4>
                         <form class="twg-flex twg-flex-col twg-max-w-331px twg-gap-4 twg-mt-5 reset-account-password-form-1" id="reset-account-password-form-1">
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="res_current_password" class="twg-text-14px twg-text-light-300"> Current Password </label> <input type="password" id="res_current_password" name="res_current_password" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 focus:twg-border-primary-100 !twg-outline-none" placeholder="*********" /> </div>
                             <div class="twg-relative twg-gap-2 twg-flex twg-col-span-full"> <button data-target="reset-password_modal" class="twg-modal-open reset-account-password-submit twg-main-btn !twg-rounded-10px !twg-min-w-77px"> Change your password </button> </div>
                         </form>
                     </div>
                     <div class="twg-rounded-10px lg:twg-p-20px max-lg:twg-p-14px lg:twg-mb-3 twg-border twg-border-dark-100/70 twg-custom-shadow">
                         <h4 class="lg:twg-text-20px max-lg:twg-text-18px twg-text-primary-100 twg-font-medium twg-mt-6px twg-mb-2"> Two-steps verification </h4>
                         <div class="twg-flex twg-flex-col twg-max-w-525px twg-gap-2 twg-mt-5">
                             <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-300"> Two-factor authentication is not enabled yet. </p>
                             <p class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-300"> Two-factor authentication adds a layer of security to your account by requiring more than just a password to log in. Learn more. </p>
                             <div class="twg-relative twg-gap-2 twg-flex twg-col-span-full twg-mt-2"> <button type="submit" class="reset-account-password-submit twg-main-btn !twg-rounded-10px !twg-min-w-77px !twg-h-auto !twg-min-h-37px"> Enable two-factor authentication </button> </div>
                         </div>
                     </div>
                 </div>
                 <div id="reset-password_modal"
                     class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
                     <div class="twg-max-w-688px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white lg:twg-p-[30px] max-lg:twg-px-[20px] max-lg:twg-py-[27px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-5 twg-relative">
                         <h3 class="twg-text-20px twg-font-semibold twg-text-primary-100 twg-w-full"> Reset your account password </h3> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                             <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                             </svg>
                         </button>

                         <form class="twg-grid md:twg-grid-cols-2 twg-gap-4 twg-w-full twg-mt-5 reset-account-password-form-2" id="reset-account-password-form-2">
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col twg-col-span-full"> <label for="reset_model_current_password" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Current Password</span> <button class="twg-text-primary-100 twg-font-medium"> Forgot password? </button> </label> <input type="password" id="reset_model_current_password" name="reset_model_current_password" class="twg-py-10px twg-px-4  twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px  twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0  focus:twg-border-primary-100 !twg-outline-none" placeholder="*********" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col "> <label for="new_password" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Enter your new Password</span> </label> <input type="password" id="new_password" name="new_password" class="twg-py-10px twg-px-4 twg-border  twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px  twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0  focus:twg-border-primary-100 !twg-outline-none" placeholder="*********" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col "> <label for="n_confirm_password" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Confirm Password</span> </label> <input type="password" id="n_confirm_password" name="n_confirm_password" class="twg-py-10px twg-px-4  twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px  twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0  focus:twg-border-primary-100 !twg-outline-none" placeholder="*********" /> </div>
                             <div class="twg-relative lg:twg-gap-4 max-lg:twg-gap-2 twg-flex max-lg:twg-flex-col twg-col-span-full"> <button type="button" class="twg-model-close twg-main-btn !twg-bg-light-400 !twg-text-dark-100 !twg-rounded-10px !twg-uppercase !twg-min-w-96px"> Cancel </button> <button data-target="twg_email_confirmation_modal" class="twg-modal-open reset-account-password-submit twg-main-btn !twg-rounded-10px !twg-uppercase !twg-min-w-77px"> Change your password </button> </div>
                         </form>
                     </div>
                 </div>
                 <div id="twg_email_confirmation_modal"
                     class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
                     <div class="twg-max-w-466px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white lg:twg-p-[30px] max-lg:twg-px-[20px] max-lg:twg-py-[27px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-5 twg-relative">
                         <h3 class="twg-text-20px twg-font-semibold twg-text-primary-100 twg-w-full"> Email Confirmation </h3>
                         <p class="twg-text-14px twg-text-light-300 twg-w-full"> We will send a code on your email for confirmation. </p> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                             <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                             </svg>
                         </button>

                         <form class="twg-grid md:twg-grid-cols-2 twg-gap-4 twg-w-full reset-email-form" id="reset-email-form">
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col twg-col-span-full"> <label for="enter_your_email" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Enter your Email</span> </label> <input type="email" id="enter_your_email" name="enter_your_email" class="twg-py-10px twg-px-4  twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px  twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0  focus:twg-border-primary-100 !twg-outline-none" placeholder="abc123@email.com" /> </div>
                             <div class="twg-relative lg:twg-gap-4 max-lg:twg-gap-2 twg-flex max-lg:twg-flex-col twg-col-span-full"> <button type="button" class="twg-model-close twg-main-btn !twg-bg-light-400 !twg-text-dark-100 !twg-rounded-10px !twg-uppercase !twg-min-w-96px"> Cancel </button> <button data-target="otp_confirmation_modal" class="twg-modal-open reset-account-password-submit twg-main-btn !twg-rounded-10px !twg-uppercase !twg-min-w-77px"> Send </button> </div>
                         </form>
                     </div>
                 </div>
                 <div id="otp_confirmation_modal"
                     class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
                     <div class="twg-max-w-415px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white lg:twg-p-[30px] max-lg:twg-px-[20px] max-lg:twg-py-[27px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-5 twg-relative">
                         <h3 class="twg-text-20px twg-font-semibold twg-text-primary-100 twg-w-full"> OTP Confirmation </h3>
                         <p class="twg-text-14px twg-text-light-300 twg-w-full"> To reset a password write a 4 digit code sent to emailabc123@gmail.com </p>
                         <div class="twg-grid twg-grid-cols-4 md:twg-gap-5 max-md:twg-gap-3 twg-w-full">
                             <div class="twg-aspect-square twg-rounded-8px twg-p-4 twg-bg-primary-100/5 twg-border twg-border-primary-100/50 twg-grid twg-place-items-center"> <span class="twg-text-24px twg-text-primary-100">0</span> </div>
                             <div class="twg-aspect-square twg-rounded-8px twg-p-4 twg-bg-primary-100/5 twg-border twg-border-primary-100/50 twg-grid twg-place-items-center"> <span class="twg-text-24px twg-text-primary-100">0</span> </div>
                             <div class="twg-aspect-square twg-rounded-8px twg-p-4 twg-bg-primary-100/5 twg-border twg-border-primary-100/50 twg-grid twg-place-items-center"> <span class="twg-text-24px twg-text-primary-100">0</span> </div>
                             <div class="twg-aspect-square twg-rounded-8px twg-p-4 twg-bg-primary-100/5 twg-border twg-border-primary-100/50 twg-grid twg-place-items-center"> <span class="twg-text-24px twg-text-primary-100">0</span> </div>
                         </div>
                         <div class="twg-relative lg:twg-gap-4 max-lg:twg-gap-2 twg-flex max-lg:twg-flex-col twg-w-full"> <button type="button" class="twg-model-close twg-main-btn !twg-bg-light-400 !twg-text-dark-100 !twg-rounded-10px !twg-uppercase !twg-min-w-96px"> Cancel </button> <button class="twg-modal-open reset-account-password-submit twg-main-btn !twg-rounded-10px !twg-uppercase !twg-min-w-77px"> Send </button> </div>
                     </div>
                 </div>
                 <div class="twg-space-y-5 twg-settings-tabs twg-pb-2" id="twg-payment-method">
                     <div class="twg-rounded-10px lg:twg-p-20px max-lg:twg-p-14px lg:twg-mb-3 twg-border twg-border-dark-100/70 twg-custom-shadow">
                         <div class="twg-flex twg-items-center twg-justify-between twg-gap-3">
                             <h4 class="lg:twg-text-15px max-lg:twg-text-13px twg-text-[#4B465C] twg-mb-2"> My Card </h4> <button data-target="new_payment_details_modal" class="twg-modal-open twg-main-btn"> Add New Card </button>
                         </div>
                         <div class="twg-space-y-4 twg-mt-4">
                             <div class="twg-space-y-4">
                                 <div class="twg-flex twg-justify-between twg-bg-[#4B465C] twg-bg-opacity-5 twg-p-4 twg-rounded-lg twg-shadow-md twg-gap-4 max-lg:twg-flex-col">
                                     <div class="twg-relative twg-space-y-4"> <i class="fa-brands fa-cc-mastercard twg-text-25px twg-text-dark-100"></i>
                                         <div>
                                             <div class="twg-flex twg-items-center twg-space-x-2">
                                                 <div class="twg-text-15px twg-font-medium twg-text-[#4B465C]"> Tom McBride </div> <span class="twg-text-sm twg-text-primary-100 twg-bg-primary-100/10 twg-leading-[24px] twg-h-24px twg-w-68px twg-rounded twg-text-center">Primary</span>
                                             </div>
                                         </div>
                                         <div class="twg-text-sm twg-text-light-300"> **** **** **** 9856 </div>
                                     </div>
                                     <div class="twg-flex lg:twg-flex-col max-lg:twg-flex-col-reverse twg-gap-3 lg:twg-justify-between lg:twg-items-end"> <!-- Buttons -->
                                         <div class="twg-flex lg:twg-items-center max-lg:twg-flex-wrap max-lg:twg-justify-end twg-gap-2"> <button data-target="edit_payment_details_modal" class="twg-main-btn twg-modal-open  !twg-bg-primary-100/10 !twg-text-primary-100 twg-min-w-70px"> Edit </button> <button data-target="" class="twg-main-btn !twg-bg-[#A8AAAE] !twg-bg-opacity-15 !twg-text-[#A8AAAE] twg-min-w-70px"> Delete </button> </div> <!-- Expiry Info -->
                                         <div class="twg-text-sm twg-text-light-300"> Card expires at 12/26 </div>
                                     </div>
                                 </div>
                                 <div class="twg-flex twg-justify-between twg-bg-[#4B465C] twg-bg-opacity-5 twg-p-4 twg-rounded-lg twg-shadow-md twg-gap-4 max-lg:twg-flex-col">
                                     <div class="twg-relative twg-space-y-4"> <i class="fa-brands fa-cc-visa twg-text-25px twg-text-dark-100"></i>
                                         <div>
                                             <div class="twg-flex twg-items-center twg-space-x-2">
                                                 <div class="twg-text-15px twg-font-medium twg-text-[#4B465C]"> Mildred Wagner </div>
                                             </div>
                                         </div>
                                         <div class="twg-text-sm twg-text-light-300"> **** **** **** 5823 </div>
                                     </div>
                                     <div class="twg-flex lg:twg-flex-col max-lg:twg-flex-col-reverse twg-gap-3 lg:twg-justify-between lg:twg-items-end"> <!-- Buttons -->
                                         <div class="twg-flex lg:twg-items-center max-lg:twg-flex-wrap max-lg:twg-justify-end twg-gap-2"> <button data-target="" class="twg-main-btn !twg-bg-primary-100/10 !twg-text-primary-100 twg-min-w-70px"> Make Primary </button> <button data-target="edit_payment_details_modal" class="twg-main-btn twg-modal-open  !twg-bg-primary-100/10 !twg-text-primary-100 twg-min-w-70px"> Edit </button> <button data-target="" class="twg-main-btn !twg-bg-[#A8AAAE] !twg-bg-opacity-15 !twg-text-[#A8AAAE] twg-min-w-70px"> Delete </button> </div> <!-- Expiry Info -->
                                         <div class="twg-text-sm twg-text-light-300"> Card expires at 10/27 </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div id="edit_payment_details_modal"
                     class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
                     <div class="twg-max-w-500px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white lg:twg-p-[30px] max-lg:twg-px-[20px] max-lg:twg-py-[27px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-5 twg-relative">
                         <h3 class="twg-text-20px twg-font-semibold twg-text-primary-100 twg-w-full"> Edit Payment Details </h3> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                             <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                             </svg>
                         </button>
                         <form class="twg-grid md:twg-grid-cols-2 twg-gap-4 twg-w-full edit-payment-details-form" id="edit-payment-details-form">
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="card-number" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Card Number</span> </label> <input type="text" id="card-number" name="card_number" class="twg-input twg-w-full twg-h-40px twg-border twg-rounded-lg" placeholder="0000 0000 0000 0000" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="cardholder-name" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Name</span> </label> <input type="text" id="cardholder-name" name="cardholder_name" class="twg-input  twg-w-full twg-h-40px twg-border twg-rounded-lg" placeholder="John Smith" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="expiry-date" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Expiry Date</span> </label> <input type="text" id="expiry-date" name="expiry_date" class="twg-input twg-w-full twg-h-40px twg-border  twg-rounded-lg" placeholder="MM/YY" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="cvc" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>CVC</span> </label> <input type="password" id="cvc" name="cvc" class="twg-input twg-w-full twg-h-40px  twg-border twg-rounded-lg" placeholder="000" /> </div>
                             <div class="twg-relative lg:twg-gap-4 max-lg:twg-gap-2 twg-flex max-lg:twg-flex-col twg-col-span-full"> <button type="button" class="twg-model-close twg-main-btn !twg-bg-light-400 !twg-text-dark-100 !twg-rounded-10px !twg-uppercase !twg-min-w-96px"> Cancel </button> <button type="button" class="edit-payment-details-submit twg-main-btn !twg-rounded-10px !twg-uppercase !twg-min-w-77px"> Save </button> </div>
                         </form>
                     </div>
                 </div>
                 <div id="new_payment_details_modal"
                     class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-[100svh]">
                     <div class="twg-max-w-540px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white lg:twg-p-[30px] max-lg:twg-px-[20px] max-lg:twg-py-[27px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-5 twg-relative">
                         <h3 class="twg-text-20px twg-font-semibold twg-text-primary-100 twg-w-full"> Add New Payment Details </h3> <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
                             <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z" fill="black" fill-opacity="0.5" />
                             </svg>
                         </button>
                         <form class="twg-grid md:twg-grid-cols-2 twg-gap-4 twg-w-full edit-payment-details-form" id="edit-payment-details-form">
                             <h3 class="twg-text-17px twg-font-medium twg-text-[#68676C] twg-col-span-full"> Card Details </h3>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="card-number" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Card Number</span> </label> <input type="text" id="card-number" name="card_number" class="twg-input twg-w-full twg-h-40px    twg-border twg-rounded-lg" placeholder="0000 0000 0000 0000" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="cardholder-name" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Name</span> </label> <input type="text" id="cardholder-name" name="cardholder_name" class="twg-input twg-w-full twg-h-40px twg-border twg-rounded-lg" placeholder="John Smith" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="expiry-date" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Expiry Date</span> </label> <input type="text" id="expiry-date" name="expiry_date" class="twg-input twg-w-full    twg-h-40px twg-border twg-rounded-lg" placeholder="MM/YY" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col"> <label for="cvc" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>CVC</span> </label> <input type="password" id="cvc" name="cvc" class="twg-input    twg-w-full twg-h-40px twg-border twg-rounded-lg" placeholder="000" /> </div>
                             <h3 class="twg-text-17px twg-font-medium twg-text-[#68676C] twg-col-span-full"> Billing Address </h3>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col "> <label for="first-name" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>First Name</span> </label> <input type="text" id="first-name" name="first_name" class="twg-input twg-w-full twg-h-40px    twg-border twg-rounded-lg" placeholder="John" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col "> <label for="last-name" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Last Name</span> </label> <input type="text" id="last-name" name="last_name" class="twg-input    twg-w-full twg-h-40px twg-border twg-rounded-lg" placeholder="Smith" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col twg-col-span-full"> <label for="address" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Address</span> </label> <input type="text" id="address" name="address_line_1" class="twg-input twg-w-full twg-h-40px twg-border twg-rounded-lg" placeholder="Address Line 1" /> <input type="text" id="address-line-2" name="address_line_2" class="twg-input twg-w-full twg-h-40px    twg-border twg-rounded-lg !twg-mt-2" placeholder="Address Line 2 (optional)" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col "> <label for="city" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>City</span> </label> <input type="text" id="city" name="city" class="twg-input twg-w-full twg-h-40px twg-border    twg-rounded-lg" placeholder="City" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col "> <label for="state" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>State / Province</span> </label> <input type="text" id="state" name="state" class="twg-input twg-w-full    twg-h-40px twg-border twg-rounded-lg" placeholder="State / Province" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col "> <label for="zip-code" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Zip / Postal Code</span> </label> <input type="text" id="zip-code" name="zip_code" class="twg-input twg-w-full twg-h-40px twg-border    twg-rounded-lg" placeholder="Zip / Postal Code" /> </div>
                             <div class="twg-relative twg-gap-y-6px twg-flex twg-flex-col "> <label for="country" class="twg-text-14px twg-text-light-300 twg-flex twg-gap-3 twg-justify-between"> <span>Country</span> </label> <input type="text" id="country" name="country" class="twg-input    twg-w-full twg-h-40px twg-border twg-rounded-lg" placeholder="Country" /> </div>
                             <div class="twg-relative lg:twg-gap-4 max-lg:twg-gap-2 twg-flex max-lg:twg-flex-col twg-col-span-full twg-pt-4"> <button type="button" class="twg-model-close twg-main-btn !twg-bg-light-400 !twg-text-dark-100 !twg-rounded-10px !twg-uppercase !twg-min-w-96px"> Cancel </button> <button class="edit-payment-details-submit twg-main-btn !twg-rounded-10px !twg-uppercase !twg-min-w-77px"> Save </button> </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </main>
 <div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>