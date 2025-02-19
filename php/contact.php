<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <div style=="width:100vw; display:flex; justify-content:center;">

        <div class="contact-form-container" style="justify-content: center;">
            <h2>Contact Us</h2>
            <form action="https://api.web3forms.com/submit" method="POST" id="contactForm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" 
                    name="name" 
                    placeholder="Your Name" required>
                    <span class="error-message" id="nameError"></span>
                </div>
                <div class="form-group">
                    <input type="hidden" name="access_key" value="cc171ee3-ff6d-4607-b89a-f60c5d040d72">
                    <label for="email">Email</label>
                    <input type="email" id="email" 
                    name="email" 
                    placeholder="Your Email" required>
                    <span class="error-message" id="emailError"></span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" 
                    name="phone" 
                    placeholder="Your Phone Number" required>
                    <span class="error-message" id="phoneError"></span>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" 
                    name="message" 
                    placeholder="Your Message" 
                    rows="5" required></textarea>
                    <span class="error-message" 
                    id="messageError"></span>
                </div>
                <button type="submit" 
                class="submit-button">
                Send Message
            </button>
        </form>
    </div>
    <!-- <script src="contact.js"></script> -->
</div>
</body>

</html>
