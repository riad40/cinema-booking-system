    <?php
        // include header
        include_once '../app/views/includes/header.php';
        // print_r($data);
    ?>

    <!-- Update Your Profile section -->
    <section class="contact-section" id="Contact">
        <h2 class="heading">Update Your Profile</h2>
        <div class="contact-container">
            <div class="errors"><?= $data['errors'] ?></div>
            <form action="<?php echo URLROOT ?>/users/edit_profile" method="post" enctype="multipart/form-data" >
                <label for="profile-image">Profile Picture</label>
                <div class="file-input">
                    <input type="file" name="profile-image" id="profile-image">
                </div>
                <label for="full-name">Full Name</label>
                <input type="text" name="fname" id="full-name" placeholder="Write Your Full Name" value="<?= $data['user']->user_fname ?>">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Write Your Email" value="<?= $data['user']->user_email ?>">
                <label for="phone">Phone Number</label>
                <input type="number" name="phone" id="phone" placeholder="Write Your Phone Number" value="<?= $data['user']->user_phone ?>">
                <label for="pwd">Password</label>
                <input type="password" name="pwd" id="pwd" placeholder="Write Your New Password">
                <input type="submit" name="update_profile" id="update_profile" value="Update">
            </form>
        </div>
    </section>
    <style>
        footer {
            margin-top: 102px;
        }
    </style>
    

    <?php
        // include footer
        include_once '../app/views/includes/footer.php';
    ?>
