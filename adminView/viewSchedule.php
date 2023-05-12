<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Schedule</title>
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
}

.calendar {
  width: 300px;
  margin: 20px auto;
  background-color: #fff;
  border: 1px solid #ccc;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #ccc;
  padding: 10px;
  text-align: center;
  font-weight: bold;
}

.weekdays {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  background-color: #eee;
}

.weekdays div {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border: 1px solid #ccc;
}

.days {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  grid-template-rows: repeat(6, 1fr);
  border: 1px solid #ccc;
}

.days div {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border: 1px solid #ccc;
}

.days div:not(.empty):hover {
  background-color: #f8f8f8;
  cursor: pointer;
}

.days div.empty {
  background-color: #f8f8f8;
}
</style>    

  </head>
  <body>
    <div class="calendar">
      <div class="header">
        <button id="prev" onclick="prevMonth()">&lt;</button>
        <div id="month"></div>
        <div id="year"></div>
        <button id="next" onclick="nextMonth()">&gt;</button>
      </div>
      <div class="weekdays">
        <div>Sun</div>
        <div>Mon</div>
        <div>Tue</div>
        <div>Wed</div>
        <div>Thu</div>
        <div>Fri</div>
        <div>Sat</div>
      </div>
      <div class="days"></div>
    </div>
    <script>
// Get the current date
let currentDate = new Date();

// Set the current year and month
let currentYear = currentDate.getFullYear();
let currentMonth = currentDate.getMonth();

// Set the month and year in the calendar
let monthEl = document.getElementById('month');
let yearEl = document.getElementById('year');
monthEl.textContent = getMonthName(currentMonth);
yearEl.textContent = currentYear;

// Set the days of the month in the calendar
let calendarEl = document.getElementById('calendar');
let daysInMonth = getDaysInMonth(currentYear, currentMonth);
let firstDayOfWeek = getFirstDayOfWeek(currentYear, currentMonth);
for (let i = 0; i < firstDayOfWeek; i++) {
    let dayEl = document.createElement('div');
    dayEl.classList.add('day');
    calendarEl.appendChild(dayEl);
}
for (let i = 1; i <= daysInMonth; i++) {
    let dayEl = document.createElement('div');
    dayEl.classList.add('day');
    if (i === currentDate.getDate() && currentYear === currentDate.getFullYear() && currentMonth === currentDate.getMonth()) {
        dayEl.classList.add('current');
    }
    dayEl.textContent = i;
    calendarEl.appendChild(dayEl);
}

// Get the name of the month from its index
function getMonthName(monthIndex) {
    let monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    return monthNames[monthIndex];
}

// Get the number of days in a month
function getDaysInMonth(year, month) {
    return new Date(year, month + 1, 0).getDate();
}

// Get the index of the first day of the month
function getFirstDayOfWeek(year, month) {
    return new Date(year, month, 1).getDay();
}

</script>
  </body>
</html>