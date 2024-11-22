<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
     
        .pricing-section {
            text-align: center;
            max-width: 1200px;
            width: 90%;
            padding: 20px;
            margin:auto;
        }
       
        .pricing-header {
            font-size: 32px;
            margin-bottom: 30px;
            font-weight:bold;
            text-align:center;

            color:#164193!important;
        }

        .pricing-toggle-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 15px 0;
        }

        .pricing-save-label {
            background: #ffccd5;
            color: #ff4d6d;
            padding: 8px 15px;
            border-radius: 15px;
            margin-left: 10px;
            font-size: 16px;
        }

        .pricing-switch {
            margin: 0 10px;
            position: relative;
            display: inline-block;
            width: 60px;
            height: 30px;
        }

        .pricing-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .pricing-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #164193;
            border-radius: 30px;
            transition: 0.4s;
        }

        .pricing-slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 5px;
            bottom: 5px;
            background-color: white;
            border-radius: 50%;
            transition: 0.4s;
        }

        .pricing-switch input:checked + .pricing-slider {
            background-color: #e20613;
        }

        .pricing-switch input:checked + .pricing-slider:before {
            transform: translateX(30px);
        }

        .pricing-cards {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .pricing-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 30px;
            width: 300px;
            position: relative;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
        }

        .pricing-popular {
            border: 2px solid #2196f3;
        }

        .pricing-popular-label {
            background: #ffccd5;
            color: #ff4d6d;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .pricing-price {
            font-size: 28px;
            font-weight: bold;
            margin: 15px 0;
            color:#e20613;
        }

        .pricing-currency {
            font-size: 24px;
        }
        .pricing-currency-offer{
            font-size: 30px;
            color:#8abc00;

        }

        .pricing-frequency-offer{
            color:#8abc00;
            

        }
        .pricing-btn {
            margin-top: 20px;
            padding: 12px;
            background: #e20613;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s;
        }

        .pricing-btn:hover {
            background: black;
        }

        /* Tick mark styling for list items */
        .pricing-features {
            list-style: none;
            padding: 0;
            margin: 15px 0;
            text-align: left;
        }

        .pricing-features li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 8px;
            font-size: 16px;
            color: #333;
        }

        .pricing-features li::before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #2196f3;
            font-size: 18px;
        }
        .pricing-price-number-offer{
            font-size:30px;
            color:#8abc00;

        }
        @media (min-width: 1400px) {
    .pricing-section {
        max-width: 1400px;
    }

    .pricing-card {
        width: 350px; /* Increase the width for larger screens */
        padding: 40px;
    }

    .pricing-header {
        font-size: 36px; /* Larger font for header */
    }

    .pricing-price {
        font-size: 32px; /* Larger font for pricing */
    }

    .pricing-currency {
        font-size: 28px; /* Larger font for currency symbol */
    }

    .pricing-plan-name {
        font-size: 22px; /* Increase the font size for plan names */
        font-weight:bold;
    }

    .pricing-description {
        font-size: 18px; /* Increase the font size for descriptions */
    }

    .pricing-features li {
        font-size: 18px; /* Larger font for features */
    }

    .pricing-btn {
        font-size: 20px; /* Larger button text */
        padding: 15px 20px;
    }
}

        @media (max-width: 1172px) {
        .pricing-card {
            width: 250px; /* Adjust width for slightly smaller screens */
        }
    }

        /* Responsive adjustments */
        @media (max-width: 945px) {
            .pricing-header {
                font-size: 28px;
            }

            .pricing-price {
                font-size: 24px;
            }

            .pricing-cards {
                flex-direction: column;
                align-items: center;
            }

            .pricing-card {
                width: 90%;
            }
        }

        @media (max-width: 480px) {
            .pricing-header {
                font-size: 24px;
            }

            .pricing-price {
                font-size: 22px;
            }

            .pricing-btn {
                font-size: 16px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="pricing-section" id="pricing">
        <h2 class="pricing-header" style="color:black;">Flexible Plans for Every Business</h2>
        <div class="pricing-toggle-container">
            <span>Monthly</span>
            <label class="pricing-switch">
                <input type="checkbox" id="pricingBillingToggle" onclick="toggleBilling()">
                <span class="pricing-slider"></span>
            </label>
            <span>Annually</span>
            <!-- <div class="pricing-save-label">Save an extra 40%</div> -->
        </div>
        <div class="pricing-cards">
            <div class="pricing-card">
                <h3 class="pricing-plan-name">Quick Start</h3>
                <p class="pricing-price"><span class="pricing-currency-offer">$</span><span class="pricing-price-number-offer" data-monthly="0" data-annually="0">0</span><span class="pricing-frequency-offer">/month</span></p>
                <p class="pricing-description">A simple cloud accounting solution.</p>
                <ul class="pricing-features">
                    <li>$0 for start-up</li>
                    <li>For businesses with revenue &lt; 50K USD per annum</li>
                </ul>
                <a href="https://accounting.ezonecloud.com/CompanyCreate.aspx" target="_blank">
                        <button class="pricing-btn">Get Now</button>
                    </a>
            </div>
            <div class="pricing-card pricing-popular">
                <h3 class="pricing-plan-name">Standard <br><span class="pricing-popular-label">Most Popular</span></h3>
                <p class="pricing-price"><span >$</span><span  style="text-decoration: line-through;"><span class="pricing-price-number" data-monthly="40" data-annually="480">40</span><span class="pricing-frequency">/month</span></span>
                <br><span class="pricing-currency-offer">$</span><span class="pricing-price-number-offer" data-monthly="40" data-annually="480">0</span><span class=" pricing-frequency-offer">/month</span>
                </p>
                <p class="pricing-description">A powerful cloud accounting solution with VAT billing, inventory & payroll.</p>
                <ul class="pricing-features">
                    <li>Includes 5 Users</li>
                    <li>3 Branches</li>
                    <li>Integrate Shopify Stores (Up to 2 stores)</li>
                    <li>Warehouse Management (Up to 3 warehouses)</li>
                </ul>
                <a href="https://accounting.ezonecloud.com/CompanyCreate.aspx" target="_blank">
                        <button class="pricing-btn">Get Now</button>
                    </a>
            </div>
            <div class="pricing-card">
                <h3 class="pricing-plan-name">Lite</h3>
                <p class="pricing-price"><span >$</span><span  style="text-decoration: line-through;"><span class="pricing-price-number" data-monthly="20" data-annually="240">20</span><span class="pricing-frequency">/month</span> </span>
                <br><span class="pricing-currency-offer">$</span><span class="pricing-price-number-offer" data-monthly="40" data-annually="480">0</span><span class="pricing-frequency-offer">/month</span>
                      
            </p>
                               
                <p class="pricing-description">A simple cloud accounting solution with VAT billing & invoicing.</p>
                <ul class="pricing-features">
                    <li>3 Users</li>
                    <li>Manage Invoices (Up to 10,000)</li>
                </ul>
                <a href="https://accounting.ezonecloud.com/CompanyCreate.aspx" target="_blank">
                        <button class="pricing-btn">Get Now</button>
                    </a>
            </div>
        </div>
    </div>

    <script>
        function animateValue(element, start, end, duration) {
            let startTime = null;

            function animation(currentTime) {
                if (!startTime) startTime = currentTime;
                const progress = currentTime - startTime;
                const currentValue = Math.easeInOutQuad(progress, start, end, duration);
                element.textContent = Math.round(currentValue);
                if (progress < duration) {
                    requestAnimationFrame(animation);
                } else {
                    element.textContent = end;
                }
            }

            requestAnimationFrame(animation);
        }

        Math.easeInOutQuad = function (t, b, c, d) {
            t /= d / 2;
            if (t < 1) return (c / 2) * t * t + b;
            t--;
            return (-c / 2) * (t * (t - 2) - 1) + b;
        };

        function toggleBilling() {
            const isAnnually = document.getElementById('pricingBillingToggle').checked;
            const frequencyLabels = document.querySelectorAll('.pricing-frequency');
            const frequencyLabelsoffer = document.querySelectorAll('.pricing-frequency-offer');

            const priceNumbers = document.querySelectorAll('.pricing-price-number');

            frequencyLabels.forEach(label => {
                label.textContent = isAnnually ? '/year' : '/month';
            });

            frequencyLabelsoffer.forEach(label => {
                label.textContent = isAnnually ? '/year' : '/month';
            });

            priceNumbers.forEach(number => {
                const startValue = parseInt(number.textContent);
                const endValue = isAnnually ? number.getAttribute('data-annually') : number.getAttribute('data-monthly');
                animateValue(number, startValue, parseInt(endValue), 500);
            });
        }
    </script>
</body>
</html>
