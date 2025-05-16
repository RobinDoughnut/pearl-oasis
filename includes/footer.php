<footer class="footer">
    <div class="footer-content">
        <div>
            <div class="call-icon">
                <img src="img/call.svg" alt="">
                <span>+880 1892 411 397</span>
            </div>
        </div>
        <p>&copy; 2025 Pearl Oasis. All rights reserved.</p>
        <form action="https://api.web3forms.com/submit" method="POST" id="contactForm" name="submit-to-google-sheet-2">
            <div class="form-group" style="display: none;">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your Name" value="DEFAULT">
                <span class="error-message" id="nameError"></span>
            </div>
            <div class="email-form">
                <input type="hidden" name="access_key" value="cc171ee3-ff6d-4607-b89a-f60c5d040d72">
                <label style="display: none;" for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <span class="error-message" id="emailError"></span>
                <button type="submit" class="submit-button">
                    Subscribe
                </button>
            </div>
            <div class="form-group" style="display: none;">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" value="DEFAULT">
                <span class="error-message" id="phoneError"></span>
            </div>
            <div class="form-group" style="display: none;">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your Message" rows="5">DEFAULT</textarea>
                <span class="error-message" id="messageError"></span>
            </div>

        </form>

        <!-- <div class="email-form">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </div> -->
    </div>
</footer>