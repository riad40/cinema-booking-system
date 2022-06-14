<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/assets/css/register.css">
    <title>Register</title>
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="login px-7 py-10">
            <h1 class="block py-4 text-white text-2xl font-400 text-center">Register</h1>
            <form method="post">
                <label for="fname" class="font-medium">Enter Your full name</label>
                <input type="text" name="fname" id="fname" placeholder="Jhon Doe" class="block mt-4 mb-1 p-3 w-full">

                <label for="email" class="font-medium">Enter Your Email</label>
                <input type="email" name="email" id="email" placeholder="example@gmail.com" class="block mt-4 mb-1 p-3 w-full">

                <label for="password" class="font-medium">Enter Your Password</label>
                <input type="password" name="pwd" id="pwd" placeholder="example123" class="block mt-4 mb-1 p-3 w-full">

                <label for="Rpassword" class="font-medium">Confirm Your Password</label>
                <input type="password" name="Rpwd" id="Rpwd" placeholder="example123" class="block mt-4 mb-1 p-3 w-full">

                <input type="submit" name="register" value="Sign Up" class="block my-5 text-dark font-medium cursor-pointer">
            </form>
            <ul class="flex items-center w-full py-3">
                <li class="child1"></li>
                <li class="child2 font-medium">or</li>
                <li class="child3"></li>
            </ul> 
            <div class="flex flex-col items-center py-3 options">
                <span>Already have an account ?</span>
                <a href="./login" class="text-xl">sign in</a>
            </div>
        </div>
    </div>
</body>
</html>