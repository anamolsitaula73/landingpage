<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Accounting - Online Accounting, Payroll, Inventory & Billing</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <style>
        /* General styles */
        body {
            font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            background-color:white !important;
        }

        .body-css {
            width: 100%;
            
        }
      
        /* Section styles */
        .section {
            overflow-x: hidden;
            opacity: 0; /* Initially hidden */
            filter: blur(10px); /* Start with blur */
            transition: opacity 0.2s ease, filter 0.2s ease; /* Smooth fade and blur transition */
        }

        /* When the section becomes visible */
        .section.visible-fade {
            opacity: 1; /* Fade in */
            filter: blur(0); /* Remove blur */
        }
    </style>
</head>
<body>

<?php 
session_start(); // Start session to store form data
include('head_top.php');

include('header.php');
include('social/messenger.php');
include('social/whatsapp.php');
include('go-to-top.php');
?>
<br><br>
<div class="body-css">

    <!-- Sections with animations -->
    <div class="section" id="certification-section">
        <?php include('certification.php') ?>  
        <br><br>
    </div>
    <div style="margin:auto; text-align:center;">
<a href="https://accounting.ezonecloud.com/CompanyCreate.aspx" target="_blank" class="buy-now-button">Get Now</a>
</div>
    <div class="section" id="features-section">
    <br><br><br>

        <?php include('features.php') ?>  
    <br><br><br>

    </div>
    <div class="section" id="compare-table-section">
    
    <br><br>

        <?php include('compare_table.php') ?>  

    </div>
    <br><br>
    <br><br>

<!-- `<br><br><br><br><br> -->
    <div class="section" id="feature-table-section">
        <br><br>
        <?php include('feature_table.php') ?>  
    </div>
    <div class="section" id="solution-section">
<br><br><br>

        <?php include('solution.php') ?>  
    </div>
<!-- <br><br><br><br> -->
    <div class="section">
        <br><br>
        <?php include('slider.php') ?>  
    </div>
    

    <div class="section">
    <br><br><br><br>

        <?php include('pricing.php') ?> 
<br><br>

    </div>

    <div class="section">
        <?php include('testimonial.php') ?>  
    </div>

    <div class="section">

        <?php include('faq.php') ?>  
    </div>
    <div class="section">

<?php include('buynow.php') ?>  
    <!-- <br> -->

    <div class="footer-div">
        <?php include('footer/footer.php'); ?>
    </div>
    </div>
</div>

<script>
    // Function to determine the threshold based on screen size
    function getThreshold() {
        const screenWidth = window.innerWidth;

        if (screenWidth < 768) {
            // Small screens (mobile)
            return 0.2; // Trigger when 10% is visible
        } else if (screenWidth < 1020) {
            // Medium screens (tablet)
            return 0.3; // Trigger when 30% is visible
        } else {
            // Large screens (desktop)
            return 0.35; // Trigger when 50% is visible
        }
    }

    // Initialize Intersection Observer
    const sections = document.querySelectorAll('.section');

    let observerOptions = {
        threshold: getThreshold(), // Initial threshold based on screen size
    };

    let observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Section is visible, apply fade-in effect
                entry.target.classList.add('visible-fade');
            } else {
                // Section is not visible, remove fade effect
                entry.target.classList.remove('visible-fade');
            }
        });
    }, observerOptions);

    // Function to reinitialize the observer on screen resize
    function reinitializeObserver() {
        observer.disconnect(); // Stop observing with the old threshold
        observerOptions.threshold = getThreshold(); // Update threshold
        observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible-fade');
                } else {
                    entry.target.classList.remove('visible-fade');
                }
            });
        }, observerOptions);

        // Reobserve all sections with the new observer
        sections.forEach(section => observer.observe(section));
    }

    // Observe each section
    sections.forEach(section => observer.observe(section));

    // Add a listener to handle screen resize
    window.addEventListener('resize', reinitializeObserver);
</script>

</body>
</html>
