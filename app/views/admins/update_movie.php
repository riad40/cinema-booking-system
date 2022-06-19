<?php
                // include sidebar from includes folder
                include_once APPROOT . '/views/includes/sidebar.php';
            ?>                
                    
            <!-- add movie form -->
            <section class="contact-section" id="Contact">
                <h2 class="heading">Update This Movie</h2>
                <div class="contact-container">
                    <div class="errors"><?= $data['errors'] ?></div>
                    <form action="<?php echo URLROOT ?>/admins/update_movie/<?= $data['id'] ?>" method="post" enctype="multipart/form-data" id="movie_form">

                        <label for="movie-title">Movie Title</label>
                        <input type="text" name="movie_title" id="movie-title" value="<?= $data['title'] ?>">
                        <div class="errors" id="movie_title_errors"></div>

                        <label for="movie-cover">Movie Cover</label>
                        <div class="file-input">
                            <input type="file" name="movie_cover" id="movie-cover">
                            <span class="current-file"><?= $data['cover'] ?></span>
                        </div>
                        <div class="errors" id="movie_cover_errors"></div>

                        <input type="hidden" name="movie_id" value="<?= $data['id'] ?>">

                        <label for="movie-type">Movie Type</label>
                        <input type="text" name="movie_type" id="movie-type" placeholder="Write The Movie Type" value="<?= $data['type'] ?>">
                        <div class="errors" id="movie_type_errors"></div>

                        <label for="movie-duration">Movie Duration</label>
                        <input type="text" name="movie_duration" id="movie-duration" value="<?= $data['duration'] ?>">
                        <div class="errors" id="movie_duration_errors"></div>

                        <label for="movie-released">Movie Released at</label>
                        <input type="date" name="movie_released" id="movie-released" value="<?= $data['release_date'] ?>">
                        <div class="errors" id="movie_released_errors"></div>

                        <label for="movie-rating">Movie Rating</label>
                        <input type="text" name="movie_rating" id="movie-rating" value="<?= $data['rating'] ?>">
                        <div class="errors" id="movie_rating_errors"></div>

                        <label for="movie-lang">Movie Language</label>
                        <input type="text" name="movie_lang" id="movie-lang" value="<?= $data['language'] ?>">
                        <div class="errors" id="movie_lang_errors"></div>

                        <label for="movie-playing-date">Playing Date</label>
                        <input type="datetime-local" name="movie_playing_date" id="movie-playing-date" value="<?= $data['playing_date'] ?>">
                        <div class="errors" id="movie_playing_date_errors"></div>

                        <label for="movie-ticket-price">Movie Ticket Price</label>
                        <input type="text" name="movie_ticket_price" id="movie-ticket-price" value="<?= $data['ticket_price'] ?>">
                        <div class="errors" id="movie_ticket_price_errors"></div>

                        <label for="movie-story">Movie Story</label>
                        <textarea name="movie_story" id="movie-story"><?= $data['story'] ?></textarea>
                        <div class="errors" id="movie_story_errors"></div>

                        <label for="movie-cover">Movie Triler</label>
                        <div class="file-input">
                            <input type="file" name="movie_triler" id="movie-triler">
                            <span class="current-file"><?= $data['trailer'] ?></span>
                        </div>
                        <div class="errors" id="movie_trailer_errors"></div>

                        <input type="submit" name="update_movie" id="add-movie" value="Update Movie">
                    </form>
                </div>
            </section>
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
    <script src="<?= URLROOT ?>/public/assets/js/movies.js"></script>
</html>
