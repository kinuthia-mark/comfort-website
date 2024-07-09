<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
                <a href="index.html">Home</a>
                <a href="accommodation.html">Accommodation</a>
                <a href="food.html">Food</a>
                <a href="gallery.html">Gallery</a>
                <a href="reviews.html">Reviews</a>
                <a href="contact.html">Contact</a>
                <a href="about.html">About Us</a>
            </div>
        </div>
        <div class="logo">
            <img src="images/comfort logo.jpg" alt="Comfort Executive Suites Logo" class="header-logo">
        </div>
        </div>

        <div class="header-right">
        <div class="auth-links">
            <a href="signup.html">Sign Up</a> <!-- Link to Sign Up page -->
            <a href="signin.html">Sign In</a> <!-- Link to Sign In page -->
        </div>
        </div>
    </header>

    
    <div class="form-container">
        <h1>Sign In</h1>
        <form action="/signin" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Sign In</button>
        </form>
        <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
    </div>


    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Comfort Executive Suites. All rights reserved.</p>
    </footer>
</body>
</html>
