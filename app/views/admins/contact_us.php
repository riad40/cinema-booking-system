            <?php
                // include sidebar from includes folder
                include_once APPROOT . '/views/includes/sidebar.php';
                
            ?>
            <div class="reservation-container" style="margin-top: 50px">
                <table>
                    <thead class="border-b w-full">
                        <tr>
                            <th scope="col" class="th-1">
                            #
                            </th>
                            <th scope="col" class="ths">
                                Sent by
                            </th>
                            <th scope="col" class="ths">
                                Email   
                            </th>
                            <th scope="col" class="ths">
                                Message
                            </th>
                            <th scope="col" class="last-th">
                            </th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach($data['messages'] as $r){
                    ?>
                    <tbody>
                        <tr>
                            <td class="td-1"><?= $i++ ?></td>
                            <td class="tds">
                                <?= $r->name ?>
                            </td>
                            <td class="tds">
                                <?= $r->email ?>
                            </td>
                            <td class="xc">
                                <?= $r->message ?>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
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
