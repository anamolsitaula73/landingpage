<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Unique Wrapper for the Testimonial Section */
.ezone-testimonial-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    padding: 50px;
    max-width: 1400px;
    margin: auto;
    background-color:white;
}

/* Individual Testimonial Cards */
.ezone-testimonial-wrapper .ezone-testimonial-card {
    background-color: #ffffff;
    border-radius: 15px;
    padding: 30px; /* Increased padding for more height */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    transition: transform 0.2s ease-in-out;
    min-height: 200px; /* Ensures consistent card height */
}

.ezone-testimonial-wrapper .ezone-testimonial-card:hover {
    transform: translateY(-8px);
}

/* Testimonial Text */
.ezone-testimonial-wrapper .ezone-testimonial-text {
    font-size: 22px !important;
    color: #333;
    line-height: 1.8;
    margin-bottom: 25px;
    font-weight: 500;
}

/* Client Information */
.ezone-testimonial-wrapper .ezone-testimonial-info {
    display: flex;
    align-items: center;
    gap: 20px;
}

/* Profile Picture Styling */
.ezone-testimonial-wrapper .ezone-profile-pic {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 2px solid #164193;
}

/* Client Name and Title */
.ezone-testimonial-wrapper .ezone-name-title {
    flex: 1;
}

.ezone-testimonial-wrapper .ezone-client-name {
    font-size: 18px !important;
    color: #164193;
    margin-bottom: 5px;
    font-weight: 600;
}

.ezone-testimonial-wrapper .ezone-client-title {
    font-size: 16px;
    color: #555555;
}

/* Star Ratings */
.ezone-testimonial-wrapper .ezone-stars {
    font-size: 18px;
    color: #f5c518;
}

/* Responsive Design */
@media (max-width: 768px) {
    .ezone-testimonial-wrapper {
        padding: 30px;
    }

    .ezone-testimonial-wrapper .ezone-testimonial-text {
        font-size: 20px;
    }

    .ezone-testimonial-wrapper .ezone-client-name {
        font-size: 17px;
    }

    .ezone-testimonial-wrapper .ezone-profile-pic {
        width: 55px;
        height: 55px;
    }
}

@media (max-width: 480px) {
    .ezone-testimonial-wrapper {
        padding: 20px;
    }

    .ezone-testimonial-wrapper .ezone-testimonial-text {
        font-size: 18px;
    }

    .ezone-testimonial-wrapper .ezone-client-name {
        font-size: 16px;
    }

    .ezone-testimonial-wrapper .ezone-profile-pic {
        width: 50px;
        height: 50px;
    }
}

    </style>
</head>
<body>
    <section class="ezone-testimonial-wrapper">
        <div class="ezone-testimonial-card">
            <p class="ezone-testimonial-text">We expected a solution that was quick, detailed, and easy to use – we have now the eZoneBooks.</p>
            <div class="ezone-testimonial-info">
                <div class="ezone-name-title">
                    <h4 class="ezone-client-name">Dr. Keshav Shrestha</h4>
                    <p class="ezone-client-title">Founder/CEO, Max Vision Limited</p>
                    <div class="ezone-stars">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <div class="ezone-testimonial-card">
            <p class="ezone-testimonial-text">eZoneBooks has really helped me to be more efficient throughout the year so that tax time...it's less stressful.</p>
            <div class="ezone-testimonial-info">
                <div class="ezone-name-title">
                    <h4 class="ezone-client-name">Rambabu Thapa</h4>
                    <p class="ezone-client-title">Owner, Orka Socials</p>
                    <div class="ezone-stars">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <div class="ezone-testimonial-card">
            <p class="ezone-testimonial-text">eZoneBooks has helped us a lot to keep track of our income, expenses, and payroll.</p>
            <div class="ezone-testimonial-info">
                <div class="ezone-name-title">
                    <h4 class="ezone-client-name">Suraj Neupane</h4>
                    <p class="ezone-client-title">CA, KMC Group</p>
                    <div class="ezone-stars">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <div class="ezone-testimonial-card">
            <p class="ezone-testimonial-text">Very easy process to manage business accounting, and I loved that I could do everything online.</p>
            <div class="ezone-testimonial-info">
                <div class="ezone-name-title">
                    <h4 class="ezone-client-name">Pemba T Sherpa</h4>
                    <p class="ezone-client-title">CFO, Khumbu Hydro</p>
                    <div class="ezone-stars">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <div class="ezone-testimonial-card">
            <p class="ezone-testimonial-text">Right from creating multi-currency invoices to managing multiple locations business, eZoneBooks does it all.</p>
            <div class="ezone-testimonial-info">
                <div class="ezone-name-title">
                    <h4 class="ezone-client-name">Ishan Devkota</h4>
                    <p class="ezone-client-title">TCI Nepal</p>
                    <div class="ezone-stars">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
        <div class="ezone-testimonial-card">
            <p class="ezone-testimonial-text">eZoneBooks is making financial operations more efficient and getting better control of our payroll management.</p>
            <div class="ezone-testimonial-info">
                <div class="ezone-name-title">
                    <h4 class="ezone-client-name">Namaraj Nagarkoti</h4>
                    <p class="ezone-client-title">Under Secretary, Federal Parliament</p>
                    <div class="ezone-stars">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
