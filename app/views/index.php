    <?php
        // include header
        include_once '../app/views/includes/header.php';
        // echo APPROOT;
    ?>
    <!-- Home section-->
    <section class="home swiper" id="home">
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="./assets/images/home1.jpg" alt="name of the movie">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: Let There <br/> Be Carnage</h1>
                    <a href="<?php echo URLROOT ?>/movies/movie_detail" class="btn">Book Now</a>
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./assets/images/home2.jpg" alt="name of the movie">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: Let There <br/> Be Carnage</h1>
                    <a href="<?php echo URLROOT ?>/movies/movie_detail" class="btn">Book Now</a>
                </div>
            </div>
            <div class="swiper-slide container">
                <img src="./assets/images/home3.jpg" alt="name of the movie">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Venom: Let There <br/> Be Carnage</h1>
                    <a href="<?php echo URLROOT ?>/movies/movie_detail" class="btn">Book Now</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- movies section -->
    <section id="Movies">
        <h2 class="heading">Playing This Week</h2>
        <div class="movies-container">
            <div class="box" id="movie-box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
                <div class="gggg">
                    <a href="<?php echo URLROOT ?>/movies/movie_detail" style="display: none;" class="" id="bookNow">Book Now</a>
                </div>
            </div>
            <div class="box" id="movie-box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
                <div class="gggg">
                    <a href="<?php echo URLROOT ?>/movies/movie_detail" style="display: none;" class="" id="bookNow">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="./assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
        </div>
    </section>
    <!-- contact us section -->
    <section class="contact-section" id="Contact">
        <h2 class="heading">Contact Us</h2>
        <div class="contact-container">
            <form method="post">
                <label for="full-name">Full Name</label>
                <input type="text" name="fname" id="full-name" placeholder="Write Your Full Name">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Write Your Email">
                <label for="message">Message</label>
                <textarea name="message" id="message" placeholder="Write Your Message"></textarea>
                <input type="submit" name="submit-contact-us" id="submit-contact-us" value="Submit">
            </form>
        </div>
    </section>
    <!-- footer -->
    <?php
        // include footer
        include_once '../app/views/includes/footer.php';
    ?>
