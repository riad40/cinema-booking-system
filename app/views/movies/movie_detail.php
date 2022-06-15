    <?php
        // include header
        include_once '../app/views/includes/header.php';
        // var_dump($data['movie']);
        // var_dump($data['movies']);
    ?>
    <!-- Section -->
    <section class="details">
        <div class="movie-details">
            <div class="cover">
                <img src="<?php echo URLROOT ?>/public/assets/images/<?= $data['movie']->movie_cover ?>" alt="name of the movie">
            </div>
            <div class="informations">
                <h1><?= $data['movie']->movie_title ?></h1>
                <div class="specific-details">
                    <p>Movie Type :</p>
                    <p><?= $data['movie']->movie_type ?></p>
                </div>
                <div class="specific-details">
                    <p>Duration :</p>
                    <p><?= $data['movie']->movie_duration ?></p>
                </div>
                <div class="specific-details">
                    <p>Released :</p>
                    <p><?= $data['movie']->movie_released_at ?></p>
                </div>
                <div class="specific-details">
                    <p>IMDb Rating :</p>
                    <p><?= $data['movie']->movie_rating ?></p>
                </div>
                <div class="specific-details">
                    <p>Language :</p>
                    <p><?= $data['movie']->movie_language ?></p>
                </div>
                <div class="specific-details">
                    <p>Playing Date :</p>
                    <p><?= $data['movie']->movie_playing_date ?></p>
                </div>
                <div class="specific-details">
                    <p>Ticket Price :</p>
                    <p><?= $data['movie']->movie_ticket_price ?></p>
                </div>
                <div class="book-ticket">
                    <a href="reserve" class="footer-button">Buy a Ticket</a>
                </div>
            </div>
            <div>
                <div class="movie-triler">
                    <h1>Movie Triler</h1>
                    <video controls>
                        <source src="<?php echo URLROOT ?>/public/assets/trailers/<?= $data['movie']->movie_triler ?>" type="video/mp4">
                    </video>
                </div>
                <div class="movie-story">
                    <h1>Movie Story</h1>
                    <p>
                        <?= $data['movie']->movie_story ?>
                    </p>    
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="heading">Playing This Week</h2>
        <div class="movies-container">
        <?php foreach($data['movies'] as $x) { ?>
                <div class="box" id="movie-box">
                    <div class="box-img">
                        <img src="<?= URLROOT . '/public/assets/images/' . $x->movie_cover; ?>" alt="m1">
                    </div>
                    <h3><?= $x->movie_title ?></h3>
                    <span><?= $x->movie_duration ?> | <?= $x->movie_type ?></span>
                    <div class="gggg">
                        <a href="<?php echo URLROOT ?>/movies/movie_detail/<?= $x->movie_id ?>" id="bookNow">Book Now</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- footer -->
    <?php
        // include footer
        include_once '../app/views/includes/footer.php';
    ?>