<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS\styles.css"/>
    <link rel="stylesheet" href="CSS\registration.css"/>
    <script src="javascript\validate.js" defer></script> <!-- Load JavaScript for validation -->
    
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-left">
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="accommodation.php">Accommodation</a>
                <a href="food.php">Food</a>
                <a href="gallery.php">Gallery</a>
                <a href="reviews.php">Reviews</a>
                <a href="contact.php">Contact</a>
                <a href="about.php">About Us</a>
            </div>
        </div>
        <div class="logo">
            <img src="images/comfort logo.jpg" alt="Comfort Executive Suites Logo" class="header-logo">
        </div>
        </div>

        <div class="header-right">
        <div class="auth-links">
            <a href="signup.php">Sign Up</a> <!-- Link to Sign Up page -->
            <a href="signin.php">Sign In</a> <!-- Link to Sign In page -->
        </div>
        </div>
    </header>

    
    <div class="form-container">
        <h1>Sign Up</h1>
        <form action="" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="signin.php">Sign In</a></p>
    </div>
    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Comfort Executive Suites. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
// Include the database connection file
require("dbconnection.php");

// Process form data when form is submitted
    if(isset($_POST["signup"])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $registration_date = $_POST['registration_date'];



    // Prepare INSERT statement
    
    $sql = "INSERT INTO `signup`(`id`, `username`, `email`, `password`, `registration_date`) VALUES ('$id','$username','$email','$password','$registration_date')";
    $result=$conn->query($sql);

    if($result){
        
        header("location: index.php");
        
    }
    else{
        echo"error" . $sql . "<br>" . $conn->error;
    
    }
    
    }
    

?>
