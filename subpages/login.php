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
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../assets/lib/css/font-awesome-4.7.0/css/font-awesome.min.css">
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
                        <section class="action_holder">
                            <p class="add_user_link" onclick="ToggleAddUserField();">Lägg till användare...</p>

                            <section class="add_user_form_holder" id="AddUserField">
                                <i class="fa fa-close fa-3x close_add_user_field" onclick="ToggleAddUserField();"></i>
                                <form action="../assets/php/add_user.php" method="POST">
                                    <input type="text" name="new_username" placeholder="Username" class="add_user_form_username">
                                    <input type="password" name="new_password" placeholder="Password" class="add_user_form_password">
                                    <input type="submit" name="new_user_submit" value="ADD USER" class="add_user_form_submit">
                                </form>
                            </section>
                        </section>
                        
                        <section class="action_holder">
                            <p class="remove_user_link" onclick="ToggleRemoveUserField();">Ta bort användare...</p>
                            
                            <section class="remove_user_form_holder" id="RemoveUserField">
                                <i class="fa fa-close fa-3x close_add_user_field" onclick="ToggleRemoveUserField();"></i>
                                <form action="../assets/php/remove_user.php" method="POST">
                                    <input type="text" name="r_username" placeholder="Username" class="remove_user_form_username">
                                    <input type="password" name="r_password" placeholder="Password" class="remove_user_form_password">
                                    <input type="submit" name="r_user_submit" value="REMOVE USER" class="remove_user_form_submit">
                                </form>
                            </section>
                        </section>
                    
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
        
        <?php
        
        if (isset($_SESSION['u_id'])) {
            echo '
                <script src="../assets/js/user_functions.js"></script>
            ';
        }
        
        ?>
    </body>
</html>