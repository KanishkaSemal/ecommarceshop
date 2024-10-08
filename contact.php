<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kani-Style</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>
  
   <section id="header">
    <a href="#"><img src="img/logo.png" class="logo" alt=""></a>


    <div>
        <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a  href="shop.php">Shop</a></li>
            <li><a  href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
            <li><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
   </section>

   <section id="page_header" class="about-header">
    
    <h2>Contact Us</h2>
    
    <p>LEAVE A MESSAGE, We love to hear from you!</p>
    
   </section>

   <section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our agency location or contact us today</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>56 Glassford Street Glasgow G1 1ul New York</p>
            </li>
            <li>
                <i class="fal fa-envelope"></i>
                <p>contact@example.com</p>
            </li>
            <li>
                <i class="fal fa-phone-alt"></i>
                <p>contact@example.com</p>
            </li>
            <li>
                <i class="fal fa-clock"></i>
                <p>Monday to Saturday: 9.00am to 16.pm</p>
            </li>
        </div>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047450.6810271414!2d75.67752147989269!3d7.83329535427949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1704996950324!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"></iframe>
    </div>
   </section>

   <section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="normal">Submit</button>
    </form>

    <div class="people">
        <div>
            <img src="img/people/1.png" alt="">
            <p><span>John Doe</span> Senior Marketing Manager <br> phone: + 000 123 000 77 88 <br>Email: contact@example.com</p>
        </div>
        <div>
            <img src="img/people/2.png" alt="">
            <p><span>William Smith</span> Senior Marketing Manager <br> phone: + 000 123 000 77 88 <br>Email: contact@example.com</p>
        </div>
        <div>
            <img src="img/people/3.png" alt="">
            <p><span>Emma Stone</span> Senior Marketing Manager <br> phone: + 000 123 000 77 88 <br>Email: contact@example.com</p>
        </div>
    </div>
   </section>

   <section id="newsletter" class="section-p1 section-m1">
    <div class="newstest">
        <h4>Sign Up For newsletter</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers</span>
        </p>
    </div>
     <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign Up</button>
     </div>
   </section>

   
   <footer class="section-p1">
    <div class="col">
        <img class="logo" src="img/logo.png" alt="">
        <h4>Contact</h4>
        <p><strong>Address:</strong> 562 wellington Road, Street 32, San Francisco</p>
        <p><strong>Phone:</strong> +01 2222 365 / (+91) 01 2345 6798</p>
        <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>

    <div class="col">
        <h4>My Account </h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="img/pay/app.jpg" alt="">
            <img src="img/pay/play.jpg" alt="">
        </div>
        <p>Secured payment Gateways</p>
        <img src="img/pay/pay.png" alt="">
    </div>
    <div class="copyright">
        <p>@ 2021, Tech2 etc - HTML CSS Ecommerce Template</p>
    </div>
   </footer>


    <script src="script.js"></script>
</body>
</html>