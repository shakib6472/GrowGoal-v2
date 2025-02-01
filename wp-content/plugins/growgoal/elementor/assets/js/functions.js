
// Calender 
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