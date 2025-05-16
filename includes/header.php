<?php
$BASE_PATH = "http://localhost:80/pearl-oasis/";
$home_path = $BASE_PATH . "php/index";
$about_path = $BASE_PATH . "php/about";
$products_path = $BASE_PATH . "php/products";
?>

<header>
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="<?php echo $home_path?>">Home</a>
        <a href="<?php echo $products_path?>">Products</a>
        <!-- <a href="index.php#category">Categories</a> -->
        <a href="<?php echo $about_path?>">Contact Us</a>
    </div>


    <div class="container">
        <div class="logo">
            <img class="logo-main" src="../assets/img/logo-single.png" alt="">
        </div>
        <nav class="navbar">
            <ul>
                <li><a class="link" href="<?php echo $home_path?>">Home</a></li>
                <li><a class="link" href="<?php echo $products_path?>">Products</a></li>
                <!-- <li><a class="link" href="index.php#category">Categories</a></li> -->
                <li><a class="link" href="<?php echo $about_path?>">Contact Us</a></li>
            </ul>
        </nav>
        <div class="links">

            <a href="https://www.facebook.com/theoasisjewellers/"><img class="link-img" src="../assets/img/Vector-1.svg"
                    alt=""></a>
            <a href="https://wa.me/+8801892411397?text=Hi%20there!"><img class="link-img" src="../assets/img/Vector.svg"
                    alt=""></a>
            <a
                href="https://www.instagram.com/thepearloasisjewellers?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img
                    class="link-img" src="../assets/img/ig-logo.svg" alt=""></a>
            <button class="menu" onclick="sidepane()"><img class="hamburger" src="../assets/img/Hamburger-Menu.svg"
                    alt="">
            </button>

        </div>
    </div>

</header>