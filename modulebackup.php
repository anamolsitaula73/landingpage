<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eAccounting Modules</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .container-module {
      width: 100%;
      background-color: #F6FFFA;
    }

    .module-container {
      text-align: center;
      margin-bottom: 30px;
      color: white;

    }

    .module-container img {
      width: 120px;
      height: 120px;
      filter: brightness(0) invert(1); /* Apply a filter to make icons white */
      margin-bottom: 15px;
      transition: filter 0.3s ease; /* Smooth transition on hover */
    }

    .module-container img:hover {
      filter: brightness(0) invert(0.8); /* Slight hover effect */
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
      border: 2px solid #164193;
      background-color: #164193;

    }

    .module-item:hover{
     
      background-color:#0c2450;

    }

    /* Content section hidden by default */
    .module-content {
      display: none;
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
</head>

<body>
  <div class="container-module mt-5">
    <br>
    <h2 class="text-center mb-4"><strong>eAccounting Modules</strong></h2>
    <div class="module-grid">
      <!-- Module 1 -->
      <div class="module-item module-container" onclick="toggleContent('content1')">
        <img src="assets/images/assembly.svg" alt="Assembly Icon">
  <hr style=" border-top: 2px solid white;">

        <h1 ><strong>Assembly</strong></h1>
        
        
        <div id="content1" class="module-content">
          <p>Assembly is the process of putting together components to build a final product in accounting.</p>
        </div>
      </div>

      <!-- Module 2 -->
      <div class="module-item module-container" onclick="toggleContent('content2')">
        <img src="assets/images/sales.svg" alt="Sales Icon">
  <hr style=" border-top: 2px solid white;">

        <h1><strong>Sales</strong></h1>
        <div id="content2" class="module-content">
          <p>Sales module covers customer orders, invoicing, and tracking sales transactions.</p>
        </div>
      </div>

      <!-- Module 3 -->
      <div class="module-item module-container" onclick="toggleContent('content3')">
        <img src="assets/images/purchasing.svg" alt="Purchasing Icon">
  <hr style=" border-top: 2px solid white;">
        
        <h1><strong>Purchasing</strong></h1>
        <div id="content3" class="module-content">
          <p>Purchasing module manages vendor orders, invoices, and incoming goods.</p>
        </div>
      </div>

      <!-- Module 4 -->
      <div class="module-item module-container" onclick="toggleContent('content4')">
        <img src="assets/images/inventory.svg" alt="Inventory Icon">
  <hr style=" border-top: 2px solid white;">

        <h1><strong>Inventory</strong></h1>
        <div id="content4" class="module-content">
          <p>Inventory module keeps track of product stock levels, locations, and movement.</p>
        </div>
      </div>

      <!-- Module 5 -->
      <div class="module-item module-container" onclick="toggleContent('content5')">
        <img src="assets/images/accounting.svg" alt="Accounting Icon">
        <hr style=" border-top: 2px solid white;">

        <h1><strong>Accounting</strong></h1>
        <div id="content5" class="module-content">
          <p>Accounting module handles general ledger, accounts payable, and accounts receivable.</p>
        </div>
      </div>

      <!-- Module 6 -->
      <div class="module-item module-container" onclick="toggleContent('content6')">
        <img src="assets/images/crm.svg" alt="CRM Icon">
  <hr style=" border-top: 2px solid white;">

        <h1><strong>CRM</strong></h1>
        <div id="content6" class="module-content">
          <p>CRM module helps manage customer relationships and interactions.</p>
        </div>
      </div>

      <!-- Module 7 -->
      <div class="module-item module-container" onclick="toggleContent('content7')">
        <img src="assets/images/payroll.svg" alt="Payroll Icon">
  <hr style=" border-top: 2px solid white;">

        <h1><strong>Payroll</strong></h1>
        <div id="content7" class="module-content">
          <p>Payroll module calculates employee salaries, taxes, and generates pay slips.</p>
        </div>
      </div>

      <!-- Module 8 -->
      <div class="module-item module-container" onclick="toggleContent('content8')">
        <img src="assets/images/organizationstructure.svg" alt="Org Structure Icon">
  <hr style=" border-top: 2px solid white;">
        
        <h1><strong>Org Structure</strong></h1>
        <div id="content8" class="module-content">
          <p>Org structure module defines the hierarchy and departments in an organization.</p>
        </div>
      </div>

      <!-- Module 9 -->
      <div class="module-item module-container" onclick="toggleContent('content9')">
        <img src="assets/images/businesspartner.svg" alt="Business Partners Icon">
  <hr style=" border-top: 2px solid white;">

        <h1><strong>Business Partners</strong></h1>
        <div id="content9" class="module-content">
          <p>Business partners module tracks relationships with external partners.</p>
        </div>
      </div>

      <!-- Module 10 -->
      <div class="module-item module-container" onclick="toggleContent('content10')">
        <img src="assets/images/hrm.svg" alt="Human Resource Icon">
  <hr style=" border-top: 2px solid white;">
        
        <h1><strong>Human Resource</strong></h1>
        <div id="content10" class="module-content">
          <p>Human resource module handles employee management, attendance, and performance tracking.</p>
        </div>
      </div>

      <!-- Module 11 -->
      <div class="module-item module-container" onclick="toggleContent('content11')">
        <img src="assets/images/budget.svg" alt="Budget Icon">
  <hr style=" border-top: 2px solid white;">

        <h1><strong>Budget</strong></h1>
        <div id="content11" class="module-content">
          <p>Budget module helps in creating and managing financial plans and budgets.</p>
        </div>
      </div>

      <!-- Module 12 -->
      <div class="module-item module-container" onclick="toggleContent('content12')">
        <img src="assets/images/sms.svg" alt="SMS Icon">
        <p>SMS</p>
        <div id="content12" class="module-content">
          <p>SMS module sends notifications and alerts to customers or employees via SMS.</p>
        </div>
      </div>

      <!-- Module 13 -->
      <div class="module-item module-container" onclick="toggleContent('content13')">
        <img src="assets/images/attendance.svg" alt="Attendance Icon">
        <p>Attendance</p>
        <div id="content13" class="module-content">
          <p>Attendance module tracks employee check-ins and check-outs for payroll processing.</p>
        </div>
      </div> 

      <!-- Module 14 -->
      <div class="module-item module-container" onclick="toggleContent('content14')">
        <img src="assets/images/report.svg" alt="Reports Icon">
  <hr style=" border-top: 2px solid white;">
        
        <h1><strong>Reports</strong></h1>
        <div id="content14" class="module-content">
          <p>Reports module generates various financial and operational reports for analysis.</p>
        </div>
      </div>
    </div>
  </div>

  <script>
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
  </script>
</body>

</html>
