<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eAccounting</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* General styles */
        body {
            font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .body-css {
            width: 100%;
        }

        /* Section styles */
        .section {
            overflow-x:hidden;
            opacity: 0; /* Initially hidden */
            transition: opacity 1s ease; /* Smooth fade transition */
        }

        /* When the section becomes visible */
        .section.visible-fade {
            opacity: 1; /* Fade in when section is in view */
        }

    </style>
</head>
<body>

<?php 
session_start(); // Start session to store form data
include('headerr.php');
include('social/messenger.php');
include('social/whatsapp.php');
include('go-to-top.php');
?>

<div class="body-css">

    <!-- Sections with animations -->
    <div class="section" id="certification-section">
        <?php include('certification.php') ?>  
    </div>

    <div class="section" id="features-section">
        <?php include('features.php') ?>  
    </div>

    <div class="section" id="compare-table-section">
    <?php include('compare_table.php') ?>  

    </div>

    <div class="section" id="feature-table-section">
        <?php include('feature_table.php') ?>  
    </div>

    <div class="section" id="solution-section">
        <?php include('solution.php') ?>  
    </div>

    <div class="section">
        <?php include('slider.php') ?>  
    </div>

    <div class="section">
        <?php include('pricing.php') ?>  
    </div>

    <div class="section">
        <?php include('testimonial.php') ?>  
    </div>

    <div class="section">
        <?php include('faq.php') ?>  
    </div>

        <div class="footer-div">
            <?php include('footer/footer.php'); ?>
        </div>
</div>

<script>
    // Use Intersection Observer to handle fade-in and fade-out effects
    const sections = document.querySelectorAll('.section');

    const observerOptions = {
        threshold: 0.2, // Trigger when 40% of the section is visible
    };

    const observer = new IntersectionObserver((entries) => {
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

    // Observe each section
    sections.forEach(section => {
        observer.observe(section);
    });
</script>

</body>
</html>
