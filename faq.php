<style>
   
   .btn {
   border: none;
   color: white !important; /* Default text color */
   background-color: #e20613 !important; 
   transition: color 0.3s, background-color 0.3s; /* Smooth transition for hover effect */
}
       .faq-container {
           width: 90%;
           margin: 40px auto;
       }

       .faq-page {
           /* background-color: white; */
        background-color:#F6FFFA !important;

           color: #164193 !important;
           padding: 15px;
           cursor: pointer;
           margin: 0;
           font-weight:bold;
           font-size: 20px;
           border: none;
           outline: none;
           display: flex;
           justify-content: space-between;
           align-items: center;
           transition: background-color 0.3s ease, color 0.3s ease;
       }

       .faq-page:hover {
           background-color:#e4f8fb!important;
       }

       .faq-page.active {
           color: white;
       }

       .faq-page::after {
           content: '+';
           font-size: 24px;
           font-weight: bold;
           color: #164193;
           transition: color 0.3s ease;
       }

       .faq-page.active::after {
           content: '-';
       }

       .faq-body {
           display: none;
           background-color: white;
           color: black;
           padding: 15px;
           border-top: 2px solid #164193;
           font-size:14px;
       }

       .faq-body ul {
           list-style: none;
           padding-left: 20px;
       }

       .faq-body ul li {
   margin: 8px 0;
   position: relative;
   line-height: 1.8; /* Adjust the line height if necessary */
}

.faq-body ul li::before {
   content: '•';
   position: absolute;
   left: -20px;
   top: 0; /* Ensures the bullet aligns with the text */
   color: black;
   font-size: 20px;
   line-height: 1.5; /* Matches the line height of the text */
}

       .hr-line {
           border: none;
           border-top: 2px solid #164193;
           margin: 10px 0;
       }

       /* Responsive Styles */
       @media (max-width: 768px) {
           .faq-page {
               font-size: 18px;
               padding: 12px;
           }

           .faq-body {
               font-size: 16px;
               padding: 12px;
           }

           .faq-page::after {
               font-size: 20px;
           }
       }

       @media (max-width: 480px) {
           .faq-page {
               font-size: 16px;
               padding: 10px;
           }

           .faq-body {
               font-size: 14px;
               padding: 10px;
           }

           .faq-page::after {
               font-size: 18px;
           }
       }

       .faq-section {
 background-color: #164193;
 color: white;
 text-align: center;
 padding: 20px;
 font-size: 24px;
 font-weight: bold;
 margin: 40px 0;
}

@media (max-width: 768px) {
 .faq-section {
   font-size: 20px;
   padding: 15px;
 }
}

@media (max-width: 480px) {
 .faq-section {
   font-size: 18px;
   padding: 10px;
 }
}

   </style>

</head>


<body class="faqs">

<div style="background-color:#F6FFFA !important;">


  <br>
   <div class="faq-section">
 FAQs
</div>
   <section class="faq-container">
       <div class="faq-one">
           <h2 class="faq-page">What is accounting software ?</h2>
           <div class="faq-body">
               <p>Online accounting software is sometimes called 'cloud-based software'. It allows users to create, store and send invoices from any device. You don't need anything saved on your computer, and there are no disks to load. Simply log in on a web browser and jump right into your ezoneBooks online account. Your personal data and settings are right there, stored safely in 'the cloud'.</p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-two">
           <h2 class="faq-page">Why should i move my business to the cloud ?</h2>
           <div class="faq-body">
           <ul>
                    <li>e-Accounting is an easy-to-use accounting software that can help you automate tasks such as bookkeeping, invoicing, expense tracking, inventory management and more.</li>
                    <li>We offer different plans and features designed for businesses of all sizes and industries. </li>
                    <li>We take pride in providing exceptional customer service support. We offer free set up sessions with our ezoneBooks experts to help you get started with your account. </li>
                    <li>You will also have access to a range of on demand webinars and video tutorials.</li>
                    <li>ezoneBooks is tough to beat on customer service and great value.</li>
                 
                </ul>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-three">
           <h2 class="faq-page">Can I access  Online accounting software on my mobile phone or tablet?</h2>
           <div class="faq-body">
               <p>e-Accounting software can be accessed online from any web enabled mobile device with a web browser.</p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-four">
           <h2 class="faq-page">Is my data secure?</h2>
           <div class="faq-body">
               <p>When you use e-Accounting, your data is stored on our servers in the cloud. We know that data is one of your company's most valuable assets, so we go to great lengths to protect it.
                    We rely on advanced, industry-recognised security safeguards to keep all of your financial data private and protected. e-Accounting is a ISO certified product since 2015 . ISO is one of the most rigorous quality testing certificates in the world. 
                </p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-five">
           <h2 class="faq-page">Is it possible for me to get software updates/upgrades, and if so, how do I get them?</h2>
           <div class="faq-body">
               <p>Yes, One of the numerous advantages of cloud-based software is that it is always up to date.
                   Updates are carried out automatically and have no impact on your data.</p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-six">
           <h2 class="faq-page">Do I need to Download e-Accounting Software?</h2>
           <div class="faq-body">
               <p>There is no need to download e-Accounting  because it is connected to the cloud, which means you can access it from any device with an internet connection.</p>
           </div>
       </div>

       <hr class="hr-line">



   </section>
</div>
   <!-- JavaScript -->
   <script>
       const faqs = document.querySelectorAll('.faq-page');

       faqs.forEach(faq => {
           faq.addEventListener('click', function() {
               // Close all other FAQ bodies and remove the active class
               faqs.forEach(item => {
                   if (item !== this) {
                       item.nextElementSibling.style.display = 'none';
                       item.classList.remove('active');
                   }
               });
               
               // Toggle the current FAQ body and active class
               const faqBody = this.nextElementSibling;
               if (faqBody.style.display === 'block') {
                   faqBody.style.display = 'none';
                   this.classList.remove('active');
               } else {
                   faqBody.style.display = 'block';
                   this.classList.add('active');
               }
           });
       });
   </script>
