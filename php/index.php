
<?php require "../includes/session.security.php"
    //   require "../includes/getData.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../js/main.js"></script>
</head>

<body>
    <header>
        <div id="mySidepanel" class="sidepanel">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <a href="index.php#category">Categories</a>
            <a href="about.php">About Us</a>
        </div>


        <div class="container">
            <div class="logo">
                <img class="logo-main" alt="">
                <img class="logo-main2" alt="">
            </div>
            <nav class="navbar">
                <ul>
                    <li><a class="link" href="index.php">Home</a></li>
                    <li><a class="link" href="products.php">Products</a></li>
                    <li><a class="link" href="index.php#category">Categories</a></li>
                    <li><a class="link" href="about.php">About Us</a></li>
                </ul>
            </nav>
            <div class="links">

                <a href="https://www.facebook.com/theoasisjewellers/"><img class="link-img" src="../img/Vector-1.svg"
                        alt=""></a>
                <a href="https://wa.me/+8801892411397?text=Hi%20there!"><img class="link-img" src="../img/Vector.svg"
                        alt=""></a>
                <button class="menu" onclick="sidepane()"><img class="hamburger" src="../img/Hamburger-Menu.svg" alt="">
                </button>

            </div>
        </div>

    </header>
    <main>
        <div class="hero-section">
            <div class="landing-text">
                <h1 class="tagline">JEWELRY BROS</h1>
                <p></p>
            </div>

            <img class="landing-img" src="../img/rectangle-4.png" alt="">
        </div>
        <div id="category" class="categories">
            <div class="text">
                <h1>Categories</h1>
            </div>

            <div class="category-grid">

                <div class="box">
                    <a href="products.php#ring" class="box">
                    <h3> Ring</h3>
                    <div>

                        <img class="category-img" src="../img/n-2.jpg" alt="">
                    </div>
                    </a>
                    
                </div>
                <div class="box">

                    <a href="products.php#earring" class="box">
                    <h3> Earring</h3>
                    <img class="category-img" src="../img/n-3.jpg" alt="">
                    </a>
                </div>
                <div class="box">
                    
                    <a href="products.php#necklace " class="box">
                    <h3> Necklace</h3>
                    
                    <img class="category-img" src="../img/n-4.jpg" alt="">
                    
                    </a>

                </div>
                <div class="box">

                    <a href="products.php#pendant" class="box">
                        <h3> Pendant</h3>
                        <img class="category-img" src="../img/n-3.jpg" alt="">
                    </a>
                </div>
                <div class="box">
                <a href="products.php#bracelet" class="box">
                    <h3> Bracelet</h3>
                    <img class="category-img" src="../img/n-3.jpg" alt="">
                </a>

                </div>
                <div class="box">
                <a href="products.php#pearl" class="box">
                    <h3> Pearl</h3>
                    <img class="category-img" src="../img/n-3.jpg" alt="">
                </a>

                </div>









            </div>



            </div>
        </div>
        </div>
        <div class="featured">
            <div class="text">

                <h1>Featured</h1>
            </div>
            <div id="carouselExample" class="carousel slide carousel-custom-size" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/image.jpg" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="../img/image.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/image.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="gallery">
                <img src="../img/n-2.jpg" class="featured-1">

                <img src="../img/n-2.jpg" class="featured-2">

                <img src="../img/n-2.jpg" class="featured-3">

                <img src="../img/n-2.jpg" class="featured-4">

                <img src="../img/n-2.jpg" class="featured-5">

                <img src="../img/n-2.jpg" class="featured-6">


            </div>

        </div>
        <div class="contact">
            <div class="text">

                <h1>Contact</h1>
            </div>

            <div class="address">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe
                            src="https://maps.google.com/maps?q=Navana%20Tower%20Shop%2015%2016%2017%203rd%20floor%20Gulshan-1%201212%20Dhaka%20Dhaka%20Division%20Bangladesh&output=embed"
                            frameborder="0" scrolling="no" width="600" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy"> </iframe>
                    </div>
                </div>
                <div class="address-links">
                    <h2>Find Us Here</h2>
                    <div style="display: flex; gap: 8px;">
                        <img style="height: 24px;" src="../img/basil_location-outline.svg" alt="">
                        <h5>Navana Tower: Shop 15, 16 & 17 (3rd floor), Gulshan-1 1212 Dhaka, Dhaka Division, Bangladesh
                        </h5>

                    </div>
                    <div style="display: flex; gap: 8px; align-items: center;">
                        <img style="height: 18px;" src="../img/cib_facebook-f.svg" alt="">
                        <a style="font-size: 18px;" href="#">www.facebook.com/pearl</a>
                    </div>
                </div>


            </div>
        </div>

    </main>
    <footer>

    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>