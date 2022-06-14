<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo URLROOT ?>/public/assets/css/styles.css" rel="stylesheet">
    <!--Link Box Icon's Css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- Link animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <?php
        if(basename($_SERVER['REQUEST_URI']) == 'profile') {
        ?>
            <!-- Tailwind cdn -->
            <script src="https://cdn.tailwindcss.com"></script>
        <?php
        }
    ?>
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <?php
        // change the header depending on the page
        $title1 = '';
        $link1 = '';
        $title2 = '';
        $link2 = '';
        if(basename($_SERVER['REQUEST_URI']) == 'reserve' || basename($_SERVER['REQUEST_URI']) == 'profile') {
            $title1 = 'Profile';
            $link1 = '../users/profile';
            $title2 = 'Logout';
            $link2 = '../users/logout';
        } else {
            $title1 = 'Login';
            $link1 = 'users/login';
            $title2 = 'Register';
            $link2 = 'users/register';
        }
    ?>
    <!-- navbar -->
    <header>
        <nav class="navbar">
            <div class="brand-title">
                <i class='bx bxs-camera-movie' ></i>
                <a href="<?php echo URLROOT; ?>">Cinema Wave</a>
            </div>
            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="<?php echo URLROOT; ?>">Home</a></li>
                    <li><a href="<?php echo URLROOT ?>#Movies">Movies</a></li>
                    <li><a href="<?php echo URLROOT ?>#Contact">Contact Us</a></li>
                    <li><a href="<?php echo $link1; ?>"><?php echo $title1; ?></a></li>
                    <li><a href="<?php echo $link2; ?>"><?php echo $title2; ?></a></li>
                </ul>
            </div>
        </nav>
    </header>