<?php
$index = 0;
require __DIR__ . '/../includes/getData.php';
require __DIR__ . '/../includes/session.security.php';
require __DIR__ . '/../config.php';
$product_style_path = BASE_PATH . "/../assets/css/products.css";
$script_path = BASE_PATH . "/../assets/js/main.js";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>
        Products | Pearl Oasis
    </title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $product_style_path ?>" />
    <script src="jquery-3.7.1.js"></script>
    <script src="<?php echo $script_path ?>"></script>

</head>

<body>
    <?php require __DIR__ . '/../includes/header.php' ?>
    <main>
        <div class="products">
            <h1 style="padding: 20px;">Products</h1>
            <?php

            for ($j = 0; $j < 6; $j++) {
                $i = 0;
                ?>

                <div style="margin-top: 32px;">
                    <div style="display:flex; justify-content:center;">
                        <h3 id="<?php echo $category[$index] ?>"><?php echo ucwords($category[$index]); ?></h3>

                    </div>
                    <div id="carouselExampleControls-<?php echo $j; ?>" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner" id="carousel<?php echo $j; ?>">

                            <?php foreach ($results as $result) {
                                $id = htmlspecialchars($result["id"]);
                                $product_name = htmlspecialchars($result["product_name"]);
                                $img = htmlspecialchars($result["img"]);
                                $description = htmlspecialchars($result["description"]);



                                ?>
                                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">


                                    <?php $message = "Hi%20there!Can%20you%20please%20check%20the%20pricing%20for%20" . $product_name . "?" ?>

                                    <div class="card"
                                        onclick="window.location.href='https://wa.me/+8801892411397?text=<?php echo $message ?>'">
                                        <div class="img-wrapper">
                                            <img src="<?php echo BASE_PATH.'/../assets/'.$img ?>" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $product_name; ?></h5>
                                            <p class="card-text"><?php echo $description; ?></p>

                                        </div>
                                        <div class="additional-content">
                                            <p>This premium-quality product is crafted with exceptional materials. Available now
                                                in
                                                multiple sizes and
                                                colors.</p>
                                            <a
                                                href="product/<?php echo $id; ?>"><button>Details</button></a>
                                        </div>
                                    </div>



                                </div>

                                <?php $i = 1;
                            } ?>



                        </div>
                        <button id="prev<?php echo $j; ?>" class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls-<?php echo $j; ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button id="next<?php echo $j; ?>" class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls-<?php echo $j; ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <?php
                $index++;
                require __DIR__ . "/../includes/getData.php";
                $i = 1;
            } ?>
        </div>
    </main>

    <?php require __DIR__ . '/../includes/footer.php' ?>

    <body src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

        <script src="../assets/js/carousel.js"></script>
        <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxGm9MF6tGpO3xOQYih9BA8Ka8wAjTlJBmxu2oF4HQnGV6f0LdUgsBJ70paovuM2Zaelg/exec'
            const form_2 = document.forms['submit-to-google-sheet-2']

            form_2.addEventListener('submit', e => {
                e.preventDefault()
                fetch(scriptURL, { method: 'POST', body: new FormData(form_2) })
                    .then(response => console.log('Success!', response))
                    .catch(error => console.error('Error!', error.message))
            })
        </script>


    </body>


</html>