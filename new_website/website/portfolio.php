<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carlos.xyz</title>
    <link rel="stylesheet" href="portfolio.css">
   
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arbutus+Slab:wght@400;700&display=swap">
    

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

    <section id="about">
        <h2>Portfolio</h2>
        <div class="box">
            <div class="flex-container">
                <div class="slider">
                    <div class="slides">
                        <!-- Add additional images as needed -->
                        <div class="slide"><img src="project2.png" alt="Your Photo"></div>
                        <div class="slide"><img src="project3.png" alt="Image 2"></div>
                        
                    </div>
                </div>
                </div>
                     <section id="new">
                <div class="text-box">
                    <p>Hello Lookers!<br> <br>

                    


These are a few of my endeavors. 
We work together to investigate a variety of topics, use critical thinking, and provide creative answers for our college assignments. <br> From carrying out comprehensive research to presenting our conclusions, every project offers a distinct chance for us to improve our abilities, encourage collaboration, and make a significant contribution to our academic path. We work together to produce significant projects that not only satisfy academic standards but also have a long-lasting effect on our education.</p>
                </div>
            </div>
        </div>
    </section>
    

    <script>
        // JavaScript for image slider
        const slides = document.querySelector('.slides');
        const slideWidth = document.querySelector('.slide').clientWidth;
        let currentIndex = 0;

        function showSlide(index) {
            if (index >= 0 && index < slides.children.length) {
                currentIndex = index;
                slides.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
            }
        }

        setInterval(() => {
            currentIndex = (currentIndex + 1) % slides.children.length;
            showSlide(currentIndex);
        }, 3000); // Change the interval as needed (milliseconds)
    </script>
</body>

</html>