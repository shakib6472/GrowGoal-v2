<!-- Loader -->
<div class="gg-preloader">
  <div class="loader"></div>
  <div class="loading-text">Registering as Student...</div>
</div>


<main class="twg-flex-1 twg-flex twg-flex-col  twg-h-screen ">
  <section class="lg:twg-pl-20 max-lg:twg-px-5 lg:twg-py-20 max-lg:twg-py-6 twg-max-w-[1440px] twg-mx-auto twg-w-full twg-flex flex-col twg-items-center twg-justify-center twg-space-y-10">
    <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/concept-back-school-img.png'; ?> " alt="" class="twg-absolute twg-left-560px twg-top-5 max-lg:twg-hidden" />
    <div class="lg:twg-max-w-560px max-lg:twg-max-w-544px twg-w-full twg-flex twg-flex-col max-lg:twg-mx-auto">
      <div class="twg-flex twg-items-center max-lg:twg-mx-auto twg-justify-between twg-gap-5 twg-w-full">
        <img
          src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/growgoal-dark-logo.png'; ?> "
          class="lg:twg-w-257px max-lg:twg-w-150px"
          alt="" />
      </div>
      <div
        class="twg-mt-8 twg-max-w-544px twg-w-full lg:twg-space-y-10 max-lg:twg-space-y-6">
        <div>
          <h1
            class="twg-text-primary-100 twg-font-bold lg:twg-text-32px max-lg:twg-text-26px">
            Create Your Account
          </h1>
          <p class="lg:twg-text-16px max-lg:twg-text-14px twg-text-light-200">
            Join us to unlock your potential!
          </p>
        </div>

        <form class="twg-space-y-5 sign-up-form gg-st-registration-form" id="sign-up-form">

          <div class="twg-grid lg:twg-grid-cols-2 twg-gap-5">

            <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
              <label
                class="twg-text-14px twg-font-semibold twg-text-light-300"
                for="firstName">
                First Name
              </label>
              <div class="twg-relative twg-text-light-300">
                <input
                  required
                  type="text"
                  name="firstName"
                  id="firstName"
                  class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                  placeholder="Enter your first name" />

              </div>
            </div>

            <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
              <label
                class="twg-text-14px twg-font-semibold twg-text-light-300"
                for="lastName">
                Last Name
              </label>
              <div class="twg-relative twg-text-light-300">
                <input
                  required
                  type="text"
                  name="lastName"
                  id="lastName"
                  class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                  placeholder="Enter your last name" />

              </div>
            </div>

          </div>

          <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
            <label
              class="twg-text-14px twg-font-semibold twg-text-light-300"
              for="email">
              Email
            </label>
            <div class="twg-relative twg-text-light-300">
              <input
                required
                type="email"
                name="email"
                id="email"
                autofocus
                autocomplete="email"
                class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                placeholder="Enter your email address." />

            </div>
          </div>

          <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
            <label
              class="twg-text-14px twg-font-semibold twg-text-light-300"
              for="dob">
              Date of Birth
            </label>
            <div class="twg-relative twg-text-light-300">
              <input
                required
                type="date"
                name="dob"
                id="dob"
                class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                placeholder="Enter date of birth"
                max="2019-12-31" />

            </div>
          </div>

          <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
            <label
              class="twg-text-14px twg-font-semibold twg-text-light-300"
              for="password">
              Password
            </label>
            <div class="twg-relative twg-text-light-300">
              <input
                required
                type="password"
                name="password"
                id="password"
                class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                placeholder="Enter
your password." />

              <button
                type="button"
                class="password-viewer-button twg-absolute twg-top-1/2 -twg-translate-y-1/2 twg-right-5"
                data-target="password">
                <i class="fa-solid fa-eye"></i>
              </button>

            </div>
          </div>

          <div class="twg-relative twg-gap-y-1 twg-flex twg-flex-col">
            <label
              class="twg-text-14px twg-font-semibold twg-text-light-300"
              for="confirmPassword">
              Confirm Password
            </label>
            <div class="twg-relative twg-text-light-300">
              <input
                required
                type="password"
                name="confirm_password"
                id="confirmPassword"
                class="twg-py-10px twg-px-4 twg-border twg-border-light-100 twg-text-14px twg-bg-transparent twg-rounded-lg !twg-shadow-none !twg-ring-0 twg-w-full"
                placeholder="Confirm your password." />

              <button
                type="button"
                class="password-viewer-button twg-absolute twg-top-1/2 -twg-translate-y-1/2 twg-right-5"
                data-target="confirmPassword">
                <i class="fa-solid fa-eye"></i>
              </button>

            </div>
          </div>

          <div class="twg-relative">
            <button
              type="submit"
              class="twg-w-full twg-px-28px twg-py-14px twg-bg-primary-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-white twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 sign-up-form-submit">
              Sign Up
            </button>
          </div>
          <!-- hidden  -->
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
                    Close
                  </button>
                </div>

              </div>
            </div>
          </div>
        </form>
        <div class="twg-flex twg-items-center twg-justify-center twg-relative">
          <div class="twg-px-4 twg-bg-white twg-relative twg-z-1">
            <p class="twg-text-dark-100 twg-text-15px">or</p>
          </div>
          <div
            class="twg-absolute twg-left-0 twg-top-50/100 -twg-translate-y-1/2 twg-bg-light-100 twg-h-1px twg-w-full"></div>
        </div>
        <div class="lg:twg-space-y-5 max-lg:twg-space-y-4">
          <button
            type="submit"
            class="twg-w-full twg-px-28px twg-py-14px twg-border twg-border-light-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
            <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/google-icon.svg'; ?>" class="twg-relative" alt="" />
            <span>Continue with Google</span>
          </button>
          <button
            type="submit"
            class="twg-w-full twg-px-28px twg-py-14px twg-border twg-border-light-100 twg-rounded-lg twg-text-16px twg-font-semibold twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
            <img src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/facebook-icon.svg'; ?>" class="twg-relative" alt="" />
            <span>Continue with Facebook</span>
          </button>
        </div>
        <div class="twg-flex twg-items-center twg-justify-center">
          <button
            type="submit"
            class="twg-text-16px twg-text-dark-100 twg-flex twg-items-center twg-justify-center twg-gap-2">
            <span>Don’t have an account?</span>
            <a
              href="/pages/student/sign-in/"
              class="twg-font-semibold twg-text-primary-100">Sign In</a>
          </button>
        </div>
      </div>
    </div>


    <dotlottie-player
      src="https://lottie.host/13f8bf1e-756b-4d17-a934-c973270fb9a6/FPKglFcAvC.lottie"
      background="transparent"
      speed="1"
      class=" max-lg:twg-hidden  xl:twg-max-w-[746px] mm-lg-xl:twg-max-w-[40%] twg-pointer-events-none"
      loop
      autoplay></dotlottie-player>


  </section>



</main>
<div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>