            <?php
                // include sidebar from includes folder
                include_once APPROOT . '/views/includes/sidebar.php';
                // var_dump($data);
            ?>
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
                            <th scope="col" class="ths">
                            Signed Up On
                            </th>
                            <th scope="col" class="last-th">
                            Action
                            </th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach($data['customers'] as $d){
                    ?>
                    <tbody>
                        <tr>
                            <td class="td-1"><?= $i++ ?></td>
                            <td class="tds">
                                <?= $d->user_fname ?>
                            </td>
                            <td class="tds">
                                <?= $d->user_email ?>
                            </td>
                            <td class="tds">
                                <?= $d->user_phone ?>
                            </td>
                            <td class="tds">
                                <?= $d->user_register ?>
                            </td>
                            <td class="tdLinks">
                                <a href="delete_user/<?= $d->user_id ?>" class="ediel" style="color: red;">Banne Customer</a>
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
