
<main class="twg-flex-1 twg-flex twg-flex-col ">

  <section
    class="lg:twg-pl-20 max-lg:twg-px-5 lg:twg-py-20 max-lg:twg-py-6 twg-max-w-[1440px] twg-mx-auto twg-w-full twg-flex flex-col twg-items-center twg-justify-center twg-space-y-10">
    <!-- Login Form -->
    <div class="lg:twg-max-w-560px max-lg:twg-max-w-544px twg-w-full twg-flex twg-flex-col max-lg:twg-mx-auto">
      <div class="twg-flex twg-items-center max-lg:twg-mx-auto twg-justify-between twg-gap-5 twg-w-full">
        <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/growgoal-dark-logo.png'; ?>" class="lg:twg-w-257px max-lg:twg-w-150px" alt="" />
        <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/concept-back-school.png' ?>" alt="" />
      </div>
      <div class="twg-mt-8 twg-max-w-544px twg-w-full lg:twg-space-y-10 max-lg:twg-space-y-6">
        <div>
          <h1 class="twg-text-primary-100 twg-font-bold lg:twg-text-32px max-lg:twg-text-26px">Welcome Back!</h1>
          <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200">Log in to continue learning and exploring.</p>
        </div>
        <form class="twg-space-y-5 gg-sign-in-form" id="sign-in-form">
          <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
            <label for="email" class="twg-text-14px twg-font-semibold twg-text-light-300">Email or username</label>
            <input type="text" id="email" name="username" required class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0" placeholder="Enter your email address." />
          </div>
          <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
            <label for="password" class="twg-text-14px twg-font-semibold twg-text-light-300">Password</label>
            <div class="twg-relative twg-text-light-300">
              <input type="password" required name="password" id="password" class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full" placeholder="Enter your password." />
              <button type="button" class="password-viewer-button twg-absolute twg-top-1/2 -twg-translate-y-1/2 twg-right-5" data-target="password">
                <i class="fa-solid fa-eye"></i>
              </button>
            </div>
          </div>
          <div class="twg-relative twg-gap-y-1 twg-flex twg-justify-end !twg-mt-3px">
            <button data-target="forgot_password" class="twg-modal-open twg-text-14px twg-font-semibold twg-text-primary-100 twg-underline">Forgot Password?</button>
          </div>
          <div class="twg-relative">
            <button type="submit" class="twg-w-full twg-px-28px twg-py-14px twg-bg-primary-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 sign-in-form-submit">Sign In</button>
          </div>
        </form>
        <div class="twg-flex twg-items-center twg-justify-center twg-relative">
          <div class="twg-px-4 twg-bg-white twg-relative twg-z-1">
            <p class="twg-text-dark-100 twg-text-15px">or</p>
          </div>
          <div class="twg-absolute twg-left-0 twg-top-50/100 -twg-translate-y-1/2 twg-bg-light-100 twg-h-1px twg-w-full"></div>
        </div>
        <div class="lg:twg-space-y-5 max-lg:twg-space-y-4">
          <button type="submit" class="twg-w-full twg-px-28px twg-py-14px twg-border twg-border-light-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
            <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/google-icon.svg' ?>" class="twg-relative" alt="" />
            <span>Continue with Google</span>
          </button>
          <button type="submit" class="twg-w-full twg-px-28px twg-py-14px twg-border twg-border-light-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
            <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/facebook-icon.svg' ?>" class="twg-relative" alt="" />
            <span>Continue with Facebook</span>
          </button>
        </div>
        <div class="twg-flex twg-items-center twg-justify-center">
          <button type="submit" class="twg-text-16px twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
            <span>Don’t have an account?</span>
            <a href="/pages/student/sign-up/" class="twg-font-semibold twg-text-primary-100">Sign Up</a>
          </button>
        </div>
      </div>
    </div>
    <dotlottie-player src="https://lottie.host/13f8bf1e-756b-4d17-a934-c973270fb9a6/FPKglFcAvC.lottie"
      background="transparent" speed="1"
      class=" max-lg:twg-hidden    xl:twg-max-w-[746px] mm-lg-xl:twg-max-w-[40%] twg-pointer-events-none" loop
      autoplay></dotlottie-player>
    <!-- Wrong username & Password -->
    <div id="wrong_password" class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
      <div class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-5 twg-relative">
        <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/forgot_password_img.svg'; ?>"
          alt="Forgot Password Image" />
        <button class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z"
              fill="black" fill-opacity="0.5" />
          </svg>
        </button>

        <div class="twg-relative twg-space-y-5 twg-w-full">
          <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px]">
            <h2 id="login_wrong_message" class="lg:twg-text-16px max-lg:twg-text-14px twg-font-light twg-text-red-500">
              Wrong Username or Password
            </h2>
          </div>
          <div class="twg-relative">
            <button type="button"
              class="twg-model-close twg-w-full twg-px-28px twg-py-14px twg-bg-primary-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80">
              Try Again
            </button>
          </div>

        </div>
      </div>
    </div>
    <!-- Forget Password -->
    <div id="forgot_password"
      class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
      <div
        class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-gap-5 twg-relative">
        <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/forgot_password_img.svg'; ?>"
          alt="Forgot Password Image" />
        <button
          class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z"
              fill="black" fill-opacity="0.5" />
          </svg>
        </button>

        <div class="twg-relative twg-space-y-5 twg-w-full">
          <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px]">
            <h2 class="lg:twg-text-20px max-lg:twg-text-18px twg-font-semibold twg-text-primary-100">
              Forgot Password?
            </h2>
            <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200 twg-text-center">
              Enter your email address to receive a password reset link.
            </p>
          </div>
          <form id="forgot-password-form" class="twg-space-y-5 forgot-password-form">
            <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
              <label for="forgot-password-email" class="twg-text-14px twg-font-semibold twg-text-light-300">Email
                Address</label>
              <input name="forgot-password-email" id="forgot-password-email" type="text"
                class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0"
                placeholder="Enter your registered email address." />
            </div>
            <div class="twg-relative">
              <button id="forgot-password-submit" data-target="reset_password" type="button"
                class="twg-modal-open twg-w-full twg-px-28px twg-py-14px twg-bg-primary-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 forgot-password-submit">
                Send Reset Link
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Reset Password -->
    <div id="reset_password"
      class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
      <div
        class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-relative">
        <dotlottie-player src="https://lottie.host/53c88bf4-c660-46af-bfd5-396eeee0b065/Gy7GeKasjl.lottie"
          background="transparent" speed="1" class="twg-w-155px twg-h-137px" loop autoplay></dotlottie-player>
        <button
          class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z"
              fill="black" fill-opacity="0.5" />
          </svg>
        </button>

        <div class="twg-relative twg-space-y-5 twg-w-full">
          <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px]">
            <h2 class="lg:twg-text-20px max-lg:twg-text-18px twg-font-semibold twg-text-primary-100">
              Reset Your Password
            </h2>
            <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200 twg-text-center">
              Enter your new password below.
            </p>
          </div>
          <form id="reset-password-form" class="twg-space-y-5 reset-password-form">
            <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
              <label for="reset-password-new-password" class="twg-text-14px twg-font-semibold twg-text-light-300">New
                Password</label>
              <input name="reset-password-new-password" id="reset-password-new-password" type="password"
                class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0"
                placeholder="Enter a new password" />
            </div>
            <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
              <label for="reset-password-confirm-password"
                class="twg-text-14px twg-font-semibold twg-text-light-300">Confirm Password</label>
              <input name="reset-password-confirm-password" id="reset-password-confirm-password" type="password"
                class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-light-300 twg-w-full twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0"
                placeholder="Re-enter your new password" />
            </div>
            <div class="twg-relative">
              <button id="reset-password-submit" data-target="reset_password_success" type="submit"
                class="twg-modal-open twg-w-full twg-px-28px twg-py-14px twg-bg-primary-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 reset-password-submit">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Reset Password Success -->
    <div id="reset_password_success"
      class="twg-model twg-hidden twg-fixed twg-inset-0 twg-size-full twg-z-[999999] twg-bg-dark-100/50 twg-place-items-center twg-overflow-y-auto twg-py-8 twg-px-5 twg-h-screen">
      <div
        class="twg-max-w-533px twg-w-full twg-z-10 twg-rounded-[10px] twg-bg-white twg-p-[30px] twg-flex twg-items-center twg-justify-center twg-flex-col twg-relative">
        <dotlottie-player src="https://lottie.host/5b51696d-dc20-48ff-812e-c12d4470e5be/GtF6zjkFgH.lottie"
          background="transparent" speed="1" class="twg-w-204px twg-h-146px" loop autoplay></dotlottie-player>
        <button
          class="twg-model-close twg-absolute lg:twg-top-30px max-lg:twg-top-20px lg:twg-right-30px max-lg:twg-right-20px twg-z-5">
          <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M0.46967 0.46967C0.762563 0.176777 1.23744 0.176777 1.53033 0.46967L5 3.93934L8.46967 0.46967C8.76256 0.176777 9.23744 0.176777 9.53033 0.46967C9.82322 0.762563 9.82322 1.23744 9.53033 1.53033L6.06066 5L9.53033 8.46967C9.82322 8.76256 9.82322 9.23744 9.53033 9.53033C9.23744 9.82322 8.76256 9.82322 8.46967 9.53033L5 6.06066L1.53033 9.53033C1.23744 9.82322 0.762563 9.82322 0.46967 9.53033C0.176777 9.23744 0.176777 8.76256 0.46967 8.46967L3.93934 5L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.46967Z"
              fill="black" fill-opacity="0.5" />
          </svg>
        </button>

        <div class="twg-relative twg-space-y-5 twg-w-full">
          <div class="twg-flex twg-flex-col twg-items-center twg-space-y-[10px]">
            <h2 class="lg:twg-text-20px max-lg:twg-text-18px twg-font-semibold twg-text-primary-100">
              Successful Reset
            </h2>
            <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200 twg-text-center">
              Your password has been successfully reset!
            </p>
          </div>
          <div class="twg-relative">
            <button type="button"
              class="twg-model-close twg-w-full twg-px-28px twg-py-14px twg-bg-primary-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80">
              Sign In
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>
<script src="../../../assets/js/script.js"></script>