<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlos xyz.</title>
    <link rel="stylesheet" href="contact.css">
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

    <section id="about">
        <h2>Contact Me</h2>
        <div class="box">
            <div class="img-box">
                <img src="carlospicko.png" alt="">
            </div>
            <p>Click the buttons below to visit my social media profiles:</p>
            <button onclick="openSocialMedia('https://www.facebook.com/carlos.sx13')">Facebook</button>
            <button onclick="openSocialMedia('https://twitter.com/222_nonamec')">Twitter</button>
            <button onclick="openSocialMedia('https://www.instagram.com/222.car_los/')">Instagram</button>
            
        </div>
    </section>

    <script>
        function openSocialMedia(url) {
            window.open(url, '_blank');
        }
    </script>
</body>

</html>
