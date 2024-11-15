<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="footer/fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="footer/css/bootstrap.min.css">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="footer/css/style.css">
<style>
  .footer-48201{
    margin-right:0px !important;
    padding-left:0px;
  }
  .footer-48201 a,p {
      font-size:14px !important;
      /* padding: 40px 0; */
    }

.footer-48201 .btn.btn-tertiary:hover {
    background-color: #960018 !important; /* Darker shade for hover effect */
}
.footer_getfree{
  background-color:#28a745 !important; 
  color:red !important;
  padding: 10px;
  font-size:12px;
}
.footer_getfree:hover {
  background-color: #218838 !important; 
}
.footer_getfree a{
  color:white !important;
}
.footer-48201 .btn.btn-tertiary {
    background-color: #e42c64; /* Original background color */
    color: #fff;
    border: none;
    transition: background-color 0.3s ease; /* Smooth transition for background color */
}

.list_style{
  font-size:14px;
}
.icon-facebook, .icon-pinterest, .icon-youtube {
    font-size: 24px; /* Adjust the size as needed */
  color:white;
}
</style>
  </head>
  <body>

    
    <footer class="footer-48201">
      
      <div class="container">
        <div class="row">
          <div class="col-md-3 pr-md-2">
            <a href="https://www.ezone.com.np/" target="_blank" class="footer-site-logo d-block mb-4"><img src="ezone-logo.png"></a>
        


          </div>
          <div class="col-md-3">
            <ul class="list-unstyled nav-links">
              <li><a href="https://eaccounting.ezone.com.np/about-us" target="_blank" >About Us</a></li>
              <li><a href="https://eaccounting.ezone.com.np/pricing" target="_blank" >Pricing</a></li>
              <li><a href="https://eaccounting.ezone.com.np/what-you-get" target="_blank" >what-you-get</a></li>
              <li><a href="https://eaccounting.ezone.com.np/contacts" target="_blank" >Contacts</a></li>
            </ul>
          </div>
         
          <div class="col-md-3">
            <ul class="list-unstyled nav-links">
              <li class="list_style">email : <a href="#">email@email.com</a></li>
              <li class="list_style">phone : <a href="#">98123456678</a></li>
              <li class="list_style">address : <a href="#">98123456678</a></li>

         
            </ul>
          </div>
        
          <div class="col-md text-md-center">
            <ul class="social list-unstyled">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-youtube"></span></a></li>
            </ul>
            <!-- <p class=""><a href="#" class="btn btn-tertiary">Contact Us</a></p> -->
            <div class="footer_getfree btn " style="" id="get-it-free-footer"> <a href="#"><strong> Get eAccounting for free </strong></a>
    </div>
  
          </div>
        </div> 

        <div class="row ">
          <div class="col-12 text-center">
            <div class="copyright mt-5 pt-5">
              <p><small>&copy;Copyright © 2024 e-Zone International Pvt. Ltd. All rights reserved.</small></p>
            </div>
          </div>
        </div> 
      </div>
      <script>
    document.addEventListener('DOMContentLoaded', () => {
        const popup = document.getElementById('popup');
        const closeButton = document.querySelector('.close-button');
        const getItFreeButton = document.getElementById('get-it-free-footer');

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


    </footer>

    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>