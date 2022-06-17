<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap');
    * {
        margin: 0;
        padding: 0;
        font-family: 'Mitr', sans-serif;
        font-family: 'Roboto', sans-serif;
        font-family: 'Source Sans Pro', sans-serif;
    }
    body {
        background: rgb(204,204,204); 
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        padding: 1cm;
    }
    page[size="A4"] {  
        width: 21cm;
        height: 21cm; 
    }
    h1 {
        text-align: center;
        font-size: 1.5cm;
        font-weight: bold;
    }
    .infos {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    li {
        padding: 20px;
        font-weight: bold;
        color: #000;
    }
    li span:nth-child(1) {
        background: #f5f5f5;
        padding: 10px;
        border-radius: 5px;
        margin-right: 10px;


    }
</style>
</head>
<body>
<page size="A4">
    <h1>Cinema Wave Ticket</h1>
    <pre>
        <?php 
            // var_dump($data);
        ?>
    </pre>
    <!-- // user name
    // user email
    // user phone
    // movie title
    // movie time
    // movie date
    // movie price
    // seats reserved -->
    <div class="infos">
        <ul>
            <li>
                <span>Name:</span>
                <span><?= $data['movie_reserved']->user_fname ?></span>
            </li>
            <li>
                <span>Email:</span>
                <span><?= $data['movie_reserved']->user_email ?></span>
            </li>
            <li>
                <span>Phone:</span>
                <span><?= $data['movie_reserved']->user_phone ?></span>
            </li>
            <li>
                <span>Movie Title:</span>
                <span><?= $data['movie_reserved']->movie_title ?></span>
            </li>
            <li>
                <span>Movie Duration:</span>
                <span><?= $data['movie_reserved']->movie_duration ?></span>
            </li>
            <li>
                <span>Movie Playing Date:</span>
                <span><?= $data['movie_reserved']->movie_playing_date ?></span>
            </li>
            <li>
                <span>Seats Reserved:</span>
                <span><?= $data['movie_reserved']->seats_reserved ?></span>
            </li>
        </ul>
    </div>
</page>
</body>
</html>

