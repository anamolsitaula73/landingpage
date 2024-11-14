<style>
/* Container */
.logo-slider {
  width: 100%;
  overflow: hidden;
  position: relative;
  padding: 20px 0;
  background-color:aliceblue;
  color:black;
}

/* Slider track */
.client-slider-track {
  display: flex;
  width: calc(200px * 10); /* Width based on the number of slides */
  animation: scroll 35s linear infinite;
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%); /* Move halfway through the duplicate logos */
  }
}

/* Each slide */
.client-slide {
    min-width: 200px !important;

    display: flex;
    border: 2px solid #d90429;
    border-radius: 5px;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    margin: 20px;
    transition: opacity 0.3s ease; /* Smooth transition for opacity changes */
}


/* Ensuring all logos are the same size */
.client-slide img {
  width: 150px; /* Fixed width for all logos */
  height: 100px; /* Fixed height for all logos */
  object-fit: contain; /* Ensures logos scale within the box without distortion */
  display: block;
}

/* Responsive Settings */
@media (min-width: 640px) {
  .client-slide {
    min-width: 200px; /* Adjust for larger screens */
  }
}

@media (min-width: 1024px) {
  .client-slide {
    min-width: 250px; /* Further adjust for larger screens */
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
    width: 120px;
    height: 120px;
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

<!-- <script>
    // JavaScript function to toggle content display
    function toggleContent(contentId) {
      const selectedContent = document.getElementById(contentId);

      // Hide all other content sections
      const contents = document.querySelectorAll('.module-content');
      contents.forEach(content => {
        if (content !== selectedContent) {
          content.style.display = 'none';
        }
      });

      // Toggle the selected content
      if (selectedContent.style.display === 'block') {
        selectedContent.style.display = 'none';
      } else {
        selectedContent.style.display = 'block';
      }
    }
  </script> -->
    <br>



<br>
<div class="logo-slider">

  <div class="client-slider-track">
  <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content1')">
      <center>
      <br>
    <img src="assets/images/assembly.svg" alt="Assembly Icon" >

  </center>
      <hr style=" border-top: 2px solid white;">
       <h1 ><strong>Assembly</strong></h1>
           <div id="content1" class="module-content">
          <p>Assembly is the process of putting together components to build a final product in accounting.</p>
        </div>
      </div>
  </div>

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

    <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content12')">
      
    <center> <img src="assets/images/sms.svg" alt="SMS Icon"> </center>
        <p>SMS</p>
        <div id="content12" class="module-content">
          <p>SMS module sends notifications and alerts to customers or employees via SMS.</p>
        </div>
      </div>

    </div>

    <div class="client-slide">
    <div class="module-item module-container" onclick="toggleContent('content13')">
    <center>
        <img src="assets/images/attendance.svg" alt="Attendance Icon"> </center>
        <p>Attendance</p>
        <div id="content13" class="module-content">
          <p>Attendance module tracks employee check-ins and check-outs for payroll processing.</p>
        </div>
      </div> 
    </div>

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

<br><br>