<?php
    session_start();
    require_once "database.php";
    
    if (isset($_SESSION["user"])){
        header("Location: index.html");
        exit(); // Ensure script stops execution after redirection
    } 

    if(isset ($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT id, password FROM user WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($user) {
            if(password_verify($password, $user["password"])) {
                $_SESSION["user_id"] = $user["id"];
                echo "<script>alert('Successfully logged in.');</script>";
                header("Location: message.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'> Password does not match </div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not match </div>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="login.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Tektur&display=swap" rel="stylesheet">
    <title>Carlos.xy</title>
</head>
<body>
   
    </div>
    <div class="form-container">
    <form action="index.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class= "form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class= "form-control" required>
            </div>

            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
            <div class="reg-btn">
                <a href="registration.php">Register</a>
            </div>
        </form>
    </div>  
  

   
</body>
</html>
