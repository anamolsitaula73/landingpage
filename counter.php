<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown Timer</title>
    <link rel="stylesheet" href="main.css"> <!-- Link to main.css -->
</head>
<body>
    <div id="countdown-timer" class="main"> <!-- ID added for specificity -->
        <div class="overlay">
            <div class="title">We are coming soon</div>
            <div class="title" id="end-date"></div>
            <div class="col">
                <div>
                    <input type="text" readonly value="0">
                    <br/>
                    <label>Days</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <br/>
                    <label>Hours</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <br/>
                    <label>Minutes</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <br/>
                    <label>Seconds</label>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script> <!-- Link to main.js -->
</body>
</html>