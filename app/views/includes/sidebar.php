<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/styles.css" />
        <!-- Boxicons CDN Link -->
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Admin Pannel</title>
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
                <?php
                    if(isset($data['page']) && $data['page'] == 'add_movie' || $data['page'] == 'update movie'){
                        echo '<li>
                            <a href="../movies">
                                <i class="bx bx-box"></i>
                                <span class="links_name">Movies</span>
                            </a>
                        </li>';

                    } else {
                        echo '<li>
                            <a href="movies">
                                <i class="bx bx-box"></i>
                                <span class="links_name">Movies</span>
                            </a>
                        </li>';
                    }
                ?>
                <li>
                    <a href="customers">
                        <i class="bx bx-user"></i>
                        <span class="links_name">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="reservations">
                        <i class='bx bxs-book-add'></i>                        
                        <span class="links_name">Reservations</span>
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
                    <span class="dashboard">
                        <?php
                            // check wich page we are on and change the name of the page
                            if (isset($data['page'])) {
                                echo $data['page'];
                            } else {
                                echo "";
                            }
                        ?>
                    </span>
                </div>
                <?php
                    if (isset($data['page']) && $data['page'] == "movies") {
                        echo '<a href="add_movie" class="footer-button">Add Movie</a>';
                    }
                ?>
                <div class="profile-details">
                    <span class="admin_name">Hi, <?= $data['admin']->admin_fname ?></span>
                </div>
            </nav>