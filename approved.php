<style>
    /* Container for the section */
.approval-section {
  background-color: #f2f2f2;
  padding: 50px 0;
  margin:50px 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  position: relative;
  overflow: hidden;
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
  border-top: 5px solid #FF5733; /* Adding top border */
}

/* Soft gradient background with subtle animation */
.approval-section::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(0, 123, 255, 0.2) 0%, rgba(255, 193, 7, 0.15) 100%);
  z-index: -1;
  animation: smoothBackground 6s ease-in-out infinite;
}

@keyframes smoothBackground {
  0% {
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.2) 0%, rgba(255, 193, 7, 0.15) 100%);
  }
  50% {
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.3) 0%, rgba(255, 193, 7, 0.2) 100%);
  }
  100% {
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.2) 0%, rgba(255, 193, 7, 0.15) 100%);
  }
}

/* Main content container */
.approval-container {
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 40px;
}

/* Image styling */
.approval-image {
  flex: 1;
  max-width: 280px;
  min-width: 180px;
  text-align: center;
  position: relative;
  overflow: hidden;
  border-radius: 50%;
  width: 280px; /* Ensure the container is fixed to prevent cropping */
  height: 280px; /* Ensure the container is fixed to prevent cropping */
  border: 8px solid transparent;
  background-image: linear-gradient(45deg, #FF5733, #FFB400); /* Attractive gradient border */
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
  transition: transform 0.4s ease-in-out;
}

.accountant-img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures the image covers the area without distortion */
  border-radius: 50%; /* Creates a circular border */
}

.accountant-img:hover {
  transform: scale(1.1); /* Slight zoom on hover */
}

/* Content section */
.approval-details {
  flex: 2;
  text-align: left;
  max-width: 650px;
  color: #333;
  animation: fadeInUp 1s ease-out;
  padding: 20px;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  border-left: 5px solid #FF5733; /* Adding colored border to the left side */
}

/* Heading styling */
h2 {
  font-family: 'Roboto', sans-serif;
  color: #FF5733;
  font-size: 40px;
  font-weight: 700;
  margin-bottom: 20px;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-bottom: 3px solid #FF5733; /* Border below heading */
  padding-bottom: 10px;
}

/* Name styling */
.accountant-name {
  font-family: 'Montserrat', sans-serif;
  font-size: 28px;
  font-weight: 600;
  color: #333;
  margin-bottom: 10px;
}

/* Title styling */
.accountant-title {
  font-size: 18px;
  color: #777;
  font-weight: 500;
  margin-bottom: 20px;
}

/* Description styling */
.approval-description {
  font-size: 16px;
  line-height: 1.7;
  font-weight: 400;
  color: #444;
  font-style: italic;
  position: relative;
  padding-left: 20px;
  border-left: 5px solid #FF5733;
  margin-top: 10px;
  background-color: #FFF5E1;
  transition: background-color 0.3s ease;
}

/* Hover effect for description */
.approval-description:hover {
  background-color: #FFE6D3; /* Lighten background on hover */
}

/* Smooth fade-in-up animation */
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Media query for responsiveness */
@media (max-width: 768px) {
  .approval-container {
    flex-direction: column;
    text-align: center;
  }

  .approval-image {
    margin-bottom: 20px;
  }

  .approval-details {
    flex: 1;
    margin: 0 15px;
  }

  h2 {
    font-size: 32px;
  }

  .accountant-name {
    font-size: 24px;
  }

  .accountant-title {
    font-size: 16px;
  }

  .approval-description {
    font-size: 14px;
    padding-left: 15px;
  }
}
</style>

<section class="approval-section">
  <div class="approval-container">
    <div class="approval-content">
      <div class="approval-image">
        <img src="assets/images/krishna.png" alt="Australian Accountant" class="accountant-img" />
      </div>
      <div class="approval-details">
        <h2>Approved by an Australian Accountant</h2>
        <p class="accountant-name">Krishna K. and Team</p>
        <p class="accountant-title">Certified Australian Accountant</p>
        <p class="approval-description">
          "This software offers unmatched precision and efficiency. After thoroughly testing its capabilities, I proudly endorse it as a reliable solution for accounting professionals."
        </p>
      </div>
    </div>
  </div>
</section>
