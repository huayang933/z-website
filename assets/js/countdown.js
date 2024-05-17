document.addEventListener("DOMContentLoaded", function () {
  const second = 1000, // 1000 ms = 1 s
    minute = second * 60, // 1000 ms * 60 s = 1 min
    hour = minute * 60, // 1000 ms * 60 min = 1 hour
    day = hour * 24; // 1000 ms * 60 hour = 1 day

  // Ensure the target date is a valid date and is in the future.
  // let targetDate = new Date();
  let targetDate = new Date("dec 31, 2024 00:00:00");
  console.log(Date());
  if (targetDate < new Date()) {
    console.error("Target date is in the past or not set correctly.");
    return;
  }

  let countDown = targetDate.getTime(),
    x = setInterval(function () {
      let now = new Date().getTime(),
        distance = countDown - now;

      // Calculate the days, hours, minutes, and seconds
      let days = Math.floor(distance / day),
        hours = Math.floor((distance % day) / hour),
        minutes = Math.floor((distance % hour) / minute),
        seconds = Math.floor((distance % minute) / second);

      // Update the HTML elements with the calculated time left.
      document.getElementById("days").textContent = days
        .toString()
        .padStart(2, "0");
      document.getElementById("hours").textContent = hours
        .toString()
        .padStart(2, "0");
      document.getElementById("minutes").textContent = minutes
        .toString()
        .padStart(2, "0");
      document.getElementById("seconds").textContent = seconds
        .toString()
        .padStart(2, "0");

      // Stop the countdown when the timer reaches 0
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("days").textContent = "00";
        document.getElementById("hours").textContent = "00";
        document.getElementById("minutes").textContent = "00";
        document.getElementById("seconds").textContent = "00";
      }
    }, second);
});
