<?php
                // include sidebar from includes folder
                include_once APPROOT . '/views/includes/sidebar.php';
            ?>                
                    
            <!-- Section -->
            <?php foreach($data['movies'] as $c){ ?>
            <section class="details" style="margin-top: 100px;">
                <div class="movie-details">
                    <div class="cover">
                        <img src="<?= URLROOT . '/public/assets/images/' . $c->movie_cover ?>" alt="name of the movie">
                    </div>
                    <div class="informations">
                        <h1><?= $c->movie_title ?></h1>
                        <div class="specific-details">
                            <p>Genre :</p>
                            <p><?= $c->movie_type ?></p>
                        </div>
                        <div class="specific-details">
                            <p>Duration :</p>
                            <p><?= $c->movie_duration ?></p>
                        </div>
                        <div class="specific-details">
                            <p>Released :</p>
                            <p><?= $c->movie_released_at ?></p>
                        </div>
                        <div class="specific-details">
                            <p>IMDb Rating :</p>
                            <p><?= $c->movie_rating ?></p>
                        </div>
                        <div class="specific-details">
                            <p>Language :</p>
                            <p><?= $c->movie_language ?></p>
                        </div>
                        <div class="specific-details">
                            <p>Playing Date :</p>
                            <p><?= $c->movie_playing_date ?></p>
                        </div>
                        <div class="specific-details">
                            <p>Ticket Price :</p>
                            <p><?= $c->movie_ticket_price ?></p>
                        </div>
                        <div class="book-ticket" style="padding: 0;">
                            <a href="update_movie/<?= $c->movie_id ?>" class="footer-button">Edit Movie</a>
                            <a href="delete_movie/<?= $c->movie_id ?>" class="footer-button">Delete Movie</a>
                        </div>
                    </div>
                    <div>
                        <div class="movie-triler">
                            <h1>Movie Triler</h1>
                            <video controls>
                                <source src="<?= URLROOT . '/public/assets/trailers/' . $c->movie_triler; ?>" type="video/mp4">
                            </video>
                        </div>
                        <div class="movie-story">
                            <h1>Movie Story</h1>
                            <p>
                                <?= $c->movie_story ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <?php } ?>
        </section>

        <script>
            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".sidebarBtn");
            sidebarBtn.onclick = function () {
                sidebar.classList.toggle("active");
                if (sidebar.classList.contains("active")) {
                    sidebarBtn.classList.replace(
                        "bx-menu",
                        "bx-menu-alt-right"
                    );
                } else
                    sidebarBtn.classList.replace(
                        "bx-menu-alt-right",
                        "bx-menu"
                    );
            };
        </script>
    </body>
</html>
