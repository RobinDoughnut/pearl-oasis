<?php require  "includes/session.security.php" ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/about.css" />
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <!-- <a href="index.php#category">Categories</a> -->
            <a href="about.php">Contact Us</a>
        </div>


        <div class="container">
            <div class="logo">
                <img class="logo-main" src="img/Pearl Oasis logo.png" alt="">
                <img class="logo-main2" alt="">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a class="link" href="index.php">Home</a></li>
                    <li><a class="link" href="products.php">Products</a></li>
                    <!-- <li><a class="link" href="index.php#category">Categories</a></li> -->
                    <li><a class="link" href="about.php">Contact Us</a></li>
                </ul>
            </nav>
            <div class="links">

                <a href="https://www.facebook.com/theoasisjewellers/"><img class="link-img" src="img/Vector-1.svg"
                        alt=""></a>
                <a href="https://wa.me/+8801892411397?text=Hi%20there!"><img class="link-img" src="img/Vector.svg"
                        alt=""></a>
                <button class="menu" onclick="sidepane()"><img class="hamburger" src="img/Hamburger-menu.png" alt="">
                </button>

            </div>
        </div>

    </header>
    <main>
        <div class="about">
            <div class="text">
                <h1>About Us</h1>
            </div>
            <div class="para">
                <p>
                    Welcome to <strong>Pearl Oasis</strong>, where timeless elegance meets exquisite craftsmanship.
                    Since 2001, we’ve been dedicated to <em>“Crafting memories through Jewellery.”</em>
                </p>
                <p>
                    Our journey began in Bashundhara City Complex, where our first store brought unique,
                    high-quality jewelry to our customers. With passion and dedication, we expanded to
                    Navana Tower, ensuring we’re always here to help you celebrate life’s precious moments.
                </p>
                <p>
                    Explore our collection of timeless pearls, dazzling diamonds, and custom designs crafted
                    with love and care. Each piece tells a story—your story.
                </p>
            </div>
            <div class="images">
                <div class="store-image">
                    <h3>Our First Store: Bashundhara City Complex</h3>
                    <img src="img/n-4.jpg" alt="Bashundhara Store" class="store-img">
                </div>
                <div class="store-image">
                    <h3>Our Expansion: Navana Tower</h3>
                    <img src="img/n-2.jpg" alt="Navana Store" class="store-img">
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Online shop</h4>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>
</body>


</html>