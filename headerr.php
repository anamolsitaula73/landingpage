<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .text-content{
            /* background-color: #164193; */
            color:black !important;
        }
        .text-content,h2 {
            color:white !important;
        }
        /* General styling for the popup */
     

        .cta-button {
            background-color: #164193;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2rem;
            cursor: pointer;
            margin: 10px;
            display: inline-block;
        }
    .video-box{
        position: relative;
         padding-bottom: 56.25%;
         width:60%;
         /* height:100px; */
          overflow: hidden;
    }
    .video-responsive {
    position: relative;
    width: 100%; /* Default width */
    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
    height: 0; /* Height controlled by padding */
    overflow: hidden; /* Prevent overflow */
    margin: 0 auto; /* Center the video */
}

.video-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 80%; /* Make iframe fill the parent */
}
.video-container{
    width:60%;
    /* background-color:red; */
}
/* Media query for smaller screens */
@media (max-width: 768px) {
    .video-container {
        width: 100%; /* Increase width for tablets */
    }
}

@media (max-width: 480px) {
    .video-container {
        width: 100%; /* Full width for mobile devices */
    }
}
.header-text{
    font-size: clamp(16px, 4vw, 36px);
  font-weight: bold;
  color: #164193;
  text-align:center;
  /* color:white; */
}

    </style>
</head>
<?php include('head_top.php');?>
    <center>
    <div class="section">

<div class="text-content" >

<br>
        <h1 class=" header-text" ><strong>Limited Time Offer!</strong></h1>
        
     
    </div>

    <!-- <iframe width="864" height="486" src="https://www.youtube.com/embed/x686oJ8gCes" title="what is e-Accounting?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
      <div >
    <br>
<div class="video-container">
    <div class="video-responsive">
    <iframe
        src="https://www.youtube.com/embed/5OaKBdtD1Ow?autoplay=1"
        title="e-School | Quick Start Up | For Student"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen>
    </iframe>

    <!-- <iframe width="914" height="514" src="https://www.youtube.com/embed/5OaKBdtD1Ow" title="Accounting" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
</div>
    </div>
    </div>
    </div>
</center>