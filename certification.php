<style>
    /* Targeting the Certifications section specifically */
    .Certifications {
        text-align:center;
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
    .Certifications h1 {
    font-size: 35px; /* Default size */
    margin:auto !important;
}
.Certifications h3 {
    font-size: 25px; /* Default size */
    margin:auto !important;'
    color:black !important ;
}

@media (max-width: 768px) {
    .Certifications h1 {
        font-size: 24px; /* Adjust for tablets and smaller screens */
    }
    .Certifications h3 {
        font-size: 18px; /* Adjust for tablets and smaller screens */
    }
    .certifications{
        padding:0px !important;
    }
}

@media (max-width: 480px) {
    .Certifications h1 {
        font-size: 20px; /* Adjust for mobile devices */
    }
    .Certifications h3 {
        font-size: 14px; /* Adjust for tablets and smaller screens */
    }
}



    /* Ensure all images have the same size */
    .Certifications ul#Certifications li img {
        width: 180px;
        height: 180px; /* Fixed size for all images */
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
    .buy-now-button {
            background-color: #e20613;
            color: #fff !important;
            padding: 12px 24px;
            font-size: 2vw; /* Responsive font size for button */
            font-weight: bold;
            margin-bottom:20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        .buy-now-button:hover {
            background-color: black;
            ;
            /* color:black !important; */
        }
        .certification-line{
            line-height: 1.8;
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
        threshold: 1 // Trigger when at least 10% of the target is visible
    });

    observer.observe(target);
});
console.log("Intersecting:", entry.isIntersecting);


</script>
<!-- <h1 class="text-center" id="stats" style="color:#164193;">
<span>Celebrating </span><span id="yearCount" style="color:#e20613;"><strong> 0</strong></span> Years os Excellence<br>
<span>Empowering</span> <span id="schoolCount" style="color:#e20613;"><strong>0</strong>+ </span>Organizations <br>
<span>Trusted by</span> <span id="userCount" style="color:#e20613;"><strong>0</strong>k+ </span> Users
</h1> -->

<div class="Certifications">
    <h1 class=" solution-header">Our Software Has Been Recognized By</h1>
        <!-- <h1  style="color:#164193;" ><b class="features-icon ">Our Software has been recognized by</b></h1><br> -->
        <ul id="Certifications">
            <li><img src="assets/images/iso.png" class="img-responsive" title="Iso Nepal"></li>
            <li><img src="assets/images/microsoft-partner.png" class="img-responsive" title="Microsoft partner"></li>
            <li><img src="assets/images/worldbank.png" class="img-responsive" title="World Bank"></li>
        </ul>
        <br>
    <h3 class="certification-line" id="stats" style="color:#164193;">
<span>Celebrating </span><span id="yearCount" style="color:#e20613;"><strong> 0</strong></span> Years of Excellence,
<span>Empowering</span> <span id="schoolCount" style="color:#e20613;"><strong>0</strong>+ </span>Organizations, 
<span>and Trusted by</span> <span id="userCount" style="color:#e20613;"><strong>0</strong>k+ </span> Users!
</h3>

</div>
<br>
