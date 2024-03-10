<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlos Inc.</title>
    <link rel="stylesheet" href="index.css">
    <style>
        /* Add your CSS styles here */
    </style>
</head>

<body>
    <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About Me</a></li>
        <li><a href="Resume.php">Resume</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="feedback.php">Feedback</a></li> <!-- Corrected typo here -->
    </ul>
    </nav>
   
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        
        <img src="BGKO.jpg" style="width:100%">
        
      </div>
    
      <div class="mySlides fade">
        
        <img src="BG.jpg" style="width:100%">
        
      </div>
    
      <div class="mySlides fade">
        
        <img src="CARLOS PIC.jpg" style="width:100%">
        
      </div>
    
      <!-- Next and previous buttons -->
      
    </div>
    <br>
    
    <!-- The dots/circles -->
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    
    
    <script>
      let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}</script>


 
</body>

</html>
