


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Grow Goal | Sign Up</title>
  <link rel="stylesheet" href="../../../assets/css/tailwind.css" />
  <link rel="stylesheet" href="../../../assets/css/styles.css" />
  <link rel="icon" href="../../../assets/images/fav-icon.png" type="image/png" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

</head>

<body class="font-body bg-accent-100 twg-flex twg-flex-col twg-h-[100svh] twg-overflow-hidden">
  
  <main
    class="twg-flex-1 twg-flex twg-flex-col  twg-h-[100svh] ">
    



<section class=" twg-overflow-y-auto">
  <div class="twg-max-w-[1440px] twg-mx-auto twg-w-full">
    <div class="twg-overflow-x-hidden twg-flex twg-justify-between twg-gap-5 twg-py-4 lg:twg-pr-4">
      <div class="lg:twg-pl-20 max-lg:twg-px-5 lg:twg-pt-[63px] max-lg:twg-pt-6 twg-flex-1">
        <div class="lg:twg-max-w-560px max-lg:twg-max-w-544px twg-w-full twg-flex twg-flex-col max-lg:twg-mx-auto">
          <div class="twg-flex twg-items-center max-lg:twg-mx-auto twg-justify-between twg-gap-5 twg-w-full">
            <img src="../../../assets/images/growgoal-dark-logo.png" class="lg:twg-w-257px max-lg:twg-w-150px" alt="" />
            <img src="../../../assets/images/concept-back-school.png" alt="" />
          </div>
          <div class="twg-mt-8 twg-max-w-544px twg-w-full lg:twg-space-y-10 max-lg:twg-space-y-6">
            <div>
              <h1 class="twg-text-primary-100 twg-font-bold lg:twg-text-32px max-lg:twg-text-26px">
                Create Your Account
              </h1>
              <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200">
                Join us to unlock your potential!
              </p>
            </div>
            <form class="twg-space-y-5 sign-up-form" id="sign-up-form">
               
              <div class="twg-grid lg:twg-grid-cols-2 twg-gap-5">
                
                <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
                  <div class="twg-text-14px twg-font-semibold twg-text-light-300" for="firstName">
                    First Name
                  </div>
                  <div class="twg-relative twg-text-light-300">
                    
                    <input type="text" name="firstName" id="firstName"
                      class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                      placeholder="Enter your first name" />
                    
                    
                  </div>
                </div>
                  
                <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
                  <div class="twg-text-14px twg-font-semibold twg-text-light-300" for="lastName">
                    Last Name
                  </div>
                  <div class="twg-relative twg-text-light-300">
                    
                    <input type="text" name="lastName" id="lastName"
                      class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                      placeholder="Enter your last name" />
                    
                    
                  </div>
                </div>
                
              </div>
                
                <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
                  <div class="twg-text-14px twg-font-semibold twg-text-light-300" for="email">
                    Email
                  </div>
                  <div class="twg-relative twg-text-light-300">
                    
                    <input type="email" name="email" id="email"
                      class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                      placeholder="Enter your email address." />
                    
                    
                  </div>
                </div>
                  
                <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
                  <div class="twg-text-14px twg-font-semibold twg-text-light-300" for="password">
                    Password
                  </div>
                  <div class="twg-relative twg-text-light-300">
                    
                    <input type="password" name="password" id="password"
                      class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                      placeholder="Enter
your password." />
                    
                    
                    <button type="button"
                      class="password-viewer-button twg-absolute twg-top-1/2 -twg-translate-y-1/2 twg-right-5"
                      data-target="password">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                    
                  </div>
                </div>
                  
                <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
                  <div class="twg-text-14px twg-font-semibold twg-text-light-300" for="confirmPassword">
                    Confirm Password
                  </div>
                  <div class="twg-relative twg-text-light-300">
                    
                    <input type="password" name="confirmPassword" id="confirmPassword"
                      class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                      placeholder="Confirm your password." />
                    
                    
                    <button type="button"
                      class="password-viewer-button twg-absolute twg-top-1/2 -twg-translate-y-1/2 twg-right-5"
                      data-target="confirmPassword">
                      <i class="fa-solid fa-eye"></i>
                    </button>
                    
                  </div>
                </div>
                  
                <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
                  <div class="twg-text-14px twg-font-semibold twg-text-light-300" for="uploadResume">
                    Upload Resume
                  </div>
                  <div class="twg-relative twg-text-light-300">
                    
                    <label for="file-upload"
                      class="twg-block twg-border-2 twg-border-dashed twg-border-gray-300 twg-rounded-lg twg-p-4 twg-text-center twg-bg-white twg-space-y-1">
                      <div
                        class="twg-flex twg-justify-center twg-items-center twg-bg-[#F5F5F5] twg-text-primary-100 twg-size-44px twg-rounded-full twg-mx-auto">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M8.99994 17.7505C8.58994 17.7505 8.24994 17.4105 8.24994 17.0005V12.8105L7.52994 13.5305C7.23994 13.8205 6.75994 13.8205 6.46994 13.5305C6.17994 13.2405 6.17994 12.7605 6.46994 12.4705L8.46994 10.4705C8.67994 10.2605 9.00994 10.1905 9.28994 10.3105C9.56994 10.4205 9.74994 10.7005 9.74994 11.0005V17.0005C9.74994 17.4105 9.40994 17.7505 8.99994 17.7505Z"
                            fill="currentColor" />
                          <path
                            d="M10.9999 13.7504C10.8099 13.7504 10.6199 13.6804 10.4699 13.5304L8.46994 11.5304C8.17994 11.2404 8.17994 10.7604 8.46994 10.4704C8.75994 10.1804 9.23994 10.1804 9.52994 10.4704L11.5299 12.4704C11.8199 12.7604 11.8199 13.2404 11.5299 13.5304C11.3799 13.6804 11.1899 13.7504 10.9999 13.7504Z"
                            fill="currentColor" />
                          <path
                            d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H14C14.41 1.25 14.75 1.59 14.75 2C14.75 2.41 14.41 2.75 14 2.75H9C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V10C21.25 9.59 21.59 9.25 22 9.25C22.41 9.25 22.75 9.59 22.75 10V15C22.75 20.43 20.43 22.75 15 22.75Z"
                            fill="currentColor" />
                          <path
                            d="M22 10.7505H18C14.58 10.7505 13.25 9.42048 13.25 6.00048V2.00048C13.25 1.70048 13.43 1.42048 13.71 1.31048C13.99 1.19048 14.31 1.26048 14.53 1.47048L22.53 9.47048C22.74 9.68048 22.81 10.0105 22.69 10.2905C22.57 10.5705 22.3 10.7505 22 10.7505ZM14.75 3.81048V6.00048C14.75 8.58048 15.42 9.25048 18 9.25048H20.19L14.75 3.81048Z"
                            fill="currentColor" />
                        </svg>
                      </div>
                      <p class="twg-text-light-300 twg-text-14px">
                        <span class="twg-text-primary-100 twg-font-semibold">Click to Upload</span> or drag and drop
                      </p>
                      <p class="twg-text-light-300 twg-text-12px">(Max. File size: 25 MB)</p>
                      <input type="file" id="file-upload" class="twg-hidden" />
                    </label>
                    
                    
                  </div>
                </div>
                  
                <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
                  <div class="twg-text-14px twg-font-semibold twg-text-light-300" for="">
                    
                  </div>
                  <div class="twg-relative twg-text-light-300">
                    
                    <label class="twg-flex twg-items-center twg-gap-3">
                      <input type="checkbox"
                        class="twg-border twg-border-light-100 twg-bg-transparent twg-rounded !twg-shadow-none !twg-ring-0">
                      <span class="twg-text-14px twg-font-semibold twg-text-light-300">I agree to the <a href="#"
                          class="twg-text-primary-100">Terms and Conditions</a> and <a href="#"
                          class="twg-text-primary-100">Privacy Policy.</a></span>
                    </label>
                    
                    
                  </div>
                </div>
                 
              <div class="twg-relative">
                <button type="submit"
                  class="twg-w-full twg-px-28px twg-py-14px twg-bg-primary-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 sign-up-form-submit">
                  Sign Up
                </button>
              </div>
            </form>
            <div class="twg-flex twg-items-center twg-justify-center twg-relative">
              <div class="twg-px-4 twg-bg-white twg-relative twg-z-1">
                <p class="twg-text-dark-100 twg-text-15px">or</p>
              </div>
              <div
                class="twg-absolute twg-left-0 twg-top-50/100 -twg-translate-y-1/2 twg-bg-light-100 twg-h-1px twg-w-full">
              </div>
            </div>
            <div class="lg:twg-space-y-5 max-lg:twg-space-y-4">
              <button type="submit"
                class="twg-w-full twg-px-28px twg-py-14px twg-border twg-border-light-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
                <img src="../../../assets/images/google-icon.svg" class="twg-relative" alt="" />
                <span>Continue with Google</span>
              </button>
              <button type="submit"
                class="twg-w-full twg-px-28px twg-py-14px twg-border twg-border-light-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
                <img src="../../../assets/images/facebook-icon.svg" class="twg-relative" alt="" />
                <span>Continue with Facebook</span>
              </button>
            </div>
            <div class="twg-flex twg-items-center twg-justify-center">
              <button type="submit"
                class="twg-text-16px twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
                <span>Already have an account?</span>
                <a href="/pages/teacher/sign-in/" class="twg-font-semibold twg-text-primary-100">Sign In</a>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="max-lg:twg-hidden twg-w-51/100 twg-pointer-events-none twg-overflow-hidden">
        
        <div class="swiper-container auth-slider twg-relative twg-h-full">
          <div class="swiper-wrapper">
            
            <div class="swiper-slide">
              <img src="../../../assets/images/sign-in-img.png" alt="Teacher in classroom"
                class="twg-size-full twg-object-cover twg-rounded-2xl" />
            </div>
            
            <div class="swiper-slide">
              <img src="../../../assets/images/sign-in-img.png" alt="Teacher in classroom"
                class="twg-size-full twg-object-cover twg-rounded-2xl" />
            </div>
            
            <div class="swiper-slide">
              <img src="../../../assets/images/sign-in-img.png" alt="Teacher in classroom"
                class="twg-size-full twg-object-cover twg-rounded-2xl" />
            </div>
            
            <div class="swiper-slide">
              <img src="../../../assets/images/sign-in-img.png" alt="Teacher in classroom"
                class="twg-size-full twg-object-cover twg-rounded-2xl" />
            </div>
            
          </div>
          <!-- Pagination dots -->
          <div class="swiper-pagination auth-slider-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const authSlider = document.querySelector(".auth-slider");

    if (authSlider) {
      const swiper = new Swiper(authSlider, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

    }
  });
</script>
  </main>
  <div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>
  <script src="../../../assets/js/script.js"></script>
</body>

</html>