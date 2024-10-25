<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Popup container */
        .popup {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Darker background for better focus */
            justify-content: center; /* Align center */
            align-items: center; /* Align center */
            transition: opacity 0.3s ease; /* Smooth fade-in effect */
        }

        /* Popup content */
        .popup-content {
            background-color: white;
            padding: 30px; /* Increased padding for a more spacious feel */
            border-radius: 15px; /* Slightly larger border-radius for softer corners */
            width: 90%; /* Use more screen width */
            max-width: 500px; /* Increased max-width for larger screens */
            text-align: center;
            position: relative;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3); /* More pronounced shadow for depth */
        }

        /* Close button */
        .close-button {
            position: absolute;
            top: 10px; /* Move button inside the popup */
            right: 10px; /* Keep it inside */
            font-size: 24px;
            cursor: pointer;
            background-color: red; /* Red background to make it noticeable */
            color: white; /* White text for contrast */
            border: none; /* Remove default border */
            border-radius: 50%; /* Make it circular */
            width: 40px; /* Fixed width */
            height: 40px; /* Fixed height */
            display: flex; /* Flexbox for centering */
            align-items: center; /* Vertically center text */
            justify-content: center; /* Horizontally center text */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Add a slight shadow for depth */
            transition: background-color 0.3s ease, transform 0.2s ease; /* Smooth transitions */
        }

        .close-button:hover {
            background-color: darkred; /* Change color on hover */
            transform: scale(1.1); /* Slightly enlarge on hover */
        }

        /* Media queries for responsiveness */
        @media (max-width: 600px) {
            .popup-content {
                padding: 20px; /* Reduce padding for smaller screens */
            }

            .close-button {
                width: 35px; /* Slightly smaller button */
                height: 35px; /* Slightly smaller button */
            }

            h2 {
                font-size: 24px; /* Adjust font size for smaller screens */
            }

            h4 {
                font-size: 18px; /* Adjust font size for smaller screens */
            }

            p {
                font-size: 16px; /* Adjust font size for smaller screens */
            }
        }
    </style>
</head>
<body>

    <!-- Popup -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <button class="close-button">&times;</button>
            <h2 style="color:#164193 !important;">🎉 Congratulations! 🎉</h2>
            <p>You've unlocked a special discount!</p>
            <h4><strong>Hurry up Now!</strong></h4>
            <?php include('survey.php') ?>  <!-- Include the survey form -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const popup = document.getElementById('popup');
            const closeButton = document.querySelector('.close-button');

            // Placeholder for the element you want to trigger the popup on scroll
            const surveySection = document.getElementById('popup'); // Change this ID to the section you want to monitor

            // Function to handle scroll event
            const handleScroll = () => {
                const rect = surveySection.getBoundingClientRect();
                // Check if the survey section is in view
                if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                    popup.style.display = 'flex'; // Show the popup
                    // Remove scroll event listener after it triggers
                    window.removeEventListener('scroll', handleScroll);
                }
            };

            // Listen for scroll events
            window.addEventListener('scroll', handleScroll);

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

</body>
</html>
