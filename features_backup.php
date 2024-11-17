<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features Section</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .features-wrapper {
            background-color: #F6FFFA; /* Background for the features section */
            padding: 40px 0; /* Padding for spacing */
        }

        .features-wrapper .features-icon {
            color: #164193; /* Set icon color */
        }

        .features-wrapper .features-section {
            text-align: center; /* Center the text */
            margin: 20px; /* Add margin */
        }

        .features-wrapper h1 {
            font-size: 2.5em; /* Responsive font size for heading */
        }

        .features-wrapper h3 {
            font-size: 1.8em; /* Responsive font size for subheadings */
        }

        .features-wrapper p {
            font-size: 1em; /* Responsive font size for paragraphs */
        }

        /* Ensure responsive behavior */
        @media (max-width: 768px) {
            .features-wrapper h1 {
                font-size: 2em; /* Smaller size for mobile */
            }

            .features-wrapper h3 {
                font-size: 1.5em; /* Smaller size for mobile */
            }

            .features-wrapper p {
                font-size: 0.9em; /* Smaller size for mobile */
            }
        }
	

           .buy-now-button-green {
            background-color: #28a745;
            color: #fff !important;
            padding: 12px 24px;
            font-size: 2vw; /* Responsive font size for button */
            font-weight: bold;
            margin-bottom:20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        .buy-now-button-green:hover {
            background-color: #218838;
        }

        /* Media queries for better responsiveness */
        @media (max-width: 768px) {
          
             .buy-now-button-green {
                font-size: 4vw; /* Larger button font size for tablets */
            }
        }

        @media (max-width: 480px) {
          
              .buy-now-button-green {
                font-size: 5vw; /* Larger button font size for mobile */
            }
        }
    </style>
</head>
<body>
    <div class="features-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Popular <b class="features-icon">features</b> <br> that will change your life<br></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center wow fadeInLeft animated">
                    <div>
                        <i class="fa fa-fighter-jet fa-3x features-icon"></i>
                        <h3>Get paid faster</h3>
                        <p>Create professional recurring invoices and receive updates when they’re opened. It's simple, fast, and convenient.</p>
                    </div>
                    <div class="m-t-lg">
                        <br><br>
                        <i class="fa fa-calendar-o fa-3x features-icon"></i>
                        <h3>Organize expenses effortlessly</h3>
                        <p>Know the ins and outs of your expenses. Track, categorize, and bill them to your clients all from one place.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center wow zoomIn animated">
                    <img src="assets/images/eaccounting.png" alt="dashboard" class="img-fluid img-responsive" width="600" style="margin-top:80px;">
					<a href="#pricing" class="buy-now-button-green">Buy Now</a>
							<br><br>
					<!-- <a class=" btn-learn" href="what-you-get.php" title="Learn More"><h3>Learn More</h3></a><br><br> -->
                </div>
                <div class="col-md-3 text-center wow fadeInRight animated">
                    <div>
                        <i class="fa fa-eye fa-3x features-icon"></i>
                        <h3>Track inventory in real-time</h3>
                        <p>Inventory items speed up invoicing while tracking sales and purchases. Manage inventory, orders, returns, and vendors.</p>
                    </div>
                    <div class="m-t-lg">
                        <br><br>
                        <i class="fa fa-exchange fa-3x features-icon"></i>
                        <h3>Advanced functionality</h3>
                        <p>Everything you need to increase productivity, make timely decisions, and drive your business forward.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center"><br>
                    <i class="fa fa-thumbs-o-up fa-3x features-icon"></i>
                    <h3>Beautiful dynamic statements </h3>
                    <p>Easily create your earnings report,
                        <br>balance sheet or cash flow statements.
                        <br>Your reports, the way you like them.</p>
                </div>
            </div>
            <br><br>
        </div>
    </div>
</body>
</html>
