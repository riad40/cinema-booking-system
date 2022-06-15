<?php
    // print_r($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/styles.css" />
        <!-- Boxicons CDN Link -->
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Update Movies</title>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxs-camera-movie' ></i>
                <span class="logo_name">CinemaWave</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="dashboard">
                        <i class="bx bx-grid-alt"></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="movies" class="active">
                        <i class="bx bx-box"></i>
                        <span class="links_name">Movies</span>
                    </a>
                </li>
                <li>
                    <a href="customers">
                        <i class="bx bx-user"></i>
                        <span class="links_name">Customers</span>
                    </a>
                </li>
                <li class="log_out">
                    <a href="logout">
                        <i class="bx bx-log-out"></i>
                        <span class="links_name">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class="bx bx-menu sidebarBtn"></i>
                    <span class="dashboard">Movies</span>
                </div>
                <div class="profile-details">
                    <span class="admin_name">Hi, Admin</span>
                </div>
                <a href="add_movie" class="footer-button">Add New Movie</a>
            </nav>                   
                    
            <!-- add movie form -->
            <section class="contact-section" id="Contact">
                <h2 class="heading">Update This Movie</h2>
                <div class="contact-container">
                    <form action="<?php echo URLROOT ?>/admins/update_movie/<?= $data['id'] ?>" method="post" enctype="multipart/form-data" >

                        <label for="movie-title">Movie Title</label>
                        <input type="text" name="movie_title" id="movie-title" value="<?= $data['title'] ?>">

                        <label for="movie-cover">Movie Cover</label>
                        <div class="file-input">
                            <input type="file" name="movie_cover" id="movie-cover">
                            <span class="current-file"><?= $data['cover'] ?></span>
                        </div>

                        <input type="hidden" name="movie_id" value="<?= $data['id'] ?>">

                        <label for="movie-type">Movie Type</label>
                        <input type="text" name="movie_type" id="movie-type" placeholder="Write The Movie Type" value="<?= $data['type'] ?>">

                        <label for="movie-duration">Movie Duration</label>
                        <input type="text" name="movie_duration" id="movie-duration" value="<?= $data['duration'] ?>">

                        <label for="movie-released">Movie Released at</label>
                        <input type="date" name="movie_released" id="movie-released" value="<?= $data['release_date'] ?>">

                        <label for="movie-rating">Movie Rating</label>
                        <input type="text" name="movie_rating" id="movie-rating" value="<?= $data['rating'] ?>">

                        <label for="movie-lang">Movie Language</label>
                        <input type="text" name="movie_lang" id="movie-lang" value="<?= $data['language'] ?>">

                        <label for="movie-playing-date">Playing Date</label>
                        <input type="datetime-local" name="movie_playing_date" id="movie-playing-date" value="<?= $data['playing_date'] ?>">

                        <label for="movie-ticket-price">Movie Ticket Price</label>
                        <input type="text" name="movie_ticket_price" id="movie-ticket-price" value="<?= $data['ticket_price'] ?>">

                        <label for="movie-story">Movie Story</label>
                        <textarea name="movie_story" id="movie-story"><?= $data['story'] ?></textarea>

                        <label for="movie-cover">Movie Triler</label>
                        <div class="file-input">
                            <input type="file" name="movie_triler" id="movie-triler">
                            <span class="current-file"><?= $data['trailer'] ?></span>
                        </div>

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
</html>
