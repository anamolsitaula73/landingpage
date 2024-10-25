<style>
    /* Targeting the Certifications section specifically */
    .Certifications {
        padding: 20px;
        background-color: #f5f5f5;
    }

    .Certifications .text-center.Certifications.blue3 h1 {
        color: #007bff; /* Custom blue color */
        font-size: 32px;
        margin-bottom: 20px;
    }

    .Certifications ul#Certifications {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap; /* Allow items to wrap in smaller screens */
    }

    .Certifications ul#Certifications li {
        display: inline-block;
        margin: 0 10px;
    }

    /* Ensure all images have the same size */
    .Certifications ul#Certifications li img {
        width: 110px;
        height: 110px; /* Fixed size for all images */
        object-fit: contain; /* Ensure images keep their aspect ratio */
    }

    /* Responsive adjustments for smaller screens */
    @media (max-width: 768px) {
        .Certifications ul#Certifications li img {
            width: 95px;
            height: 95px; /* Reduce size on smaller screens */
        }

        .Certifications .text-center.Certifications.blue3 h1 {
            font-size: 28px;
        }
    }

    @media (max-width: 576px) {
        .Certifications ul#Certifications li img {
            width: 70px;
            height: 70px; /* Further reduce size on extra small screens */
        }
        

        .Certifications .text-center.Certifications.blue3 h1 {
            font-size: 24px;
        }
    }
    @media (max-width: 352px) {
        .Certifications ul#Certifications li img {
            width: 50px;
            height: 50px; /* Further reduce size on extra small screens */
        }
        

        .Certifications .text-center.Certifications.blue3 h1 {
            font-size: 24px;
        }
    }
</style>

<div class="Certifications">
    <div class="text-center Certifications blue3">
        <h1 align="center"><b class="features-icon ">Certifications</b></h1>
        <ul id="Certifications">
            <li><img src="assets/images/iso.png" class="img-responsive" title="Iso Nepal"></li>
            <li><img src="assets/images/microsoft-partner.png" class="img-responsive" title="Microsoft partner"></li>
            <li><img src="assets/images/worldbank.png" class="img-responsive" title="World Bank"></li>
        </ul>
    </div>
</div>
