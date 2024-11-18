<?php

// Check if the session contains the variable (e.g., 'survey_completed')
$show_button = isset($_SESSION['survey_completed']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<style>
 

/* Styling for the small header */
.small-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:white;
    color: gray;
    font-size: 14px;
    position: sticky !important;
    top: 0;
    z-index: 1000; /* Ensures it's above other elements */
    padding-bottom: 10px; 
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Adds a subtle shadow for better visibility */
}

.small-header a {
    color: #e20613;
    text-decoration: none;
}

.small-header .contact-info {
    display: flex;
    gap: 15px;
}

.header-btn {
    display: flex;
    align-items: center;
}

.session-button {
    background-color: #e20613;
    color: white;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    text-decoration: none;
    font-size: 14px;
}

.session-button:hover {
    background-color: #c50510;
}

/* Bounce animation for the icon */
@keyframes bounce-up-down {
    0%, 100% {
        transform: translateY(0);
    }
    25% {
        transform: translateY(5px);
    }
    50% {
        transform: translateY(-3px);
    }
}

.bounce {
    animation: bounce-up-down 3s infinite;
    display: inline-block;
}

/* Button style */
.free_btn {
    text-align: center;
    margin-top: 15px;
    margin-bottom: 10px;
    margin-right: 10px;
}
.free_btn a:active,
.free_btn a:focus {
    color:white !important;
    text-decoration: none ; /* Remove outline on focus */
}

.free_btn a {
    background-color:#e20613; /* Green shade representing free */
    color: white;
    padding: 12px 20px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 16px;
}

.free_btn a:hover {
    background-color: black; 
    color: white;
    text-decoration: none;
}

/* Media Queries for Responsive Design */
@media (max-width: 768px) {
    .small-header {
        font-size: 12px; /* Smaller font size for tablets */
    }

    .free_btn a {
        padding: 10px 18px;
        font-size: 14px; /* Reduce button font size */
    }
}

@media (max-width: 600px) {
    .small-header {
        font-size: 8px; /* Smaller font size for tablets */
    }

    .free_btn a {
        padding: 10px 18px;
        font-size: 10px; /* Reduce button font size */
    }
    .contact-info{
        font-size:10px;
    }
}

/* Navbar Countdown Timer Styles */
#navbar-countdown {
    display: flex;
    gap: 8px; /* Reduced gap for a more compact view */
    color: #e20613;
    font-size: 12px;
    padding-left:12px;
}

/* Countdown container styles */
.countdown-container {
    display: flex;
    gap: 5px;
}

/* Countdown item styles */
.countdown-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Countdown input styles */
.countdown-input {
    width: 35px; /* Reduced width for compact view */
    text-align: center;
    font-size: 14px; /* Smaller font size for inputs */
    border: none;
    background: transparent;
     /* #164193 */
    color:  #e20613;
    /* font-weight: bold; */
}

/* Mobile View (max-width 768px) */
@media (max-width: 768px) {
    #navbar-countdown {
        font-size: 12px; /* Smaller label text */
        gap: 5px; /* Less gap between items */
    }

    .countdown-container {
        gap: 3px; /* Further reduced gap between inputs */
    }

    .countdown-input {
        width: 30px; /* Smaller width for mobile */
        font-size: 10px; /* Smaller font size for input values */
    }

    .countdown-item span {
        font-size: 10px; /* Smaller label text below input */
    }
}

/* Extra Compact View (max-width 480px) */
@media (max-width: 480px) {
    #navbar-countdown {
        gap: 3px; /* Minimal gap for extra compact view */
    }

    .countdown-input {
        width: 28px; /* More compact width */
        font-size: 9px; /* Reduced font size */
    }

    .countdown-item span {
    }
}

</style>
<body>

<!-- Small Header Above Navbar -->
<div class="small-header">
    <div class="contact-info">
        <!-- <span style="margin-left: 15px;">Email: wjdhege@gmail.com</span> | -->
        <!-- <span>Website: <a href="https://www.ezone.com.np" target="_blank">www.ezone.com.np</a></span> -->
        <div id="navbar-countdown" class="navbar-countdown">
    <!-- <span class="countdown-label">Offer ends in:</span> -->
    <div class="countdown-container">
        <div class="countdown-item">
            <input type="text" id="countdown-days" class="countdown-input" readonly> <span>Days</span>
        </div>
        <div class="countdown-item">
            <input type="text" id="countdown-hours" class="countdown-input" readonly> <span>Hours</span>
        </div>
        <div class="countdown-item">
            <input type="text" id="countdown-minutes" class="countdown-input" readonly> <span>Minutes</span>
        </div>
        <div class="countdown-item">
            <input type="text" id="countdown-seconds" class="countdown-input" readonly> <span>Seconds</span>
        </div>
    </div>
</div>
    </div>

    <!-- Countdown Timer in Navbar -->




    <div class="free_btn" id="get-it-free">
    <a href="#pricing" >Get Now</a>

    </div>

  
</div>
<script>

    // Set the end date and time for the countdown
    const endDate = "2 December 2024 20:20:00 GMT+1100"; // Australian Eastern Daylight Time (AEDT)

    // Get countdown input elements by ID
    const countdownDays = document.getElementById("countdown-days");
    const countdownHours = document.getElementById("countdown-hours");
    const countdownMinutes = document.getElementById("countdown-minutes");
    const countdownSeconds = document.getElementById("countdown-seconds");

    // Function to update the countdown timer
    function updateCountdown() {
        const end = new Date(endDate);
        const now = new Date();

        // Adjust for AEDT (Australian Eastern Daylight Time, UTC+11)
        const australianOffset = 11 * 60; // AEDT is UTC+11 hours
        const localOffset = now.getTimezoneOffset(); // User's local timezone offset in minutes
        const timeDifference = (end - now + (localOffset - australianOffset) * 60 * 1000) / 1000;

        // If the countdown is over, stop the function
        if (timeDifference < 0) {
            countdownDays.value = "00";
            countdownHours.value = "00";
            countdownMinutes.value = "00";
            countdownSeconds.value = "00";
            return;
        }

        // Calculate remaining time in days, hours, minutes, and seconds
        const days = Math.floor(timeDifference / 3600 / 24);
        const hours = Math.floor(timeDifference / 3600) % 24;
        const minutes = Math.floor(timeDifference / 60) % 60;
        const seconds = Math.floor(timeDifference) % 60;

        // Update input values with leading zeros
        countdownDays.value = days.toString().padStart(2, '0');
        countdownHours.value = hours.toString().padStart(2, '0');
        countdownMinutes.value = minutes.toString().padStart(2, '0');
        countdownSeconds.value = seconds.toString().padStart(2, '0');
    }

    // Initial call to set the countdown immediately
    updateCountdown();

    // Update the countdown every second
    setInterval(updateCountdown, 1000);







    document.addEventListener('DOMContentLoaded', () => {
        const popup = document.getElementById('popup');
        const closeButton = document.querySelector('.close-button');
        const getItFreeButton = document.getElementById('get-it-free');

        // Open popup when the "Get it Free" button is clicked
        getItFreeButton.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default link behavior
            popup.style.display = 'flex'; // Show the popup
        });

        // Close the popup when the close button is clicked
        closeButton.addEventListener('click', () => {
            popup.style.display = 'none'; // Hide the popup
        });

        // Optional: Close the popup when clicking outside of it
        popup.addEventListener('click', (event) => {
            if (event.target === popup) {
                popup.style.display = 'none'; // Hide the popup
            }
        });
    });
</script>

<script>
document.querySelector('.download-link').addEventListener('mouseenter', function() {
    document.querySelector('.fa-angle-double-down').classList.add('bounce');
});

document.querySelector('.download-link').addEventListener('mouseleave', function() {
    document.querySelector('.fa-angle-double-down').classList.remove('bounce');
});
</script>

</body>
</html>
