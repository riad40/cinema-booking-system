<footer class="main-footer">
        <div class="text-footer">
            <div class="text-child-footer">
                <h1 class="footer-heading">Cinema Wave</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem nemo, at fugiat hic consequatur quidem eaque, eos dolor provident, praesentium repellat libero animi eligendi sunt voluptates suscipit pariatur recusandae? Nostrum?</p>
                <a href="#movies" class="footer-button">Book A Ticket Now</a>
            </div>
            <div class="social-links">
                <h1 class="footer-heading">Fell Free To Reach Us</h1>
                <ul>
                    <li>contact.cinema@wave.com</li>
                    <li>+212652-025819</li>
                    <li>Post office street, Ouarzazate 45000</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            &copy 2022 Made with love by Riad
        </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo URLROOT ?>/public/assets/js/script.js"></script>
    <?php
        if(basename($_SERVER['REQUEST_URI']) == 'profile') {
            echo '<script src="'.URLROOT.'/public/assets/js/booking_history.js"></script>';
        } 
    ?>
</body>
</html>