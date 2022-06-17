<?php
    // include header
    include_once '../app/views/includes/header.php';
    // var_dump($data['reservations']);
    // var_dump($data['movie_reserved']);
?>
<style>
    footer {
        margin-top: 60px;
    }
</style>
    <!-- profile section -->
    <section>            
        <h2 class="heading">Profile Informations</h2>
        <div class="profile-container">
            <div class="profile-info">
                <div class="profile-image">
                    <img src="<?= URLROOT . '/public/assets/images/' . $data['user']->user_image; ?>" alt="">
                </div>
                <div class="profile-details">
                    <h1><?php echo $data['user']->user_fname; ?></h1>
                    <h2><?php echo $data['user']->user_email; ?></h2>
                    <h3><?php echo $data['user']->user_phone; ?></h3>
                </div>
            </div>
            <a href="./edit_profile" class="heading">Edit Profile</a>
        </div>
        <h2 class="heading">Reservation History</h2>
        <div class="reservation-container">
                <table>
                    <thead class="border-b w-full">
                        <tr>
                            <th scope="col" class="th-1">
                            #
                            </th>
                            <th scope="col" class="ths">
                            Movie Title
                            </th>
                            <th scope="col" class="ths">
                            Playing Date
                            </th>
                            <th scope="col" class="ths">
                            Places Reserved
                            </th>
                            <th scope="col" class="last-th">
                            Action
                            </th>
                        </tr>
                    </thead>
                    <?php
                    $i = 1;
                    foreach($data['movie_reserved'] as $r){
                    ?>
                    <tbody>
                        <tr>
                            <td class="td-1"><?= $i++ ?></td>
                            <td class="tds">
                                <?= $r->movie_title ?>
                            </td>
                            <td class="tds">
                                <?= $r->movie_playing_date ?>
                            </td>
                            <td class="tds">
                                <?= $r->seats_reserved ?>
                            </td>
                            <td class="tdLinks">
                                <a href="../reservations/generate_ticket/<?= $r->reservation_id ?>" class="ediel">Download</a>
                                <a href="#" class="ediel" style="color: red;">Cancel Reservation</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
    </section>
    <!-- footer -->
    <?php
        // include footer
        include_once '../app/views/includes/footer.php';
    ?>