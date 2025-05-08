<?php
require __DIR__ . "/../includes/session.security.php";
require __DIR__ . '/../config.php';

$about_style_path = BASE_PATH . "/../assets/css/about.css";
$contact_style_path = BASE_PATH . "/../assets/css/contact.css";
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
        Contact Us | Pearl Oasis
    </title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $about_style_path ?>" />
    <link rel="stylesheet" href="<?php echo $contact_style_path ?>" />
    <script src="<?php echo $script_path ?>"></script>
</head>

<body>
    <?php require __DIR__ . '/../includes/header.php' ?>
    <main>
        <div class="about">

            <div class="contact-form-container">
                <h2>Contact Us</h2>
                <form name="submit-to-google-sheet">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                        <span class="error-message" id="nameError"></span>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="access_key" value="cc171ee3-ff6d-4607-b89a-f60c5d040d72">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                        <span class="error-message" id="emailError"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>
                        <span class="error-message" id="phoneError"></span>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                        <span class="error-message" id="messageError"></span>
                    </div>
                    <button type="submit" class="submit-button">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </main>
    <?php require __DIR__ . '/../includes/footer.php' ?>
</body>
<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxGm9MF6tGpO3xOQYih9BA8Ka8wAjTlJBmxu2oF4HQnGV6f0LdUgsBJ70paovuM2Zaelg/exec'
    const form = document.forms['submit-to-google-sheet']

    form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message))
    })

    const form_2 = document.forms['submit-to-google-sheet-2']

    form_2.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form_2) })
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message))
    })
</script>


</html>