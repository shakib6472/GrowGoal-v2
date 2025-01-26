<main class="twg-flex-1 twg-flex twg-flex-col  lg:twg-max-h-[calc(100svh-90px)] max-lg:twg-max-h-[calc(100svh-69px)] ">
  <section class="twg-flex-1 twg-pt-5 twg-flex twg-h-full lg:twg-pr-4 max-lg:twg-flex-col max-lg:twg-overflow-y-auto max-lg:twg-px-4 max-lg:twg-space-y-6 max-lg:twg-pb-5 twg-relative twg-main-content-section">

  <?php include GROWGOAL_PLUGIN_DIR . 'elementor/dashboard/parts/menu.php'; ?>

    <div
      class="twg-lesson-content twg-main-wrapper-content lg:twg-flex-1 lg:twg-overflow-y-auto lg:twg-pl-5 lg:twg-pr-3 max-lg:!twg-mt-0">
      <h1 class="main-heading">Lessons</h1>
      <div
        class="lg:twg-mt-20px max-lg:twg-mt-8px lg:twg-mb-30px max-lg:twg-mb-15px twg-grid twg-grid-cols-3 lg:twg-gap-5 mm-sm-lg:twg-gap-3 max-sm:twg-gap-2">
        <div class="twg-bg-primary-100 twg-rounded-lg twg-overflow-hidden">
          <div class="twg-flex twg-h-full">
            <div
              class="sm:twg-p-5 max-sm:twg-p-3 twg-flex sm:twg-items-end twg-justify-center twg-flex-col twg-flex-1">
              <div class="twg-text-center">
                <h4 class="twg-text-16px twg-font-bold twg-text-white">12</h4>
                <h4 class="twg-text-12px twg-text-white twg-uppercase">Total</h4>
              </div>
            </div>
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/lesson-total-banner.svg'; ?>"
              class="twg-aspect-square max-sm:twg-hidden"
              alt="" />
          </div>
        </div>
        <div class="twg-relative">
          <div class="twg-bg-success-200 twg-rounded-lg twg-relative">
            <div
              class="sm:twg-p-5 max-sm:twg-p-3 twg-flex twg-items-center twg-h-full">
              <div
                class="twg-flex sm:twg-items-end twg-justify-center twg-flex-col twg-flex-1">
                <div class="twg-text-center">
                  <h4 class="twg-text-16px twg-font-bold twg-text-white">2</h4>
                  <h4 class="twg-text-12px twg-text-white twg-uppercase">
                    Completed
                  </h4>
                </div>
              </div>
              <img
                src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/lesson-completed-banner.svg'; ?>"
                class="max-sm:twg-hidden"
                alt="" />
            </div>
          </div>
          <img
            src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/bella-1-wrapper.svg'; ?>"
            class="twg-absolute -twg-top-17px twg-right-2 max-sm:twg-hidden"
            alt="" />
        </div>
        <div
          class="twg-border-light-600 twg-border twg-border-dashed twg-rounded-lg twg-overflow-hidden">
          <div
            class="sm:twg-p-5 max-sm:twg-p-3 twg-flex twg-items-center twg-justify-center twg-flex-col twg-flex-1">
            <div class="twg-text-center">
              <h4 class="twg-text-16px twg-font-bold twg-text-light-700">10</h4>
              <h4 class="twg-text-12px twg-text-light-700 twg-uppercase">
                Upcoming
              </h4>
            </div>
          </div>
        </div>
      </div>
      <div
        class="twg-flex md:twg-items-center md:twg-justify-between max-md:twg-gap-2 max-md:twg-flex-col">
        <h1 class="main-heading">Schedule a Lesson</h1>
        <div
          class="twg-flex twg-items-center md:twg-justify-end max-md:twg-flex-wrap twg-gap-10px">
          <div class="twg-relative select-container">
            <select
              class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-37px twg-w-116px">
              <option
                value="mathematics"
                class="twg-text-10px twg-text-dark-100"
                selected>
                Mathematics
              </option>
              <option value="profile1" class="twg-text-10px twg-text-dark-100">
                Profile 1
              </option>
              <option value="profile2" class="twg-text-10px twg-text-dark-100">
                Profile 2
              </option>
              <option value="profile3" class="twg-text-10px twg-text-dark-100">
                Profile 3
              </option>
            </select>
          </div>
          <div class="twg-relative select-container">
            <select
              class="twg-text-10px twg-font-semibold twg-rounded-10px twg-border !twg-border-light-800 twg-text-dark-100 !twg-ring-0 !twg-outline-none !twg-shadow-none twg-leading-[17px] twg-uppercase twg-h-37px twg-w-99px">
              <option
                value="available"
                class="twg-text-10px twg-text-dark-100"
                selected>
                Available
              </option>
              <option value="profile1" class="twg-text-10px twg-text-dark-100">
                Profile 1
              </option>
              <option value="profile2" class="twg-text-10px twg-text-dark-100">
                Profile 2
              </option>
              <option value="profile3" class="twg-text-10px twg-text-dark-100">
                Profile 3
              </option>
            </select>
          </div>
          <a href="/pages/student/schedule" class="twg-main-btn sm:twg-w-114px">
            Schedule
          </a>
        </div>
      </div>
      <div
        class="twg-grid mm-md-2xl:twg-grid-cols-2 2xl:twg-grid-cols-3 twg-gap-5 twg-mt-10px twg-pb-6px">

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Grammar Basics
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 1/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-success-300 twg-text-success-200 twg-border-success-200 ">
                Completed
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Introduction to sentence structure.Introduction to
              sentence structure.Introduction to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct
                2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Grammar Basics
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 2/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-success-300 twg-text-success-200 twg-border-success-200 ">
                Completed
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Introduction to sentence
              structure.Introduction to sentence structure.Introduction to sentence
              structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Grammar Basics
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 3/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-success-300 twg-text-success-200 twg-border-success-200 ">
                Completed
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Introduction to sentence structure.Introduction to sentence
              structure.Introduction to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-bg-secondary-400  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Grammar Basics
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 4/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-secondary-500 twg-text-primary-100 twg-border-primary-100 ">
                Today’s Lesson
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Mastering commas,
              periods, and other punctuation marks. Introduction to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

            <div class="twg-flex twg-gap-4 twg-mt-2px">

              <div
                class="twg-text-center ">
                <h3
                  class="lg:twg-text-20px max-lg:twg-text-17px twg-font-semibold twg-text-dark-100">
                  00
                </h3>
                <p class="twg-text-12px twg-text-dark-100 twg-uppercase">
                  Days
                </p>
              </div>

              <h3
                class="lg:twg-text-20px max-lg:twg-text-17px twg-font-semibold twg-text-dark-100 twg-self-start twg-leading-none twg-mt-3px">
                :
              </h3>

              <div
                class="twg-text-center twg-flex-1">
                <h3
                  class="lg:twg-text-20px max-lg:twg-text-17px twg-font-semibold twg-text-dark-100">
                  00
                </h3>
                <p class="twg-text-12px twg-text-dark-100 twg-uppercase">
                  Hours
                </p>
              </div>

              <h3
                class="lg:twg-text-20px max-lg:twg-text-17px twg-font-semibold twg-text-dark-100 twg-self-start twg-leading-none twg-mt-3px">
                :
              </h3>

              <div
                class="twg-text-center twg-flex-1">
                <h3
                  class="lg:twg-text-20px max-lg:twg-text-17px twg-font-semibold twg-text-dark-100">
                  20
                </h3>
                <p class="twg-text-12px twg-text-dark-100 twg-uppercase">
                  Minutes
                </p>
              </div>

              <h3
                class="lg:twg-text-20px max-lg:twg-text-17px twg-font-semibold twg-text-dark-100 twg-self-start twg-leading-none twg-mt-3px">
                :
              </h3>

              <div
                class="twg-text-center twg-flex-1">
                <h3
                  class="lg:twg-text-20px max-lg:twg-text-17px twg-font-semibold twg-text-dark-100">
                  30
                </h3>
                <p class="twg-text-12px twg-text-dark-100 twg-uppercase">
                  Seconds
                </p>
              </div>

            </div>

            <button
              class="twg-mt-5 twg-px-14px twg-py-10px twg-leading-none twg-rounded-lg twg-text-14px twg-font-medium twg-uppercase twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-37px twg-w-full twg-bg-primary-100 twg-text-white">
              Join Lesson
            </button>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Essay Writing Techniques
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 5/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 ">
                Upcoming
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Learn how to structure and write compelling essays. Introduction
              to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30
                PM
              </h5>
            </div>

            <button
              class="twg-mt-5 twg-px-14px twg-py-10px twg-leading-none twg-rounded-lg twg-text-14px twg-font-medium twg-uppercase twg-transition-opacity twg-duration-300 twg-ease-linear hover:twg-opacity-80 twg-h-37px twg-w-full  twg-bg-secondary-100 twg-text-dark-100">
              Book Lesson
            </button>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Essay Writing Techniques
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 6/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 ">
                Upcoming
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Learn how to structure and
              write compelling essays. Introduction to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday,
                30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Essay Writing
                  Techniques
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 7/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 ">
                Upcoming
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Learn how
              to structure and write compelling essays. Introduction to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Essay
                  Writing Techniques
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 8/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 ">
                Upcoming
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Learn how to structure and write compelling essays. Introduction to sentence
              structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Essay Writing Techniques
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 9/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 ">
                Upcoming
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Learn how to structure and write compelling essays. Introduction
              to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30
                PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Essay Writing Techniques
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson
                  10/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 ">
                Upcoming
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Learn how to structure and write compelling essays.
              Introduction to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Essay Writing Techniques
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 11/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 ">
                Upcoming
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Learn how to structure and
              write compelling essays. Introduction to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday,
                30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

        <a href="/pages/student/session/" class="twg-h-full">
          <div
            class="twg-border twg-h-full twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-p-16px  twg-flex twg-flex-col">
            <div class="twg-flex twg-items-start twg-justify-between twg-gap-4">
              <div class="twg-relative">
                <h3
                  class="lg:twg-text-16px max-lg:twg-text-14px twg-font-medium twg-text-dark-100">
                  Essay Writing
                  Techniques
                </h3>
                <h5
                  class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                  Lesson 12/12
                </h5>
              </div>
              <div
                class="twg-rounded-4px twg-overflow-hidden twg-border twg-h-21px twg-grid twg-place-items-center twg-uppercase twg-text-10px twg-font-medium twg-px-2  twg-bg-accent-200 twg-text-light-500 twg-border-light-500 ">
                Upcoming
              </div>
            </div>
            <p
              class="lg:twg-text-14px max-lg:twg-text-13px twg-text-dark-100 twg-mt-1 twg-mb-2">
              Learn how
              to structure and write compelling essays. Introduction to sentence structure.
            </p>
            <div
              class="twg-flex twg-items-center twg-justify-between twg-gap-4 twg-mt-auto">
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                Thursday, 30 Oct 2024
              </h5>
              <h5
                class="lg:twg-text-14px max-lg:twg-text-13px twg-text-light-800">
                03:00 PM – 03:30 PM
              </h5>
            </div>

          </div>
        </a>

      </div>
    </div>
    <div
      class="twg-lesson-content twg-main-wrapper-content lg:twg-h-full lg:twg-overflow-y-auto lg:twg-w-[362px] max-lg:twg-w-full max-lg:twg-pb-2 twg-border twg-border-dark-100/30 twg-rounded-10px twg-custom-shadow twg-pt-6 twg-px-4 lg:twg-ml-3 twg-hide-scrollbar">
      <h3 class="main-heading twg-flex twg-gap-2">
        <span>Leaderboard</span>
        <img
          src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/3d-gold-trophy.jpg'; ?>"
          class="lg:twg-size-30px max-lg:twg-size-24px"
          alt="" />
      </h3>
      <div
        class="lg:twg-mt-5 max-lg:twg-mt-3 twg-flex twg-flex-col twg-items-center twg-justify-center twg-text-center">
        <img
          src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profile-img.jpg'; ?>"
          class="lg:twg-w-77px max-lg:twg-w-60px"
          alt="" />
        <h4
          class="twg-mt-2 twg-mb-3 lg:twg-text-20px max-lg:twg-text-17px twg-font-semibold twg-text-dark-100">
          John Doe
        </h4>
        <button
          class="twg-px-14px twg-py-10px twg-leading-none twg-bg-dark-100 twg-border twg-border-dark-100 twg-rounded-full twg-text-14px twg-font-medium twg-text-white twg-transition-all twg-duration-300 twg-ease-linear hover:twg-bg-transparent hover:twg-text-dark-100 twg-h-37px">
          100% Completed
        </button>
      </div>
      <div class="lg:twg-mt-9 max-lg:twg-mt-5 twg-space-y-3 twg-pb-2">

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border  twg-border-dark-100/30 twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-1.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                85% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-secondary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-2.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                80% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-secondary-200  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            2
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-3.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-4.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-5.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-6.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-1.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-2.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-3.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-4.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-5.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

        <div
          class="twg-flex twg-items-center twg-justify-between twg-gap-5 twg-py-2 twg-pr-3 twg-pl-1 twg-rounded-10px twg-overflow-hidden twg-border twg-border-dark-100/0 twg-shadow-[3px_3px_0px_transprant] hover:twg-border-dark-100/30 hover:twg-custom-shadow  twg-transition-shadow twg-duration-300 twg-ease-linear">
          <div class="twg-flex twg-items-center twg-gap-3">
            <img
              src="<?php echo GROWGOAL_PLUGIN_URL . 'elementor/assets/images/leaderboard-profiles-img-6.jpg'; ?>"
              class="twg-rounded-full"
              alt="Michael Kopfler" />
            <div class="twg-relative">
              <h4
                class="twg-text-12px twg-leading-none twg-font-medium twg-text-dark-100">
                Michael Kopfler
              </h4>
              <h4
                class="twg-text-10px twg-leading-none twg-font-medium twg-text-light-800 twg-mt-3px">
                75% Complete
              </h4>
            </div>
          </div>
          <div
            class="twg-size-16px  twg-bg-primary-100  twg-rounded-full twg-text-white twg-text-10px twg-font-medium twg-grid twg-place-items-center twg-leading-none">
            1
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
<div class="twg-fixed twg-inset-0 twg-size-full twg-z-20 twg-backdrop-blur-[4px] twg-overlay twg-hidden"></div>