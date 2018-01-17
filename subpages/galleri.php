<?php

session_start();

?>

<!DOCTYPE html>
<html lang="sv-se">
    <head>
        <meta charset="utf-8">
        <title>Lycksele Kampkollektiv</title>
        <!-- Icon in title -->
        <link rel="icon" type="image/png" href="../assets/images/icon/favicon-32x32.png" sizes="32x32">
        <!-- CSS -->
        <link rel="stylesheet" href="../assets/lib/css/reset.css">
        <link rel="stylesheet" href="../assets/lib/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/galleri.css">
    </head>
    
    <body>
        <div class="container">
            <nav class="global-nav">
                <section class="logo-placeholder">
                    <img src="../assets/images/kampkollektiv_logo.png" alt="Lycksele Kampkollektiv Logo" onclick="EscapeHatch();">
                </section>
                
                <section class="link-holder">
                    <ul class="link-list">
                        <li class="link clickable-link">
                            <a href="../index.php">Hem</a>
                        </li>
                        
                        <li class="link clickable-link">
                            <button class="dropdown-link" onclick="ToggleDropDown();">
                                <p>Sporter</p>
                                <div class="icons">
                                    <i class="ddl-icon fa fa-plus" id="ddn-open"></i>
                                    <i class="ddl-icon fa fa-minus" id="ddn-close"></i>
                                </div>
                            </button>
                        </li>
                        
                        <ul class="ddn-link-list" id="ddn-list">
                            <li class="link clickable-link">
                                <a href="muay-thai.php">Muay Thai</a>
                            </li>
                                    
                            <li class="link clickable-link">
                                <a href="brasiliansk-jiu-jitsu.php">Brasiliansk Jiu Jitsu</a>
                            </li>
                            
                            <li class="link clickable-link">
                                <a href="bully-proof.php">Bully Proof</a>
                            </li>
                        </ul>
                        
                        <li class="link active">
                            <a>Galleri</a>
                        </li>
                        
                        <li class="link clickable-link last-link">
                            <a href="om-oss.php">Om oss</a>
                        </li>
                    </ul>
                </section>
                
                <section class="dev-ref">
                    <p>Copyright © 2017-2018</p>
                    <p>Oskar Wahlberg</p>
                </section>
                
                <i class="fa fa-cog fa-lg admin-button" onclick="GoToLogin();"></i>
            </nav>
            
            <main class="main-content">
                <section class="main-bg-holder">
                    <img src="../assets/images/kampkollektiv_logo_B&W.png" alt="body-bg" class="main-bg">
                </section>
                
                <header class="page-header">
                    <h1>Galleri</h1>
                </header>
                
                <?php
                
                if(isset($_SESSION['u_id'])) {
                    echo '
                        <section class="upload-img-container">
                            <section class="form-holder">
                                <h4>Ladda up bild</h4>
                                <form action="../assets/php/upload-image.php" method="POST" enctype="multipart/form-data" class="upload-form">
                                    <input type="file" name="file" class="upload-file">
                                    <input type="submit" value="Ladda Up" name="upload_submit" class="upload-submit">
                                </form>
                            </section>
                        </section>
                        ';
                }
                
                ?>
                
                <section class="img-grid">
                    <?php
                    include_once '../assets/php/galleri_get_images.php';
                    ?>
                </section>
                
                <section class="modal-image-container" id="mih" onclick="CloseImg();">
                    <i class="close-modal fa fa-close" onclick="CloseImg();"></i>
                    <?php
                    include_once '../assets/php/galleri_get_modal_images.php'
                    ?>
                </section>
            </main>
        </div>
        
        <script src="../assets/js/main.js"></script>
        <script src="../assets/js/modal_image.js"></script>
    </body>
</html>