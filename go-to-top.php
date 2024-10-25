<style>
#myBtn {
  display: none; 
  position: fixed;
  bottom: 40px;
  right: 15px;
  z-index: 9999;
  font-size: 20px;
  border: none;
  outline: none;
  background-color: #e20613;
  color: white;
  cursor: pointer;
  padding: 17px;
  border-radius: 10px;
  transition: transform 1s ease, opacity 1s ease;
  font-family: "Arial Unicode MS", "Segoe UI Symbol", sans-serif;
}
#myBtn:hover{
  background-color: #164193;

}
 </style>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="assets/images/up1.png" style="width: 25px; height: 25px;">
</button>
<script>

// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
 scrollFunction();
};

function scrollFunction() {
 if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
     mybutton.style.display = "block";
     
 } else {
     mybutton.style.display = "none";
 }
}

// When the user clicks on the button, scroll to the top of the document with smooth behavior
function topFunction() {
 window.scrollTo({
     top: 0,
     behavior: 'smooth' // This adds the smooth scrolling effect
 });
}
</script>