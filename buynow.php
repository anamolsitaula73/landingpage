<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Section</title>
    <style>
        /* Wrapper class for isolation */
        .promo-section {
            position: relative; /* Ensures .half-circle is positioned within this section */
            padding-top: 20vh; /* Adds space above the section if desired */
        }

        .promo-section .half-circle {
            width: 100%;
            height: 50vh;
            background-color:rgba(22, 65, 147,0.15);
            border-top-left-radius: 45%;
            border-top-right-radius: 45%;
            top: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Content styling within the isolated promo-section */
        .promo-section .circle-content {
            color: black;
            text-align: center;
            font-weight: bold;
        }

        .promo-section h1 {
            font-size: 4vw; /* Responsive font size for h1 */
        }

        .promo-section h2 {
            font-size: 2vw; /* Responsive font size for h2 */
            margin: 0; /* Remove default margin for better alignment */
        }

        .promo-section .buy-now-button-green {
            background-color: #28a745;
            color: #fff;
            padding: 12px 24px;
            font-size: 2vw; /* Responsive font size for button */
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        .promo-section .buy-now-button-green:hover {
            background-color: #218838;
        }

        /* Media queries for better responsiveness */
        @media (max-width: 768px) {
            .promo-section h1 {
                font-size: 6vw; /* Larger font size for h1 on tablets */
            }

            .promo-section h2 {
                font-size: 5vw; /* Larger font size for h2 on tablets */
            }

            .promo-section .buy-now-button-green {
                font-size: 4vw; /* Larger button font size for tablets */
            }
        }

        @media (max-width: 480px) {
            .promo-section h1 {
                font-size: 8vw; /* Even larger font size for h1 on mobile */
            }

            .promo-section h2 {
                font-size: 6vw; /* Larger font size for h2 on mobile */
            }

            .promo-section .buy-now-button-green {
                font-size: 5vw; /* Larger button font size for mobile */
            }
        }
    </style>
</head>
<body>
    <div class="promo-section">
        <div class="half-circle">
            <div class="circle-content">
                <h1>Save <span style="color:#218838;">50%</span> off today</h1>
                <h2 style="color:black !important;">e-Accounting: slogan here</h2>
                <br><br>
                <a href="#pricing" class="buy-now-button-green">Buy Now</a>
                <!-- <button class="buy-now-button-green">Buy Now</button> -->
            </div>
        </div>
    </div>
</body>
</html>
