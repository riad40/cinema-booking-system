            <?php
                // include sidebar from includes folder
                include_once APPROOT . '/views/includes/sidebar.php';
            ?>

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="boxi">
                        <div class="right-side" style="text-align: center;">
                            <div class="box-topic">Total Movies</div>
                            <div class="number"><?= $data['movie_count']->c ?></div>
                        </div>
                    </div>
                    <div class="boxi">
                        <div class="right-side" style="text-align: center;">
                            <div class="box-topic">Total Customers</div>
                            <div class="number"><?= $data['user_count']->c?></div>
                        </div>
                    </div>
                    <div class="boxi">
                        <div class="right-side" style="text-align: center;">
                            <div class="box-topic">Total Reservations</div>
                            <div class="number"><?= $data['reservation_count']->count?></div>
                        </div>
                    </div>
                </div>
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
    </body>
</html>
