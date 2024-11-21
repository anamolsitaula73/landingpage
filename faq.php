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
        /* background-color:#F6FFFA !important; */

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
           text-align:left;
           transition: background-color 0.3s ease, color 0.3s ease;
       }

       .faq-page:hover {
           background-color:#e4f8fb!important;
       }

       .faq-page.active {
           background-color: white !important;
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

<div >
   <div class="faq-section">
 FAQs
</div>
   <section class="faq-container">
       <div class="faq-one">
           <h2 class="faq-page">Where are we based ?</h2>
           <div class="faq-body">
               <p>We are a US based Company that has been serving in the South Asian market for 20 years to thousands of companies from IB world schools , Universities to Major corporations and Airline companies. </p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-two">
           <h2 class="faq-page">Is my data safe overseas?</h2>
           <div class="faq-body">
           <p>Our Data is hosted by DATA HUB, an international standards of Data security and Data Centers with Carrier-neutral that is suitable for BFIs, Enterprises, ICT Companies, and other Corporate houses data housing needs.</p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-three">
           <h2 class="faq-page">How is data security maintained when you transfer data?</h2>
           <div class="faq-body">
               <p>e-Accounting protects your personal information. For security of transactions, we use the Secure Sockets Layer (SSL) protocol, which encrypts any information such as credit card number and billing information that you send us electronically. The encryption process protects your information by scrambling it before it is sent to us from your computer. In addition, your data is backed up automatically and is accessible from any device, so you can always stay connected and up-to-date. We are committed to maintaining the highest levels of security for our customers, their data, and their processes. Our team protects data, mitigates risks, and helps customers achieve regulatory compliance by aligning people, processes, and technology. Our multiple redundant servers provide complete reliability, and data is saved in multiple places.
               </p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-four">
           <h2 class="faq-page">Can I afford it ?</h2>
           <div class="faq-body">
               <p>It is free for our initial customer base even after it will be very affordable in comparison the other softwares in the market </p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-five">
           <h2 class="faq-page">How does the software handle differences in currency, tax rules, and other Australian-specific requirements?</h2>
           <div class="faq-body">
               <p>We have consulted a group of Australian Accountants and confirmed our Software meets Australian Regulations.</p>
           </div>
       </div>
       <hr class="hr-line">

       <div class="faq-six">
           <h2 class="faq-page">How long will we be around?</h2>
           <div class="faq-body">
               <p>We've been in business for over 20 years, trusted by global leaders like Microsoft and the World Bank. Our long-standing commitment to innovation and client satisfaction ensures we’re here for the long haul. Over 80% of our original customers still rely on us today. Plus, we offer full data export options to keep you in control. Let us prove it—try it for free and see the difference for yourself.</p>
           </div>
       </div>

       <hr class="hr-line">

<div class="faq-seven">
    <h2 class="faq-page">Can I easily export my data if I need to switch to another platform?</h2>
    <div class="faq-body">
        <p>The ease of  importing and exporting raw data is what makes e-Accounting so easy to use , you can export your data whenever you need.</p>
    </div>
</div>
<hr class="hr-line">

<div class="faq-eight">
    <h2 class="faq-page">How often can I reach out to support?</h2>
    <div class="faq-body">
    <p>Our support staff are live 24x7 , and well versed in software complexities and client needs with +2 years of experience.  </p>
</div>
</div>
<hr class="hr-line">

<div class="faq-nine">
    <h2 class="faq-page">How will my data be handled in the implementation process ?</h2>
    <div class="faq-body">
    <p> We will set up a meeting time that you pick and walk you through the step by step implementation process and guide you through the use cases of the software. You will have tutorial videos to guide you in each module , the representative will be present for you for a minimum of 2 week period or till your implementation is completed .</p>
</div>
</div>
<hr class="hr-line">

   </div>

   </section>
</div>
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
</body>
</html>