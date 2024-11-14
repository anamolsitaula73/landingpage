<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eAccounting</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
<style>
   body {
    width:100%;
    background-color:#F6FFFA !important;


}
.body-css{
    width:100%;
    overflow-x: hidden;

}
body {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }

</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<script>


</script>
<body>

<?php 
session_start(); // Start session to store form data
include('headerr.php')?>

<div class="body-css">

<?php include('certification.php') ?>  
<br>
<br>
<br>
<?php include('compare_table.php') ?>  
<?php include('features.php') ?>  
<hr style=" border-top: 3.5px solid #164193;">
<?php include('solution.php') ?>  
<?php include('popup.php') ?>
<?php include('go-to-top.php') ?>

<?php include('social/whatsapp.php') ?>
<?php include('social/messenger.php') ?>

<?php include('slider.php') ?>  
<?php include('pricing.php') ?>  

<?php include('faq.php') ?>  


<?php include('buynow.php') ?>  




<!-- <iframe src='https://widgets.sociablekit.com/google-reviews/iframe/25478735' frameborder='0' width='100%' height='1000'></iframe> -->









<div class="footer-div">

<?php include('footer/footer.php')?>
</div>
<!-- Footer Section -->

</div>

