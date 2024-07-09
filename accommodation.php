<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accommodation | Comfort Executive Suites</title>
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
    <main>
    
        <section class="accommodation">
            <section id="services">
                <h2 class="black">Our Services</h2>
                <div class="services-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Service</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>normal room</td>
                                <td>basic room amenities</td>
                                <td>$100</td>
                            </tr>
                            <tr>
                                <td>deluxe room</td>
                                <td>better room amenities</td>
                                <td>$150</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </section>
            <section id="form">
                <h2 class="black">Request a Service</h2>
                <div class="form-container">
                    <form action="submit_form.php" method="POST">
                        <label for="service">Select a Service:</label>
                        <select id="service" name="service">
                            <option value="service1">normal room</option>
                            <option value="service2">deluxe room</option>
                            <!-- Add more options as needed -->
                        </select><br><br>
                        <label for="details">Service Details:</label><br>
                        <textarea id="details" name="details" rows="4" cols="50"></textarea><br><br>
                        <input type="submit" value="Submit">
                    </form>
                <img src="images/comfort bed.jpg" class="common-image" alt="accommodation">
                <img src="images/comfort bathroom.jpg" class="common-image" alt="accommodation">
                
            </div>
        </section>
    
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Comfort Executive Suites. All rights reserved.</p>
    </footer>
</body>
</html>
