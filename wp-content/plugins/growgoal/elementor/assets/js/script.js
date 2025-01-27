

document.addEventListener("DOMContentLoaded", function () {
  const selectors = {
    modalOpen: ".twg-modal-open",
    modals: ".twg-model",
    modalCloses: ".twg-model-close",
    body: "body",
    headerSearchModal: ".twg-header-search-modal",
    overlay: ".twg-overlay",
    messageWrapper: ".twg-message-wrapper",
    messageSidebar: ".twg-message-sidebar",
    headerSidebarButton: ".twg-header-sidebar-button",
    mainSidebar: ".twg-main-aside",
    header: "header",
    headerSearchModalButton: ".twg-header-search-modal-button",
    headerSearchModalButtonClose: ".twg-header-search-modal-button-close",
    dropdownAction: ".dropdown-action",
    dropdownMenu: ".dropdown-menu",
    passwordViewerButton: ".password-viewer-button",
    twgToggle: ".twg-toggle",
    twgInput: ".twg-input",
    twgTrack: ".twg-track",
    twgThumb: ".twg-thumb",
    messageOpenBtn: ".twg-message-open-btn",
    messageCloseBtn: ".twg-message-close-btn",
  };

  const elements = {
    modalOpen: document.querySelectorAll(selectors.modalOpen),
    modals: document.querySelectorAll(selectors.modals),
    modalCloses: document.querySelectorAll(selectors.modalCloses),
    body: document.querySelector(selectors.body),
    headerSearchModal: document.querySelector(selectors.headerSearchModal),
    overlay: document.querySelector(selectors.overlay),
    messageWrapper: document.querySelector(selectors.messageWrapper),
    messageSidebar: document.querySelector(selectors.messageSidebar),
    headerSidebarButton: document.querySelector(selectors.headerSidebarButton),
    mainSidebar: document.querySelector(selectors.mainSidebar),
    header: document.querySelector(selectors.header),
    headerSearchModalButton: document.querySelector(
      selectors.headerSearchModalButton
    ),
    headerSearchModalButtonClose: document.querySelector(
      selectors.headerSearchModalButtonClose
    ),
  };

  const toggleClass = (element, className) => {
    element?.classList.toggle(className);
  };

  const addClass = (element, className) => {
    element?.classList.add(className);
  };

  const removeClass = (element, className) => {
    element?.classList.remove(className);
  };

  const setupModalHandlers = () => {
    elements.modalOpen?.forEach((btn) => {
      btn.onclick = (e) => {
        e.preventDefault();
        const modalId = btn.getAttribute("data-target");
        const modal = document.getElementById(modalId);

        elements.modals.forEach((mod) => {
          if (mod !== modal) {
            addClass(mod, "twg-hidden");
            removeClass(mod, "twg-grid");
          }
        });

        if (modal) {
          removeClass(modal, "twg-hidden");
          addClass(modal, "twg-grid");
          addClass(elements.body, "twg-overflow-hidden");
        }
      };
    });

    elements.modalCloses?.forEach((btn) =>
      btn.addEventListener("click", hideModal)
    );

    elements.modals.forEach((modal) => {
      modal.addEventListener("click", (e) => {
        if (e.target === modal) hideModal();
      });
    });

    function hideModal() {
      elements.modals.forEach((modal) => {
        addClass(modal, "twg-hidden");
        removeClass(modal, "twg-grid");
      });
      removeClass(elements.body, "twg-overflow-hidden");
    }
  };

  const setupSearchModalHandlers = () => {
    elements.headerSearchModalButton?.addEventListener("click", () => {
      removeClass(elements.headerSearchModal, "twg-hidden");
    });

    elements.headerSearchModalButtonClose?.addEventListener("click", () => {
      addClass(elements.headerSearchModal, "twg-hidden");
    });
  };

  const setupSidebarHandlers = () => {
    let isSidebarVisible = false;

    const toggleSidebar = () => {
      isSidebarVisible ? hideSidebar() : showSidebar();
      isSidebarVisible = !isSidebarVisible;
    };

    const showSidebar = () => {
      removeClass(elements.mainSidebar, "max-lg:-twg-translate-x-300px");
      removeClass(elements.overlay, "twg-hidden");
      addClass(elements.header, "twg-border-b");
      updateButtonIcon("fa-xmark", "fa-bars");
    };

    const hideSidebar = () => {
      addClass(elements.mainSidebar, "max-lg:-twg-translate-x-300px");
      addClass(elements.overlay, "twg-hidden");
      removeClass(elements.header, "twg-border-b");
      updateButtonIcon("fa-bars", "fa-xmark");
    };

    const updateButtonIcon = (addClass, removeClass) => {
      const icon = elements.headerSidebarButton.querySelector("i");
      icon?.classList.add(addClass);
      icon?.classList.remove(removeClass);
    };

    elements.headerSidebarButton?.addEventListener("click", toggleSidebar);
    elements.overlay?.addEventListener("click", hideSidebar);
  };

  const setupDropdownHandlers = () => {
    document.querySelectorAll(selectors.dropdownAction).forEach((button) => {
      button.addEventListener("click", (event) => {
        event.stopPropagation();
        const dropdownMenu = button.nextElementSibling;
        toggleClass(dropdownMenu, "twg-hidden");

        document
          .querySelectorAll(
            `${selectors.dropdownMenu}:not(.dropdown-menu-always-open)`
          )
          .forEach((menu) => {
            if (menu !== dropdownMenu) addClass(menu, "twg-hidden");
          });
      });
    });

    document.addEventListener("click", () => {
      document
        .querySelectorAll(
          `${selectors.dropdownMenu}:not(.dropdown-menu-always-open)`
        )
        .forEach((menu) => {
          addClass(menu, "twg-hidden");
        });
    });
  };

  const setupPasswordViewerHandlers = () => {
    document
      .querySelectorAll(selectors.passwordViewerButton)
      .forEach((button) => {
        button.addEventListener("click", () => {
          const target = document.getElementById(button.dataset.target);
          const icon = button.querySelector("i");
          if (target.type === "password") {
            target.type = "text";
            toggleClass(icon, "fa-eye");
            toggleClass(icon, "fa-eye-slash");
          } else {
            target.type = "password";
            toggleClass(icon, "fa-eye-slash");
            toggleClass(icon, "fa-eye");
          }
        });
      });
  };
  const setUpToggleHandlers = () => {
    document.querySelectorAll(selectors.twgToggle).forEach((toggle) => {
      const input = toggle.querySelector(".twg-input");
      const track = toggle.querySelector(".twg-track");
      const thumb = toggle.querySelector(".twg-thumb");

      if (input && track && thumb) {
        input.addEventListener("change", () => {
          if (input.checked) {
            track.classList.replace("twg-bg-accent-400", "twg-bg-dark-100");
            thumb.classList.add("twg-translate-x-21px");
          } else {
            track.classList.replace("twg-bg-dark-100", "twg-bg-accent-400");
            thumb.classList.remove("twg-translate-x-21px");
          }
        });
      } else {
        console.warn("Toggle DOM structure is missing required elements.");
      }
    });
  };
  const setupTabsHandlers = () => {
    // Get all buttons and tab contents
    const tabButtons = document.querySelectorAll(".twg-tabs-button");
    const tabContents = document.querySelectorAll(".twg-settings-tabs");

    // Add click event listener to each tab button
    tabButtons.forEach((button) => {
      button.addEventListener("click", () => {
        // Remove 'active' class from all buttons
        tabButtons.forEach((btn) => removeClass(btn, "active"));

        // Hide all tab contents
        tabContents.forEach((content) => removeClass(content, "active"));

        // Add 'active' class to the clicked button
        addClass(button, "active");

        // Get the target tab content ID
        const targetId = button.getAttribute("data-target");

        // Find and show the target tab content
        const targetContent = document.querySelector(`#${targetId}`);
        if (targetContent) {
          addClass(targetContent, "active");
        }
      });
    });
  };
  const accordionButtons = document.querySelectorAll(".accordion-btn");

  accordionButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const parent = button.parentElement; // The parent accordion item
      const content = parent.querySelector(".accordion-content"); // Current accordion content
      const allContents =
        parent.parentElement.querySelectorAll(".accordion-content"); // Siblings' content
      const arrowIcon = button.querySelector(".icon-arrow");

      // Close all other accordions in the same wrapper
      allContents.forEach((item) => {
        if (item !== content) {
          item.style.height = "0";
          const siblingButton =
            item.previousElementSibling.querySelector(".icon-arrow");
          if (siblingButton) siblingButton.style.transform = "rotate(0deg)";
        }
      });

      // Toggle current accordion
      if (content.style.height === "0px" || content.style.height === "") {
        content.style.height = `${content.scrollHeight}px`; // Set to full height
        arrowIcon.style.transform = "rotate(180deg)"; // Rotate arrow
      } else {
        content.style.height = "0"; // Collapse
        arrowIcon.style.transform = "rotate(0deg)"; // Reset arrow
      }
    });
  });

  // Initialize the calendar 
  const calendarDiaryCalendar = document.getElementById("diary_calendar");

  if (calendarDiaryCalendar) {
    const currentDate = new Date();
    const currentDay = currentDate.getDay(); // Get current day (0 = Sunday, 1 = Monday, etc.)
    const startOfWeek = new Date(
      currentDate.setDate(currentDate.getDate() - currentDay)
    ); // Set to the start of the week (Sunday)
    const endOfWeek = new Date(
      currentDate.setDate(currentDate.getDate() + (6 - currentDay))
    ); // Set to the end of the week (Saturday)

    const formatDate = (date) => date.toISOString().split("T")[0];
    const commonEvent = {
      title: "UX Research Class",
      backgroundColor: "#c7d2fe",
      borderColor: "#c7d2fe",
      textColor: "#000",
    };

    const events = [
      {
        ...commonEvent,
        start: `${formatDate(new Date(startOfWeek))}T10:00:00`,
        end: `${formatDate(new Date(startOfWeek))}T11:30:00`,
      },
      {
        ...commonEvent,
        start: `${formatDate(
          new Date(startOfWeek.setDate(startOfWeek.getDate() + 1))
        )}T10:00:00`,
        end: `${formatDate(new Date(startOfWeek))}T11:30:00`,
      },
      {
        title: "Individual Session with John",
        start: `${formatDate(
          new Date(startOfWeek.setDate(startOfWeek.getDate() + 1))
        )}T14:00:00`,
        end: `${formatDate(new Date(startOfWeek))}T15:30:00`,
        backgroundColor: "#fde68a",
        borderColor: "#fde68a",
        textColor: "#78350f",
      },
      {
        title: "Math Class for Group A",
        start: `${formatDate(
          new Date(startOfWeek.setDate(startOfWeek.getDate() + 1))
        )}T16:00:00`,
        end: `${formatDate(new Date(startOfWeek))}T18:00:00`,
        backgroundColor: "#c4b5fd",
        borderColor: "#c4b5fd",
        textColor: "#fff",
      },
      {
        title: "Webinar",
        start: `${formatDate(
          new Date(startOfWeek.setDate(startOfWeek.getDate() + 1))
        )}T10:00:00`,
        end: `${formatDate(new Date(startOfWeek))}T12:00:00`,
        backgroundColor: "#fef08a",
        borderColor: "#fef08a",
        textColor: "#713f12",
      },
    ];

    const calendarEle = new FullCalendar.Calendar(calendarDiaryCalendar, {
      initialView: window.innerWidth > 768 ? "timeGridWeek" : "listWeek",
      headerToolbar: {
        left: "title prev,next",
        center: "",
        right: "",
      },
      slotMinTime: "09:00:00", // Start calendar from 9:00 AM
      slotMaxTime: "18:00:00", // End calendar at 6:00 PM
      allDaySlot: false, // Disable all-day events row
      nowIndicator: true, // Highlight the current time
      events: events,
      eventDisplay: "block", // Events displayed as blocks
      eventTimeFormat: {
        // Customize time format
        hour: "numeric",
        minute: "2-digit",
        meridiem: "short",
      },
      height: "auto", // Automatically adjust height
      contentHeight: "auto",
      views: {
        timeGridWeek: {
          eventMaxHeight: window.innerWidth > 768 ? undefined : 60,
        },
      },
      windowResize: function () {
        const isMobile = window.innerWidth <= 768;
        calendarEle.changeView(isMobile ? "listWeek" : "timeGridWeek");
      },
    });

    setTimeout(() => {
      const toolbar = calendarDiaryCalendar.querySelector(
        ".fc-toolbar-chunk:nth-child(3)"
      );
      const selectEl = document.createElement("select");
      selectEl.className = "calendar-timezone-select";
      const options = [
        "(GMT +06:00) Public Time",
        "(GMT +05:00) Public Time",
        "(GMT +04:00) Public Time",
        "(GMT +03:00) Public Time",
        "(GMT +02:00) Public Time",
        "(GMT +01:00) Public Time",
        "(GMT +00:00) Public Time",
      ];

      options.forEach((month, index) => {
        const option = document.createElement("option");
        option.value = index;
        option.textContent = month;
        if (index === 0) {
          option.selected = true;
        }
        selectEl.appendChild(option);
      });
      toolbar.appendChild(selectEl);
    }, 200);

    calendarEle.render();
  }

  const calendar_monthly = document.getElementById("calendar-monthly");
  if (calendar_monthly) {
    const currentMonthDisplay = document.getElementById("currentMonth");
    const prevMonthButton = document.getElementById("prevMonth");
    const nextMonthButton = document.getElementById("nextMonth");

    let currentDate = new Date();

    function renderCalendar(date) {
      calendar_monthly.innerHTML = `
              <div class="twg-text-11px twg-font-medium twg-[#333333]">Mo</div>
              <div class="twg-text-11px twg-font-medium twg-[#333333]">Tu</div>
              <div class="twg-text-11px twg-font-medium twg-[#333333]">We</div>
              <div class="twg-text-11px twg-font-medium twg-[#333333]">Th</div>
              <div class="twg-text-11px twg-font-medium twg-[#333333]">Fr</div>
              <div class="twg-text-11px twg-font-medium twg-[#333333]">Sa</div>
              <div class="twg-text-11px twg-font-medium twg-[#333333]">Su</div>
          `;

      const year = date.getFullYear();
      const month = date.getMonth();
      const firstDay = new Date(year, month, 1).getDay();
      const daysInMonth = new Date(year, month + 1, 0).getDate();

      currentMonthDisplay.textContent = date.toLocaleString("default", {
        month: "long",
        year: "numeric",
      });

      // Add empty slots for the first week
      for (let i = 0; i < (firstDay + 6) % 7; i++) {
        calendar_monthly.innerHTML += `<div></div>`;
      }

      // Add days
      for (let day = 1; day <= daysInMonth; day++) {
        const isToday =
          day === new Date().getDate() &&
          month === new Date().getMonth() &&
          year === new Date().getFullYear();

        calendar_monthly.innerHTML += `
                  <div
                      class="twg-aspect-square twg-text-11px twg-font-medium twg-rounded-full ${
                        isToday
                          ? "twg-bg-primary-100 twg-text-white"
                          : "twg-[#333333]"
                      } twg-transition-all twg-cursor-pointer hover:twg-bg-primary-100 hover:twg-text-white twg-grid twg-place-items-center"
                      data-day="${day}">
                      ${day}
                  </div>`;
      }
    }

    function changeMonth(offset) {
      currentDate.setMonth(currentDate.getMonth() + offset);
      renderCalendar(currentDate);
    }

    prevMonthButton.addEventListener("click", () => changeMonth(-1));
    nextMonthButton.addEventListener("click", () => changeMonth(1));

    // Initial render
    renderCalendar(currentDate);
  }

  const confirm_course_note_text = document.querySelectorAll(
    ".confirm_course_note_text"
  );

  if (confirm_course_note_text.length) {
    confirm_course_note_text.forEach((editorEle) => {
      const editor = ClassicEditor.create(editorEle).catch((error) => {
        console.error(error);
      });
    });
  }

  const buttons = document.querySelectorAll(".tab-btn");
  const contents = document.querySelectorAll(".tab-content");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      // Remove 'active' class from all buttons
      buttons.forEach((btn) => btn.classList.remove("active"));
      // Add 'active' class to the clicked button
      button.classList.add("active");

      // Hide all content
      contents.forEach((content) => (content.style.display = "none"));
      // Show the content of the clicked tab
      const targetId = button.getAttribute("data-target");
      document.getElementById(targetId).style.display = "block";
    });
  });

  // Initialize: Set the first tab as active
  if (buttons.length > 0) {
    buttons[0].classList.add("active");
    contents[0].style.display = "block";
  }

  // Select the header checkbox and all row checkboxes
  const selectAllCheckbox = document.getElementById("select-all");
  const rowCheckboxes = document.querySelectorAll(".row-checkbox");

  if (selectAllCheckbox && rowCheckboxes) {
    // Add an event listener to the header checkbox
    selectAllCheckbox.addEventListener("change", function () {
      const isChecked = selectAllCheckbox.checked;
      rowCheckboxes.forEach((checkbox) => {
        checkbox.checked = isChecked;
      });
    });

    // Optional: Add an event listener to row checkboxes to update the header checkbox
    rowCheckboxes.forEach((checkbox) => {
      checkbox.addEventListener("change", function () {
        const allChecked = Array.from(rowCheckboxes).every((cb) => cb.checked);
        selectAllCheckbox.checked = allChecked;
      });
    });
  }

  setupModalHandlers();
  setupSearchModalHandlers();
  setupSidebarHandlers();
  setupDropdownHandlers();
  setupPasswordViewerHandlers();
  setUpToggleHandlers();
  setupTabsHandlers();
  // Initialize all charts
  initWeeklyChart();
  initStackedBarChart();
  initRadialChart();

  // Function to initialize the Weekly Chart
  function initWeeklyChart() {
    const chartData = [
      { day: "Mon", value: 10 },
      { day: "Tue", value: 50 },
      { day: "Wed", value: 30 },
      { day: "Thu", value: 70 },
      { day: "Fri", values: [30, 40, 20] },
      { day: "Sat", value: 60 },
    ];

    const ctx = document.getElementById("weeklyChart");
    if (!ctx) return;

    const labels = chartData.map((item) => item.day);
    const datasets = chartData.flatMap((item) =>
      item.values
        ? item.values.map((stepValue, stepIndex) => ({
            label: `Step ${stepIndex + 1}`,
            data: labels.map((day) => (day === "Fri" ? stepValue : 0)),
            backgroundColor:
              stepIndex === 0
                ? "rgba(116, 77, 230, 1)"
                : stepIndex === 1
                ? "rgba(250, 149, 243, 1)"
                : "rgba(250, 219, 92, 1)",
            barThickness: "flex",
            maxBarThickness: 100,
            borderRadius: stepIndex === 2 ? { topLeft: 10, topRight: 10 } : 0,
            borderWidth: 1,
            borderColor: "#FFFFFF",
          }))
        : {
            label: item.day,
            data: labels.map((day) => (day === item.day ? item.value : 0)),
            backgroundColor: "rgba(116, 77, 230, 0.3)",
            barThickness: "flex",
            maxBarThickness: 100,
            borderRadius: 10,
            borderWidth: 1,
            borderColor: "#FFFFFF",
          }
    );

    new Chart(ctx, {
      type: "bar",
      data: { labels, datasets },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          x: {
            stacked: true,
            grid: { display: false },
            ticks: { color: "#6B7280" },
          },
          y: {
            stacked: true,
            grid: { color: "#D1D5DB", borderDash: [5, 5] },
            ticks: { display: false },
          },
        },
      },
    });
  }

  // Function to initialize the Stacked Bar Chart
  function initStackedBarChart() {
    const ctx = document.getElementById("stackedBarChart");
    if (!ctx) return;

    const labels = ["00-06", "06-12", "12-18", "18-00"];
    const datasets = [
      {
        label: "Purple",
        data: [100, 80, 60, 90],
        backgroundColor: "rgba(116, 77, 230, 1)",
        barThickness: 10,
      },
      {
        label: "Pink",
        data: [60, 40, 30, 70],
        backgroundColor: "rgba(250, 149, 243, 1)",
        barThickness: 10,
      },
      {
        label: "Yellow",
        data: [30, 20, 10, 40],
        backgroundColor: "rgba(250, 219, 92, 1)",
        barThickness: 10,
      },
    ];

    new Chart(ctx, {
      type: "bar",
      data: { labels, datasets },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          x: {
            stacked: true,
            grid: { display: false },
            ticks: { color: "#9CA3AF" },
          },
          y: {
            stacked: true,
            grid: { color: "#D1D5DB", borderDash: [5, 5] },
            ticks: {
              callback: (value) => `${value}%`,
              color: "#9CA3AF",
              display: false,
            },
          },
        },
      },
    });
  }

  // Function to initialize the Radial Chart
  function initRadialChart() {
    const outerCtx = document.getElementById("outerChart");
    if (!outerCtx) return;
    new Chart(outerCtx, {
      type: "doughnut",
      data: {
        labels: ["Lessons Completed", "Remaining"],
        datasets: [
          {
            data: [70, 30],
            backgroundColor: ["#744DE6", "#E5E7EB"],
            hoverOffset: 4,
            borderRadius: 5,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: { legend: { display: false } },
        cutout: "70%",
      },
    });

    // Inner ring (Time spent practicing)
    const innerCtx = document.getElementById("innerChart");
    if (!innerCtx) return;
    new Chart(innerCtx, {
      type: "doughnut",
      data: {
        labels: ["Practice Time", "Remaining"],
        datasets: [
          {
            data: [50, 50],
            backgroundColor: ["#FFD700", "#E5E7EB"],
            hoverOffset: 4,
            borderRadius: 5,
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: { legend: { display: false } },
        cutout: "85%",
      },
    });
  }
 
 
// Calender 
  const calendarEl = document.getElementById('calendar');


});


