<?php

require __DIR__ . '/../includes/session.security.php';
require __DIR__ . '/../config.php';
require __DIR__ . '/../includes/product_details.php';;
$id = $_GET['id'] ?? null;

$result = getProductDetails($id);

$product_name = htmlspecialchars($result[0]["product_name"]);
$img = htmlspecialchars($result[0]["img"]);
$description = htmlspecialchars($result[0]["description"]);
$script_path = BASE_PATH . "assets/js/main.js";
$product_style_path = BASE_PATH . "assets/css/product_details.css";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="keywords" content="jewelry, gold, silver, gemstone, handmade, custom, Bangladesh">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>
        Home | Pearl Oasis 
    </title>
    <meta name="description"
        content="Shop premium gold, silver, and gemstone jewelry. Handmade elegance, crafted in Bangladesh. Custom orders available.">
    <meta name="keywords"
        content="handmade jewelry, gold rings Bangladesh, gemstone necklace, silver bangles, custom jewelry Dhaka">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $product_style_path ?>" />
    <script src="<?php echo $script_path ?>"></script>
</head>

<body>
    <?php require __DIR__ . '/../includes/header.php' ?>
    <main>
        <div class = "container_p">
           <div class="wrap">
                <div class="prod_image">
                    <img src="<?php echo BASE_PATH.'/../assets/'.$img ?>" alt="Product Image" />

                </div>
                <div class = "prod_details">
                    <h2><?php echo $product_name ?></h2>
                    <p class="description"><?php echo $description ?></p>
                    <div class="price">
                        <span>Price: </span>
                        <span class="amount"> <strong> 5000</strong></span>
                    </div>
                    
                    
                </div>

           </div>
        </div>
    </main>
    <?php require __DIR__ . '/../includes/footer.php' ?>
</body>
</html>