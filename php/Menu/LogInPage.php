<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../styles/styles.css">
    <title>LogIn</title>
</head>
<body>
<header>
    <div class="bg-image">
        <div class="image-wrapper">
            <h1 style="text-align: center">Log in</h1>

            <?php
                use php\User;

                require_once "Menu.php";
                require_once "../User.php";

                $user = new User();

                echo "<div class='input-box-position-container'>";
                echo "<input class='input-box' type='text' name='username' placeholder='Enter your username'>";
                echo "<input class='input-box' type='text' name='password' placeholder='Enter your password'>";
                echo "</div>";
                /* TODO: continue implementation */
            ?>
        </div>
    </div>
</header>
</body>
</html>