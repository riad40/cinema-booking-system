<?php
    // include header
    include_once '../app/views/includes/header.php';
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
                    <img src="<?php echo URLROOT ?>/public/assets/images/profile.jpg" alt="">
                </div>
                <div class="profile-details">
                    <h1><?php echo $_SESSION['user_fname']; ?></h1>
                    <h2><?php echo $_SESSION['user_email']; ?></h2>
                    <h3><?php echo $_SESSION['user_phone']; ?></h3>
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
                                <a href="#" class="ediel">Download</a>
                                <a href="#" class="ediel">Cancel Reservation</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </section>
    <!-- footer -->
    <?php
        // include footer
        include_once '../app/views/includes/footer.php';
    ?>