<style>
@keyframes bounce {
    0%, 100% {
        transform: translateY(0); /* Start and end at the original position */
    }
    50% {
        transform: translateY(-18px); /* Move up by 10px */
    }
}

.whatsapp-popup {
    position: fixed;
    bottom: 120px; /* Ensure this is below your "Go to top" button */
    right: 13px; /* Adjust based on your sidebar position */
    z-index: 999; /* Lower than the "Go to top" button */
    background-color: #25d366;
    border-radius: 50%; /* Make it circular */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    display: block;
    transition: transform 0.3s ease;
    animation: bounce 1.5s infinite; /* Add the bounce animation */
}

.whatsapp-icon {
    width: 60px;
    height: 60px;
    display: block;
    transition: transform 0.3s ease;
}

.whatsapp-popup:hover {
    transform: scale(1.1); /* Scale up on hover */
}

.whatsapp-popup:hover .whatsapp-icon {
    transform: rotate(30deg); /* Rotate icon slightly on hover */
}



    </style>

<div class="whatsapp-popup">
    <a href="https://wa.me/+9779802026676" target="_blank">
        <img src="assets\images\whatsapp.png" alt="WhatsApp" class="whatsapp-icon">
    </a>
</div>
