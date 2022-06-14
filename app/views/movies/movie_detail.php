    <?php
        // include header
        include_once '../app/views/includes/header.php';
    ?>
    <!-- Section -->
    <section class="details">
        <div class="movie-details">
            <div class="cover">
                <img src="<?php echo URLROOT ?>/public/assets/images/m3.jpg" alt="name of the movie">
            </div>
            <div class="informations">
                <h1>Movie Title</h1>
                <div class="specific-details">
                    <p>Genre :</p>
                    <p>Drama | Action</p>
                </div>
                <div class="specific-details">
                    <p>Duration :</p>
                    <p>120 min</p>
                </div>
                <div class="specific-details">
                    <p>Released :</p>
                    <p>October 2021</p>
                </div>
                <div class="specific-details">
                    <p>IMDb Rating :</p>
                    <p>8.5</p>
                </div>
                <div class="specific-details">
                    <p>Language :</p>
                    <p>English</p>
                </div>
                <div class="specific-details">
                    <p>Playing Date :</p>
                    <p>15 March 2022 | 05 : 00 pm</p>
                </div>
                <div class="specific-details">
                    <p>Ticket Price :</p>
                    <p>55 MAD</p>
                </div>
                <div class="book-ticket">
                    <a href="reserve" class="footer-button">Buy a Ticket</a>
                </div>
            </div>
            <div>
                <div class="movie-triler">
                    <h1>Movie Triler</h1>
                    <video controls>
                        <source src="<?php echo URLROOT ?>/public/assets/trailers/trailler.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="movie-story">
                    <h1>Movie Story</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quisquam, quidem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore doloremque placeat voluptatum quia repudiandae, esse totam temporibus obcaecati est minima!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>    
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="heading">Playing This Week</h2>
        <div class="movies-container">
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
            <div class="box">
                <div class="box-img">
                    <img src="<?php echo URLROOT ?>/public/assets/images/m1.jpg" alt="m1">
                </div>
                <h3>Venom</h3>
                <span>120 min | Action</span>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php
        // include footer
        include_once '../app/views/includes/footer.php';
    ?>