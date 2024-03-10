<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlos xyz.</title>
    <link rel="stylesheet" href="feedback.css">
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
        <h2>feedback</h2>
        <div class="box">
            <div class="img-box">
                <img src="panget.jpg" alt="">
            </div>
            <p>Click the button below to give me some feedbacks or suggestions.</p>
            <button onclick="window.location.href='login.php'">Go to Next Page</button>

        </div>
    </section>

    <script>
        function openSocialMedia(url) {
            window.open(url, '_blank');
        }
    </script>
</body>

</html>
