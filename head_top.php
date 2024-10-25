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
    background-color: white;
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
    background-color: #28a745; /* Green shade representing free */
    color: white;
    padding: 12px 20px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 16px;
}

.free_btn a:hover {
    background-color: #218838; /* Darker green on hover */
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


</style>
<body>

<!-- Small Header Above Navbar -->
<div class="small-header">
    <div class="contact-info">
        <span style="margin-left: 15px;">Phone: +123 456 7890</span> |
        <span>Website: <a href="https://www.ezone.com.np" target="_blank">www.ezone.com.np</a></span>
    </div>
    <div class="free_btn" id="get-it-free">
        <a href="#">
            Get it Free
        </a>
    </div>

  
</div>
<script>
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
