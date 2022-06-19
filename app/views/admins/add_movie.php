            <?php
                // include sidebar from includes folder
                include_once APPROOT . '/views/includes/sidebar.php';
            ?>                 
                    
            <!-- add movie form -->
            <section class="contact-section" id="Contact">
                <h2 class="heading">Add New Movie</h2>
                <div class="contact-container">
                    <div class="errors"><?= $data['errors'] ?></div>
                    <form action="<?php echo URLROOT ?>/admins/add_movie" method="post" enctype="multipart/form-data" id="movie_form">

                        <label for="movie-title">Movie Title</label>
                        <input type="text" name="movie_title" id="movie-title" placeholder="Write The Movie Title">
                        <div class="errors" id="movie_title_errors"></div>

                        <label for="movie-cover">Movie Cover</label>
                        <div class="file-input">
                            <input type="file" name="movie_cover" id="movie-cover">
                        </div>
                        <div class="errors" id="movie_cover_errors"></div>

                        <label for="movie-type">Movie Type</label>
                        <input type="text" name="movie_type" id="movie-type" placeholder="Write The Movie Type">
                        <div class="errors" id="movie_type_errors"></div>

                        <label for="movie-duration">Movie Duration</label>
                        <input type="text" name="movie_duration" id="movie-duration" placeholder="Write The Movie Duration">
                        <div class="errors" id="movie_duration_errors"></div>

                        <label for="movie-released">Movie Released at</label>
                        <input type="date" name="movie_released" id="movie-released">
                        <div class="errors" id="movie_released_date_errors"></div>

                        <label for="movie-rating">Movie Rating</label>
                        <input type="text" name="movie_rating" id="movie-rating" placeholder="Write The Movie Rating">
                        <div class="errors" id="movie_rating_errors"></div>

                        <label for="movie-lang">Movie Language</label>
                        <input type="text" name="movie_lang" id="movie-language" placeholder="Write The Movie Language">
                        <div class="errors" id="movie_language_errors"></div>

                        <label for="movie-playing-date">Playing Date</label>
                        <input type="datetime-local" name="movie_playing_date" id="movie-playing-date" placeholder="Write The Movie Playing Date ">
                        <div class="errors" id="movie_playing_date_errors"></div>

                        <label for="movie-ticket-price">Movie Ticket Price</label>
                        <input type="text" name="movie_ticket_price" id="movie-ticket-price" placeholder="Write The Movie Ticket Price">
                        <div class="errors" id="movie_ticket_price_errors"></div>

                        <label for="movie-story">Movie Story</label>
                        <textarea name="movie_story" id="movie-story" placeholder="Write The Movie Story"></textarea>
                        <div class="errors" id="movie_story_errors"></div>

                        <label for="movie-cover">Movie Triler</label>
                        <div class="file-input">
                            <input type="file" name="movie_triler" id="movie-triler">
                        </div>
                        <div class="errors" id="movie_triler_errors"></div>

                        <input type="submit" name="add-movie" id="add-movie" value="Add Movie">
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
