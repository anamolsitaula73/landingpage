<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Slider</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* General Styles */
    .product-current {
      width: 80%;
      margin: auto;
      /* padding-bottom:10 0px; */
      padding-top:50px;
    }
    

    .product-capabilities {
      display: flex;
      width: 100%;
      margin: auto;
      gap: 20px;
    }

    .product-feature-content {
      flex: 2;
      position: relative;
      display: flex;
      overflow: hidden;
    }

    .product-content-item {
      flex: 0 0 100%;
      min-width: 100%;
      transition: transform 0.5s ease-in-out;
    }

    .product-content-item h2 {
      font-size: 24px;
      color: #164193;
    }

    .product-content-item p {
      font-size: 16px;
      text-align:center;
      color: #333;
    }

    .product-features-image {
      width: 100%;
      height: auto;
      max-width: 560px;
      object-fit: contain;
      border-radius: 8px;
      display: block;
      margin: 20px 0;
    }

    /* Feature List (Hidden on Small Screens) */
    .product-features-list {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .product-feature-item {
      display: flex;
      align-items: center;
      padding: 15px;
      border-radius: 8px;
      cursor: pointer;
      background-color: #e9ecef;
      border-left: 4px solid transparent;
      transition: all 0.3s;
    }

    .product-feature-item.product-active {
      border-left: 4px solid #2DCC9D;
      background-color: #e0f7fa;
    }

    .product-feature-item i {
      font-size: 30px;
      color: #164193;
      margin-right: 10px;
    }

    .product-feature-item h3 {
      color: #164193;
      font-size: 18px;
      margin: 0;
    }

    .product-feature-item p {
        text-align:center;
      font-size: 14px;
      color: #555;
      margin: 5px 0 0;
    }
    .product-dots {
    display: none;
    justify-content: center;
    margin-top: 20px;
  }

  .dot {
    width: 10px;
    height: 10px;
    background-color: #ccc;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .dot.active-dot {
    background-color: #2DCC9D;
  }
 
    /* Responsive Styles for Smaller Screens */
    @media screen and (max-width: 1220px) {
        .product-current {
      width: 100%;
      padding:10px;
      left:50;
      margin: auto;
    }

    .product-dots {
    display: flex;
    justify-content: center;
    margin-top: 20px;
  }
    .product-features-image {
     
      margin: auto;
    }
      .product-capabilities {
        flex-direction: column;
      }

      .product-features-list {
        display: none; /* Hide the feature list */
      }

      .product-feature-content {
        position: relative;
        display: flex;
        overflow: hidden;
      }

      .product-content-item {
        flex: 0 0 100%;
        min-width: 100%;
        transition: transform 0.5s ease-in-out;
      }
    }
  </style>
</head>
<body>
  <h2 class="feature-header">What We Promise!</h2>
  <div class="product-current">
    <div class="product-capabilities">
      <!-- Hidden Feature List for Smaller Screens -->
      <div class="product-features-list">
        <div class="product-feature-item product-active" data-feature="get-paid">
          <i class="fas fa-hand-holding-usd"></i>
          <div>
            <h3>Get Paid Faster</h3>
            <p>It's simple, fast, and convenient.</p>
          </div>
        </div>
        <div class="product-feature-item" data-feature="track-inventory">
          <i class="fas fa-boxes"></i>
          <div>
            <h3>Track Inventory in Real-Time</h3>
            <p>Manage inventory, orders, returns.</p>
          </div>
        </div>
        <div class="product-feature-item" data-feature="organize-expenses">
          <i class="fas fa-receipt"></i>
          <div>
            <h3>Organize Expenses Effortlessly</h3>
            <p>Know the ins and outs of your expenses.</p>
          </div>
        </div>
        <div class="product-feature-item" data-feature="payroll-hr">
          <i class="fas fa-user-clock"></i>
          <div>
            <h3>Payroll and Core HR</h3>
            <p>Your reports, the way you like them.</p>
          </div>
        </div>
        <div class="product-feature-item" data-feature="advance-functionality">
          <i class="fas fa-cogs"></i>
          <div>
            <h3>Advanced Functionality</h3>
            <p>Everything you need to increase productivity.</p>
          </div>
        </div>
      </div>

      <!-- Slider Content -->
      <div class="product-feature-content">
        <div class="product-content-item product-active" id="get-paid">
          <h3>Get Paid Faster</h3>
          <p>Automate invoicing and send reminders. Track your payments in real-time and reduce payment delays significantly.</p>
          <img class="product-features-image" src="assets/images/getpaidfaster.png" alt="Get Paid Faster">
        </div>
        <div class="product-content-item" id="track-inventory">
          <h3>Track Inventory in Real-Time</h3>
          <p>Monitor your inventory levels instantly, get alerts for low stock, and make informed purchasing decisions.</p>
          <img class="product-features-image" src="assets/images/inventory.png" alt="Track Inventory">
        </div>
        <div class="product-content-item" id="organize-expenses">
          <h3>Organize Expenses Effortlessly</h3>
          <p>Record and categorize your business expenses with ease, and get comprehensive financial reports at your fingertips.</p>
          <img class="product-features-image" src="assets/images/expenses.png" alt="Organize Expenses">
        </div>
        <div class="product-content-item" id="payroll-hr">
          <h3>Payroll, HR, Time & Attendance</h3>
          <p>Extend the power of people managing core HR, payroll & attendance with integrated financials.</p>
          <img class="product-features-image" src="assets/images/payrollhr.png" alt="Payroll and HR">
        </div>
        <div class="product-content-item" id="advance-functionality">
          <h3>Advanced Functionality</h3>
          <p>Automates business workflows and helps you work collectively across departments and multiple locations.</p>
          <img class="product-features-image" src="assets/images/advanced.png" alt="Advanced Functionality">
        </div>
      </div>
    </div>
  </div>
    <!-- Dot Indicators -->
    <div class="product-dots">
    <span class="dot active-dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
</div>
  <script>
 document.addEventListener("DOMContentLoaded", () => {
  const contentItems = document.querySelectorAll(".product-content-item");
  const featureItems = document.querySelectorAll(".product-feature-item");
  const dots = document.querySelectorAll(".dot");
  let activeIndex = 0;
  let autoSlideInterval;

  // Function to update the slider view
  function updateSlider(index) {
    const offset = -index * 100; // Calculate offset for transform
    contentItems.forEach((item, idx) => {
      // Update transform for sliding
      item.style.transform = `translateX(${offset}%)`;

      // Manage active class
      item.classList.toggle("product-active", idx === index);
    });

    featureItems.forEach((item, idx) => {
      item.classList.toggle("product-active", idx === index);
    });

    dots.forEach((dot, idx) => {
      dot.classList.toggle("active-dot", idx === index); // Highlight active dot
    });

    activeIndex = index; // Update active index
  }

  // Function to cycle through slides automatically
  function startAutoSlide() {
    stopAutoSlide(); // Clear any existing interval
    autoSlideInterval = setInterval(() => {
      activeIndex = (activeIndex + 1) % contentItems.length; // Loop back to the first slide
      updateSlider(activeIndex);
    }, 3000); // Change slide every 3 seconds
  }

  // Stop auto-sliding
  function stopAutoSlide() {
    clearInterval(autoSlideInterval);
  }

  // Add click event to feature items
  featureItems.forEach((item, index) => {
    item.addEventListener("click", () => {
      stopAutoSlide(); // Pause auto-slide
      updateSlider(index); // Move to the selected feature
      startAutoSlide(); // Resume auto-slide after interaction
    });
  });

  // Add click event to dots
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      stopAutoSlide(); // Pause auto-slide
      updateSlider(index); // Move to the selected slide
      startAutoSlide(); // Resume auto-slide
    });
  });

  // Initialize the first slide and start auto-slide
  updateSlider(activeIndex);
  startAutoSlide();
});
</script>