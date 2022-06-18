<?php
    // include header
    include_once '../app/views/includes/header.php';
    // var_dump($data['reservations']);
    // var_dump($data['movie_reserved']);
    // var_dump($data);
?>
<style>
    footer {
        margin-top: 116px;
    }
</style>
    <!-- profile section -->
    <section>            
        <h2 class="heading">Profile Informations</h2>
        <div class="profile-container">
                <?php
                    if(isset($_GET['updated'])) {
                        if($_GET['updated'] == 'success') {
                            echo '<div class="success">Profile Updated Successfully</div>';
                        }
                    }
                ?>
            <div class="profile-info">
                <div class="profile-image">
                    <?php
                        if(empty($data['user']->user_image)){
                            echo '<img src= ' . URLROOT . '/public/assets/images/Default-Profile-Picture.png alt="Profile Picture">';
                        } else {
                            echo '<img src= ' . URLROOT . '/public/assets/images/' . $data['user']->user_image . ' alt="Profile Picture">';
                        }
                    ?>
                </div>
                <div class="profile-details">
                    <h1><?= $data['user']->user_fname; ?></h1>
                    <h2><?= $data['user']->user_email; ?></h2>
                    <h3><?= $data['user']->user_phone; ?></h3>
                </div>
            </div>
            <a href="edit_profile" class="heading">Edit Profile</a>
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
                                <a href="cancelReservation/<?= $r->reservation_id ?>" class="ediel" style="color: red;">Cancel Reservation</a>
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