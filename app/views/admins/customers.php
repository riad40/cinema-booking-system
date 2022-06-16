<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/styles.css" />
        <!-- Boxicons CDN Link -->
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Tailwind cdn -->
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Customers</title>
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
                    <a href="movies">
                        <i class="bx bx-box"></i>
                        <span class="links_name">Movies</span>
                    </a>
                </li>
                <li>
                    <a href="customers" class="active">
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
                    <span class="dashboard">Customers</span>
                </div>
                <div class="profile-details">
                    <span class="admin_name">Hi, Admin</span>
                </div>
            </nav>
            <div class="reservation-container" style="margin-top: 50px">
                <table>
                    <thead class="border-b w-full">
                        <tr>
                            <th scope="col" class="th-1">
                            #
                            </th>
                            <th scope="col" class="ths">
                            Customer Name
                            </th>
                            <th scope="col" class="ths">
                            Customer Email
                            </th>
                            <th scope="col" class="ths">
                            Customer Phone
                            </th>
                            <th scope="col" class="last-th">
                            Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td-1">1</td>
                            <td class="tds">
                                lorem ipsum
                            </td>
                            <td class="tds">
                                lorem ipsum
                            </td>
                            <td class="tds">
                                lorem ipsum
                            </td>
                            <td class="tdLinks">
                                <a href="#" class="ediel">Banne Customer</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
        <script src="<?php echo URLROOT ?>/public/assets/js/table.js"></script>
    </body>
</html>
