

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

  setupModalHandlers();
  setupSearchModalHandlers();
  setupSidebarHandlers();
  setupDropdownHandlers();
  setupPasswordViewerHandlers();
  setUpToggleHandlers();
});
document.addEventListener("DOMContentLoaded", function () {
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
});



document.addEventListener('DOMContentLoaded', function () {
  const calendarEl = document.getElementById('calendar');

  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    headerToolbar: {
      left: 'title',
      center: '',
      right: 'scheduleButton searchButton menuButton',
    },
    customButtons: {
      scheduleButton: {
        text: 'SCHEDULE',
        click: function () {
          alert('Schedule button clicked');
        },
      },
      searchButton: {
        text: '',
        click: function () {
          alert('Search button clicked');
        },
      },
      menuButton: {
        text: '',
        click: function () {
          alert('Menu button clicked');
        },
      },
    },
    events: [
      { title: 'Conference', start: '2024-12-15', classNames: 'conference' },
      { title: 'Webinar', start: '2024-12-25T14:00:00', end: '2024-12-25T16:00:00', classNames: 'webinar' },
      { title: 'Team Lunch', start: '2024-12-12T12:00:00', end: '2024-12-12T13:00:00', classNames: 'team-lunch' },
      { title: 'Event 1', start: '2025-01-01T08:00:00', end: '2025-01-01T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 1', start: '2025-01-01T11:00:00', end: '2025-01-01T12:00:00', classNames: 'meeting' },
      { title: 'Event 2', start: '2025-01-02T08:00:00', end: '2025-01-02T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 2', start: '2025-01-02T11:00:00', end: '2025-01-02T12:00:00', classNames: 'meeting' },
      { title: 'Event 3', start: '2025-01-03T08:00:00', end: '2025-01-03T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 3', start: '2025-01-03T11:00:00', end: '2025-01-03T12:00:00', classNames: 'meeting' },
      { title: 'Event 4', start: '2025-01-04T08:00:00', end: '2025-01-04T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 4', start: '2025-01-04T11:00:00', end: '2025-01-04T12:00:00', classNames: 'meeting' },
      { title: 'Event 5', start: '2025-01-05T08:00:00', end: '2025-01-05T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 5', start: '2025-01-05T11:00:00', end: '2025-01-05T12:00:00', classNames: 'meeting' },
      { title: 'Event 6', start: '2025-01-06T08:00:00', end: '2025-01-06T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 6', start: '2025-01-06T11:00:00', end: '2025-01-06T12:00:00', classNames: 'meeting' },
      { title: 'Event 7', start: '2025-01-07T08:00:00', end: '2025-01-07T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 7', start: '2025-01-07T11:00:00', end: '2025-01-07T12:00:00', classNames: 'meeting' },
      { title: 'Class', start: '2025-01-07T14:00:00', end: '2025-01-07T15:00:00', classNames: 'class' },
      { title: 'Event 8', start: '2025-01-08T08:00:00', end: '2025-01-08T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 8', start: '2025-01-08T11:00:00', end: '2025-01-08T12:00:00', classNames: 'meeting' },
      { title: 'Event 9', start: '2025-01-09T08:00:00', end: '2025-01-09T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 9', start: '2025-01-09T11:00:00', end: '2025-01-09T12:00:00', classNames: 'meeting' },
      { title: 'Event 10', start: '2025-01-10T08:00:00', end: '2025-01-10T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 10', start: '2025-01-10T11:00:00', end: '2025-01-10T12:00:00', classNames: 'meeting' },
      { title: 'Event 11', start: '2025-01-11T08:00:00', end: '2025-01-11T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 11', start: '2025-01-11T11:00:00', end: '2025-01-11T12:00:00', classNames: 'meeting' },
      { title: 'Event 12', start: '2025-01-12T08:00:00', end: '2025-01-12T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 12', start: '2025-01-12T11:00:00', end: '2025-01-12T12:00:00', classNames: 'meeting' },
      { title: 'Event 13', start: '2025-01-13T08:00:00', end: '2025-01-13T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 13', start: '2025-01-13T11:00:00', end: '2025-01-13T12:00:00', classNames: 'meeting' },
      { title: 'Event 14', start: '2025-01-14T08:00:00', end: '2025-01-14T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 14', start: '2025-01-14T11:00:00', end: '2025-01-14T12:00:00', classNames: 'meeting' },
      { title: 'Event 15', start: '2025-01-15T08:00:00', end: '2025-01-15T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 15', start: '2025-01-15T11:00:00', end: '2025-01-15T12:00:00', classNames: 'meeting' },
      { title: 'Event 16', start: '2025-01-16T08:00:00', end: '2025-01-16T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 16', start: '2025-01-16T11:00:00', end: '2025-01-16T12:00:00', classNames: 'meeting' },
      { title: 'Event 17', start: '2025-01-17T08:00:00', end: '2025-01-17T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 17', start: '2025-01-17T11:00:00', end: '2025-01-17T12:00:00', classNames: 'meeting' },
      { title: 'Event 18', start: '2025-01-18T08:00:00', end: '2025-01-18T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 18', start: '2025-01-18T11:00:00', end: '2025-01-18T12:00:00', classNames: 'meeting' },
      { title: 'Event 19', start: '2025-01-19T08:00:00', end: '2025-01-19T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 19', start: '2025-01-19T11:00:00', end: '2025-01-19T12:00:00', classNames: 'meeting' },
      { title: 'Event 20', start: '2025-01-20T08:00:00', end: '2025-01-20T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 20', start: '2025-01-20T11:00:00', end: '2025-01-20T12:00:00', classNames: 'meeting' },
      { title: 'Event 21', start: '2025-01-21T08:00:00', end: '2025-01-21T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 21', start: '2025-01-21T11:00:00', end: '2025-01-21T12:00:00', classNames: 'meeting' },
      { title: 'Event 22', start: '2025-01-22T08:00:00', end: '2025-01-22T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 22', start: '2025-01-22T11:00:00', end: '2025-01-22T12:00:00', classNames: 'meeting' },
      { title: 'Event 23', start: '2025-01-23T08:00:00', end: '2025-01-23T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 23', start: '2025-01-23T11:00:00', end: '2025-01-23T12:00:00', classNames: 'meeting' },
      { title: 'Event 24', start: '2025-01-24T08:00:00', end: '2025-01-24T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 24', start: '2025-01-24T11:00:00', end: '2025-01-24T12:00:00', classNames: 'meeting' },
      { title: 'Event 25', start: '2025-01-25T08:00:00', end: '2025-01-25T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 25', start: '2025-01-25T11:00:00', end: '2025-01-25T12:00:00', classNames: 'meeting' },
      { title: 'Event 26', start: '2025-01-26T08:00:00', end: '2025-01-26T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 26', start: '2025-01-26T11:00:00', end: '2025-01-26T12:00:00', classNames: 'meeting' },
      { title: 'Event 27', start: '2025-01-27T08:00:00', end: '2025-01-27T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 27', start: '2025-01-27T11:00:00', end: '2025-01-27T12:00:00', classNames: 'meeting' },
      { title: 'Event 28', start: '2025-01-28T08:00:00', end: '2025-01-28T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 28', start: '2025-01-28T11:00:00', end: '2025-01-28T12:00:00', classNames: 'meeting' },
      { title: 'Event 29', start: '2025-01-29T08:00:00', end: '2025-01-29T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 29', start: '2025-01-29T11:00:00', end: '2025-01-29T12:00:00', classNames: 'meeting' },
      { title: 'Event 30', start: '2025-01-30T08:00:00', end: '2025-01-30T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 30', start: '2025-01-30T11:00:00', end: '2025-01-30T12:00:00', classNames: 'meeting' },
      { title: 'Event 31', start: '2025-01-31T08:00:00', end: '2025-01-31T10:00:00', classNames: 'event-class' },
      { title: 'Meeting 31', start: '2025-01-31T11:00:00', end: '2025-01-31T12:00:00', classNames: 'meeting' }
    ],
    eventTimeFormat: {
      hour: '2-digit',
      minute: '2-digit',
      hour12: true
    },
    eventDisplay: 'block',
    dayMaxEvents: 2,
    moreLinkClick: 'popover',
  });

  // Render the custom year and month dropdowns manually
  setTimeout(() => {
    const toolbar = document.querySelector('.fc-toolbar-chunk');

    // Year Dropdown
    const yearSelectEl = document.createElement('select');
    yearSelectEl.id = 'year-dropdown';
    yearSelectEl.className = 'calendar-select';

    const currentYear = new Date().getFullYear();
    const startYear = currentYear - 5;
    const endYear = currentYear + 5;

    for (let year = startYear; year <= endYear; year++) {
      const option = document.createElement('option');
      option.value = year;
      option.textContent = year;
      if (year === currentYear) {
        option.selected = true;
      }
      yearSelectEl.appendChild(option);
    }

    // Month Dropdown
    const monthSelectEl = document.createElement('select');
    monthSelectEl.id = 'month-dropdown';
    monthSelectEl.className = 'calendar-select';

    const currentMonthIndex = new Date().getMonth();
    const months = ['January', 'February', 'March', 'April', 'May', 'June',
      'July', 'August', 'September', 'October', 'November', 'December'];

    months.forEach((month, index) => {
      const option = document.createElement('option');
      option.value = index;
      option.textContent = month;
      if (index === currentMonthIndex) {
        option.selected = true;
      }
      monthSelectEl.appendChild(option);
    });

    // Append both dropdowns to the toolbar
    toolbar.appendChild(yearSelectEl);
    toolbar.appendChild(monthSelectEl);

    // Event listener for year change
    yearSelectEl.addEventListener('change', function (event) {
      const selectedYear = event.target.value;
      const selectedMonth = monthSelectEl.value;
      calendar.gotoDate(new Date(selectedYear, selectedMonth, 1));
    });

    // Event listener for month change
    monthSelectEl.addEventListener('change', function (event) {
      const selectedMonth = event.target.value;
      const selectedYear = yearSelectEl.value;
      calendar.gotoDate(new Date(selectedYear, selectedMonth, 1));
    });

  }, 200);

  calendar.render();
});


