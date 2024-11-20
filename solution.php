<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eAccounting Solutions</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .solution-section {
      background-color: ;
      padding: 40px 0;
      color: #164193;
    }

    .solution-title {
      text-align: center;
      margin-bottom: 30px;
      color: #164193 !important;
    }

    .solution-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr); /* 3 solutions per row */
      gap: 20px;
      padding: 0 50px;
    }

    .solution-item {
      background-color: white;
      border: 2px solid #164193;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      transition: box-shadow 0.3s ease;
    }

    .solution-item:hover {
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    }

    .solution-item img {
      width: 80px;
      height: 80px;
      margin-bottom: 20px;
    }

    .solution-item h4 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .solution-item p {
      font-size: 14px;
    }
    .solution-title{
      font-size:40px;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
      .solution-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 solutions per row */
      }

      .solution-item h4 {
        font-size: 16px;
      }

      .solution-item p {
        font-size: 12px;
      }
      .solution-title{
      font-size:30px;
    }

    }

    @media (max-width: 767px) {
      .solution-grid {
        grid-template-columns: 1fr; /* 1 solution per row */
      }
      .solution-title{
      font-size:25px;
    }

    }
    .solution-header{
      font-size: 32px;
      text-align:center;

            margin-bottom: 30px;
            font-weight:bold;
            color:#164193!important;
    }
    @media (min-width: 1400px) {
      .solution-header {
        font-size: 36px; /* Larger font for header */
    }
    }

    @media (max-width: 945px) {
            .solution-header {
                font-size: 28px;
            }
          }

          
        @media (max-width: 480px) {
            .solution-header {
                font-size: 24px;
            }
          }
  </style>
</head>

<body>

  <!-- Solution Section -->
  <section class="solution-section">
    <div class="container">
      <h1 class="solution-header" style=""><strong><span style="color:#e20613">e</span>-Accounting Solutions</strong></h1>
      <br>
      <div class="solution-grid">
        <!-- Solution 1 -->
        <div class="solution-item">
          <img src="assets/images/gps.jpg" alt="GPS Attendance Icon">
          <h4>GPS-based Attendance</h4>
          <p>Do you have staff working remotely or from home? Our GPS-based attendance tracks employees and their reporting locations, syncing with office attendance for seamless management.</p>
        </div>

        <!-- Solution 2 -->
        <div class="solution-item">
          <img src="assets/images/predictivepayroll.png" alt="Predictive Payroll Icon">
          <h4>Predictive Payroll Reports</h4>
          <p>Want to predict staff payments for the next quarter or year? Our Predictive Payroll reports provide accurate projections, so you can plan better.</p>
        </div>

        <!-- Solution 3 -->
        <div class="solution-item">
          <img src="assets/images/crm.svg" alt="CRM Icon">
          <h4>CRM for Employee and Client Management</h4>
          <p>Track all employee tasks and manage client and potential client data in one place with our integrated CRM, ensuring you’re always up-to-date.</p>
        </div>

        <!-- Solution 4 -->
        <div class="solution-item">
          <img src="assets/images/leave.png" alt="Leave Sync Icon">
          <h4>Leave & Payroll Sync</h4>
          <p>Automatically adjust payroll based on leave balances, ensuring smooth and accurate deductions without manual updates.</p>
        </div>

        <!-- Solution 5 -->
        <div class="solution-item">
          <img src="assets/images/branch.png" alt="Multi-branch Icon">
          <h4>Track Multiple Branches & Godowns</h4>
          <p>Monitor and manage multiple branches or godowns from a single account, simplifying complex multi-location operations.</p>
        </div>

        <!-- Solution 6 -->
        <div class="solution-item">
          <img src="assets/images/qrcard.svg" alt="QR Sales Icon">
          <h4>QR Generation & Credit Card Support</h4>
          <p>Generate QR codes and support credit card payments at sales points, enhancing customer convenience and speeding up transactions.</p>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
