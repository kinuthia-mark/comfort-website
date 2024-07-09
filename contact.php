<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Comfort Executive Suites</title>
    <link rel="stylesheet" href="CSS\styles.css"/>

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <!-- Main Content -->
    <main class="main-content">
        <section class="contact">
            <h2>Contact Us</h2>
            <p>Reach out to us for any inquiries, feedback, or assistance.</p>
            
            <div class="contact-info">
                <h3>Contact Information</h3>
                <p>Email: <a href="mailto:info@comfortsuites.com">info@comfortsuites.com</a></p>
                <p>Phone: +254733390645</p>
                <p>Address: 123 Comfort Street, Nairobi, Kenya</p>
            </div>

            <div class="contact-form">
                <h3>Send us a Message</h3>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit">Send</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Comfort Executive Suites. All rights reserved.</p>
    </footer>
</body>
</html>
