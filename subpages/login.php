<?php

session_start();

?>

<!DOCTYPE html>
<html lang="sv-se">
    <head>
        <meta charset="utf-8">
        <?php
        
        if(isset($_SESSION['u_id'])) {
            echo '
                <title>Settings</title>
            ';
        } else {
            echo '
                <title>Login</title>
            ';
        }
        
        ?>
        <!-- Icon in title -->
        <link rel="icon" type="image/png" href="../assets/images/icon/favicon-32x32.png" sizes="32x32">
        <!-- CSS -->
        <link rel="stylesheet" href="../assets/lib/css/reset.css">
        <link rel="stylesheet" href="../assets/css/login.css">
    </head>
    
    <body>
<!--
        <div class="container">
            <a href="../index.php" class="home-link">Home</a>
            <?php
            
            if (isset($_SESSION['u_id'])) {
                echo '
                    <form action="../assets/php/logout.php" method="POST">
                        <button type="submit" name="submit" class="logout-button">
                            <p>Log Out</p>
                        </button>
                    </form>
                ';
            } else {
                echo '
                    <form action="../assets/php/login_checker.php" method="POST" class="login-form">
                        <input type="text" name="username" placeholder="Username" class="login-form-username">
                        <input type="password" name="password" placeholder="Password" class="login-form-password">
                        <input type="submit" name="submit" value="LOGIN" class="login-form-submit">
                    </form>
                ';
            }
            
            ?>
        </div>
-->
        <div class="container">
            <section class="form-holder">
                <a href="../index.php" class="home-link">Home</a>
                <?php

                if (isset($_SESSION['u_id'])) {
                    echo '
                        <form action="../assets/php/logout.php" method="POST">
                            <button type="submit" name="submit" class="logout-button">
                                <p>Log Out</p>
                            </button>
                        </form>
                    ';
                } else {
                    echo '
                        <form action="../assets/php/login_checker.php" method="POST" class="login-form">
                            <input type="text" name="username" placeholder="Username" class="login-form-username">
                            <input type="password" name="password" placeholder="Password" class="login-form-password">
                            <input type="submit" name="submit" value="LOGIN" class="login-form-submit">
                        </form>
                    ';
                }

                ?>
            </section>
        </div>
    </body>
</html>