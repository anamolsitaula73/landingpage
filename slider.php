<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Carousel Slider</title>
    <style>
        /* Slideshow container */
        .slideshow-container {
            width: 100%;
            position: relative;
            margin: auto;
            overflow: hidden; /* Hide overflow */
        }

        .slider-wrapper{
  width:85%;
}
        /* Carousel track */
        .carousel-track {
            display: flex; /* Use Flexbox to display slides in a row */
            transition: transform 0.5s ease-in-out; /* Smooth transition */
        }

        /* Slide styling */
        .slide {
    flex: 0 0 33.333%; /* Show 3 slides at a time by default */
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
    height: 100%; /* Fixed height for each slide */
}


        /* Navigation buttons */
        .prev, .next {
          padding: 10px 20px;
            background-color: #d90429;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        .toggle-btn {
            padding: 10px 20px;
            background-color: #d90429;
            color: white;
            border: none;
            cursor: pointer;
            border-radius:20px;

            font-size: 16px;
            margin-top: 15px;
        }

        .toggle-btn:hover {
            background-color: black;
        }
      

        .prev:hover, .next:hover {
            background-color: black;
            color:white;
        }

        @media (max-width: 1500px) {
          .slider-wrapper{
                      width:95%;
                   }
        }

        @media (max-width: 1340px) {
          .slider-wrapper{
                      width:100%;
                   }
        }

        /* Media Queries to adjust the number of slides based on screen size */
        @media (max-width: 1024px) {
            .slide {
                flex: 0 0 50%; /* Show 2 slides at a time on tablets */
            }
                    
        }

        @media (max-width: 699px) {
            .slide {
                flex: 0 0 100%; /* Show 1 slide at a time on mobile phones */
                align-items:center;  
                margin:auto;
 

            }
                        .client-slide {
                        width:70%;
    height: 300px;/* Ensure full height */


                         }
        }
        
        @media (max-width: 474px) {
            .slide {
                flex: 0 0 100%; /* Show 1 slide at a time on mobile phones */
                align-items:center;  

            }
                        .client-slide {
                        width:80%;
                         }
        }

        @media (max-width: 340px) {
            .slide {
                flex: 0 0 100%; /* Show 1 slide at a time on mobile phones */
                align-items:center;  
               padding: 0px;


            }
                        .client-slide {
                        width:90%;
                   padding: 0px;

                         }
        }

/* Each slide */
.client-slide {
    display: flex;
    flex-direction: column; /* Arrange content in a column */
    justify-content: center; /* Center content vertically */
    align-items: center; /* Center content horizontally */
    border: 2px solid #d90429;
    border-radius: 5px;
    padding: 0 20px;
    margin:auto;

    transition: opacity 0.3s ease; /* Smooth transition for opacity changes */
    height: 370px;/* Ensure full height */
}



/* Ensuring all logos are the same size */
.client-slide img {
    width: 150px;
    height: 100px;
    object-fit: contain;
    display: block;
}


/* Responsive Settings */
@media (min-width: 792px) {
    .client-slide {
        min-width: 200px;
        
    }
}

@media (min-width: 1024px) {
    .client-slide {
        min-width: 250px;
    }
}

.container-module {
      width: 100%;
      background-color: #F6FFFA;
    }

    .module-container {
    min-width: 250px; /* Further adjust for larger screens */

      text-align: center;
      margin-bottom: 30px;
      color: white;

    }

    .module-container img {
    width: 150px;
    height: 150px;
    filter: brightness(0) saturate(1000%) hue-rotate(210deg); /* Apply a filter to make icons blue */
    margin-bottom: 15px;
    transition: filter 0.3s ease; /* Smooth transition on hover */
}

.module-container img:hover {
    filter: brightness(0) saturate(1000%) hue-rotate(180deg); /* Adjust hue on hover for effect */
}

    .module-container p {
      font-size: 14px;
      font-weight: bold;
      margin-top: 10px;
    }

    .module-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* 5 modules per row */
      gap: 20px;
      background-color:#F6FFFA;
      padding: 20px;
      border: 1px solid white;
      width: 100%;
    }

    .module-item {
      cursor: pointer;
      background-color: white;

    }
    
    .module-item h1{
     
      color:#0c2450;

    }

    /* Content section hidden by default */
    .module-content {
      margin-top: 10px;
      font-size: 12px;
      color: #333;
      text-align: left;
          background-color: #f0f8ff;
      
      padding: 10px;
      border: 1px solid #ddd;
    }

    /* For smaller screens */
    @media (max-width: 991px) {
      .module-grid {
        grid-template-columns: repeat(3, 1fr); /* 3 modules per row */
      }

      .module-container img {
        width: 75px;
        height: 75px;
      }

      .module-container p {
        font-size: 12px;
      }
    }

    @media (max-width: 767px) {
      .module-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 modules per row */
      }
    }
    
    </style>
    <script>

function animateNumbers(element, target, duration) {
    let start = 0;
    const increment = target / (duration / 100);
    const interval = setInterval(() => {
        start += increment;
        if (start >= target) {
            start = target;
            clearInterval(interval);
        }
        element.querySelector('strong').innerText = Math.floor(start);
    }, 100);
}

function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Start the animation when the element is in view
            animateNumbers(document.getElementById("schoolCount"), 1000, 2000);
            animateNumbers(document.getElementById("yearCount"), 21, 2000);
            animateNumbers(document.getElementById("userCount"), 300, 2000);
            observer.unobserve(entry.target); // Stop observing after animation starts
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    const target = document.getElementById("stats"); // Target the entire stats section
    const observer = new IntersectionObserver(handleIntersection, {
        threshold: 0.3 // Trigger when at least 10% of the target is visible
    });

    observer.observe(target);
});
        </script>
</head>
<body>
    <center>
   
        <div class="slider-wrapper">
            <div class="slideshow-container">
                <div class="carousel-track">

                    <div class="slide mySlides">
                    <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content2')">
    <center>

        <img src="assets/images/sales.svg" alt="Sales Icon">
  </center>

  <hr style=" border-top: 2px solid white;">
     <h1><strong>Sales</strong></h1>
        <div id="content2" class="module-content">
          <p>Sales module covers customer orders, invoicing, and tracking sales transactions.</p>
        </div>
      </div>
 </div>
                    </div>

                    <div class="slide mySlides">
                    <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content3')">
  <center>

        <img src="assets/images/purchasing.svg" alt="Purchasing Icon">
  </center>

  <hr style=" border-top: 2px solid white;">
        
        <h1><strong>Purchasing</strong></h1>
        <div id="content3" class="module-content">
          <p>Purchasing module manages vendor orders, invoices, and incoming goods.</p>
        </div>
      </div>

    </div>
                    </div>

                    <div class="slide mySlides">
                    <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content4')">
  <center>

        <img src="assets/images/inventory.svg" alt="Inventory Icon">
  </center>

  <hr style=" border-top: 2px solid white;">

        <h1><strong>Inventory</strong></h1>
        <div id="content4" class="module-content">
          <p>Inventory module keeps track of product stock levels, locations, and movement.</p>
        </div>
      </div>

    </div>
                    </div>

                    <div class="slide mySlides">
                    <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content5')">
  <center>

        <img src="assets/images/accounting.svg" alt="Accounting Icon">
  </center>

        <hr style=" border-top: 2px solid white;">

        <h1><strong>Accounting</strong></h1>
        <div id="content5" class="module-content">
          <p>Accounting module handles general ledger, accounts payable, and accounts receivable.</p>
        </div>
      </div>
  </div>
                    </div>

                    <div class="slide mySlides">
                    <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content6')">
    <center>
        <img src="assets/images/crm.svg" alt="CRM Icon">
  </center>
  <hr style=" border-top: 2px solid white;">

        <h1><strong>CRM</strong></h1>
        <div id="content6" class="module-content">
          <p>CRM module helps manage customer relationships and interactions.</p>
        </div>
      </div>

  </div>
                    </div>

                    <div class="slide mySlides">
                    <div class="client-slide">
     <div class="module-item module-container" onclick="toggleContent('content7')">
     <center>    <img src="assets/images/payroll.svg" alt="Payroll Icon"></center>
  <hr style=" border-top: 2px solid white;">

        <h1><strong>Payroll</strong></h1>
        <div id="content7" class="module-content">
          <p>Payroll module calculates employee salaries, taxes, and generates pay slips.</p>
        </div>
      </div>
    </div>
                    </div>

                    <div class="slide mySlides">
                    <div class="client-slide">
     <div class="module-item module-container" onclick="toggleContent('content8')">
     <center>
        <img src="assets/images/organizationstructure.svg" alt="Org Structure Icon"></center>
  <hr style=" border-top: 2px solid white;">
        
        <h1><strong>Org Structure</strong></h1>
        <div id="content8" class="module-content">
          <p>Org structure module defines the hierarchy and departments in an organization.</p>
        </div>
      </div>

    </div>
                        </div> 
                        
                        <div class="slide mySlides">
                        <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content9')">
    <center><img src="assets/images/businesspartner.svg" alt="Business Partners Icon"></center>
  <hr style=" border-top: 2px solid white;">

        <h1><strong>Business Partners</strong></h1>
        <div id="content9" class="module-content">
          <p>Business partners module tracks relationships with external partners.</p>
        </div>
      </div>
  </div>

                        </div>

                    <div class="slide mySlides">
                    <div class="client-slide">
      
      
      <div class="module-item module-container" onclick="toggleContent('content10')">
      <center> <img src="assets/images/hrm.svg" alt="Human Resource Icon"></center>
    <hr style=" border-top: 2px solid white;">
          
          <h1><strong>Human Resource</strong></h1>
          <div id="content10" class="module-content">
            <p>Human resource module handles employee management, attendance, and performance tracking.</p>
          </div>
        </div>
    </div>
      
                    </div>

                    <div class="slide mySlides">
                    <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content11')">
    <center> <img src="assets/images/budget.svg" alt="Budget Icon"></center>
  <hr style=" border-top: 2px solid white;">

        <h1><strong>Budget</strong></h1>
        <div id="content11" class="module-content">
          <p>Budget module helps in creating and managing financial plans and budgets.</p>
        </div>
      </div>


    </div>
                        </div>

                        <div class="slide mySlides">
                        <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content12')">
      
    <center> <img src="assets/images/sms.svg" alt="SMS Icon"> </center>
    <h1><strong>SMS</strong></h1>
        <div id="content12" class="module-content">
          <p>SMS module sends notifications and alerts to customers or employees via SMS.</p>
        </div>
      </div>

    </div>

                        </div>

                        <div class="slide mySlides">
                        <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content13')">
    <center>
        <img src="assets/images/attendance.svg" alt="Attendance Icon"> </center>
        <h1><strong>Attendance</strong></h1>
        <div id="content13" class="module-content">
          <p>Attendance module tracks employee check-ins and check-outs for payroll processing.</p>
        </div>
      </div> 
    </div>
                        </div>

                        <div class="slide mySlides">
                        <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content14')">
    <center>  <img src="assets/images/report.svg" alt="Reports Icon"> </center>
  <hr style=" border-top: 2px solid white;">
        
        <h1><strong>Reports</strong></h1>
        <div id="content14" class="module-content">
          <p>Reports module generates various financial and operational reports for analysis.</p>
        </div>
      </div>
</div>
                        </div>


                    <!-- Add more slides as needed -->
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <button class="toggle-btn" onclick="toggleAutoplay()"><i class="fas fa-play"></i> <!-- Play icon --></button>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
        </div>
    </center>
    <script>
        let slideIndex = 0;
        const totalSlides = document.querySelectorAll('.mySlides').length;
        let autoplayInterval;
        let isAutoplayActive = true;

        function updateSlides() {
            const track = document.querySelector('.carousel-track');
            const slideWidth = track.clientWidth / getSlidesToShow();
            track.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
        }

        function plusSlides(n) {
            const slidesToShow = getSlidesToShow();
            slideIndex += n;
            if (slideIndex > totalSlides - slidesToShow) slideIndex = 0;
            if (slideIndex < 0) slideIndex = totalSlides - slidesToShow;
            updateSlides();
        }

        function getSlidesToShow() {
            const screenWidth = window.innerWidth;
            if (screenWidth <= 768) return 1;  // Mobile: 1 slide
            if (screenWidth <= 1024) return 2; // Tablet: 2 slides
            return 3;  // Desktop: 3 slides
        }

        // Function to start or stop autoplay
        function toggleAutoplay() {
            if (isAutoplayActive) {
                clearInterval(autoplayInterval);  // Stop autoplay
                document.querySelector('.toggle-btn i').classList.remove('fa-play');
                document.querySelector('.toggle-btn i').classList.add('fa-pause'); // Change to Pause icon
            } else {
                autoplayInterval = setInterval(function() {
                    plusSlides(1);
                }, 3000);  // Start autoplay
                document.querySelector('.toggle-btn i').classList.remove('fa-pause');
                document.querySelector('.toggle-btn i').classList.add('fa-play'); // Change to Play icon
            }
            isAutoplayActive = !isAutoplayActive;  // Toggle state
        }

        // Auto-slide every 3 seconds initially
        autoplayInterval = setInterval(function() {
            plusSlides(1);
        }, 3000);

        // Initialize the slider on page load
        updateSlides();

        // Update the slider when the window is resized
        window.addEventListener('resize', updateSlides);
    </script>

</body>
</html>
