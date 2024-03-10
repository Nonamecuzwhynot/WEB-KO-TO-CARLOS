<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carlos xyz.</title>
    <link rel="stylesheet" href="resume.css">
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

    <body>

        <section id="about">
            <h2>Resume</h2>
            <div class="box">
                <div class="img-box">
                    <img src="resume.png" alt="">
                </div>
                <p>Click the button below to download my resume:</p>
                <button onclick="downloadResume()">Download Resume</button>
            </div>
        </section>
        
        <script>
            function downloadResume() {
                var link = document.createElement('a');
                link.href = '_cv resume.pdf'; // Replace with the correct file path
                link.download = 'Your_Name_Resume.pdf'; // Replace with the desired file name
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        </script>
        
        </section>
        
          </section</footer>
    </body>
    
