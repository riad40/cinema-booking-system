<?php
    // var_dump($data['movies']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/styles.css" />
        <!-- Boxicons CDN Link -->
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Movies</title>
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
