<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');

    .main-countdown {
        width: 100%;
    }

    .overlay-countdown {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        flex-direction: column;
        color: red;
    }

    .title {
        margin-top: 10px;
        color: white;
        text-align: center;
        font-size: 2.5vw; /* Responsive font size based on viewport width */
    }

    .col {
        width: 90%;
        display: flex;
        justify-content: center;
        color: white;
        margin-bottom:3vw;
        margin-top:2.2vw;


    }

    .col div {
        text-align: center;
        font-size: 1.5vw; /* Responsive font size */
        margin: 2px;
    }

    .col input {
        font-size: 3vw; /* Responsive font size */
        width: 7vw; /* Responsive width */
        text-align:center;

    }

    .col label {
        font-size: 2.5vw; /* Responsive font size */
        color: white;
    }

 

   
    /* Additional breakpoints for fine-tuning on very small screens */
    @media (max-width: 480px) {
        .title {
            font-size: 3vw;
        }
        .col div {
            font-size: 2vw;
        }
        .col input {
            font-size: 16px;
            width: 12vw;
        }
        .buy-now-button-green {
            font-size: 4vw;
            padding: 2vw 4vw;
        }
    }
</style>


</head>

<body>
    <div class="main-countdown">
        <div class="overlay-countdown">
            <div class="title" style="color:white;"><strong>Hurry Up !<br> Grab your Software Now.</strong></div>
            <div class="col">
                <div  > 
                    <input type="text" readonly value="0">
                    <!-- <br/> -->
                    <label for="" style="color:white;">Days</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <!-- <br/> -->
                    <label for="" style="color:white;">Hours</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <!-- <br/> -->
                    <label for="" style="color:white;">Minutes</label>
                </div>
                <div>
                    <input type="text" readonly value="0">
                    <!-- <br/> -->
                    <label for="" style="color:white;">Seconds</label>
                </div>
            </div>
           

            <a href="https://accounting.ezonecloud.com/CompanyCreate.aspx" target="_blank" class="buy-now-button-green">Get Now</a>

        </div>
      

    </div>
    <center>
        <br>
</center>
    <script>

        const inputs = document.querySelectorAll(".main-countdown .col input");
        
        function clock() {
            const end = new Date(endDate);
            const now = new Date();
        
            // Convert the user's local time to Australia's time (UTC+11 for AEDT)
            const australianOffset = 11 * 60; // AEDT is UTC+11 hours
            const localOffset = now.getTimezoneOffset(); // User's local offset in minutes
            const diff = (end - now + (localOffset - australianOffset) * 60 * 1000) / 1000;
        
            if (diff < 0) return;
        
            // Convert into days, hours, minutes, and seconds
            inputs[0].value = Math.floor(diff / 3600 / 24);
            inputs[1].value = Math.floor(diff / 3600) % 24;
            inputs[2].value = Math.floor(diff / 60) % 60;
            inputs[3].value = Math.floor(diff) % 60;
        }
        
        // Initial call
        clock();
        
        // Update every second
        setInterval(clock, 1000);
        </script>
</body>

</html>