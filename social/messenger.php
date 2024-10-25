<style>@keyframes bounce-messenger {
    0%, 100% {
        transform: translateY(0); /* Start and end at the original position */
    }
    50% {
        transform: translateY(-20px); /* Move up by 10px */
    }
}

.messenger-popup {
    position: fixed;
    bottom: 200px; /* Adjust based on your layout */
    right: 13px; /* Adjust based on your sidebar position */
    z-index: 999; /* Lower than the "Go to top" button */
    background-color: #0084ff; /* Messenger blue color */
    border-radius: 50%; /* Make it circular */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    display: block;
    transition: transform 0.3s ease;
    animation: bounce-messenger 1.5s infinite; /* Add the bounce animation */
}

.messenger-icon {
    width: 60px;
    height: 60px;
    display: block;
    transition: transform 0.3s ease;
}

.messenger-popup:hover {
    transform: scale(1.1); /* Scale up on hover */
}

.messenger-popup:hover .messenger-icon {
    transform: rotate(20deg); /* Rotate icon slightly on hover */
}

    </style>

<div class="messenger-popup">
    <a href="https://m.me/371014336310711" target="_blank">
        <img src="assets\images\messenger.png" alt="Messenger" class="messenger-icon">
    </a>
</div>
