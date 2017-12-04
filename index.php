<?php

session_start();

?>


<!DOCTYPE html>
<html lang="sv-se">
    <head>
        <meta charset="utf-8">
        <title>Lycksele Kampkollektiv Hem</title>
        <!-- Icon in title -->
        <link rel="icon" type="image/png" href="assets/images/icon/favicon-32x32.png" sizes="32x32">
        <!-- CSS -->
        <link rel="stylesheet" href="assets/lib/css/reset.css">
        <link rel="stylesheet" href="assets/lib/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/index.css">
    </head>
    
    <body>
        <div class="container">
            <nav class="global-nav">
                <section class="logo-placeholder">
                    <img src="assets/images/kampkollektiv_logo.png" alt="Lycksele Kampkollektiv Logo">
                </section>
                
                <section class="link-holder">
                    <ul class="link-list">
                        <li class="link active">
                            <a>Hem</a>
                        </li>
                        
                        <li class="link clickable-link">
                            <button class="dropdown-link clickable-link" onclick="ToggleDropDown();">
                                <p>Sporter</p>
                                <div class="icons">
                                    <i class="ddl-icon fa fa-plus" id="ddn-open"></i>
                                    <i class="ddl-icon fa fa-minus" id="ddn-close"></i>
                                </div>
                            </button>
                        </li>
                        
                        <ul class="ddn-link-list" id="ddn-list">
                            <li class="link clickable-link">
                                <a href="subpages/muay-thai.php">Muay Thai</a>
                            </li>
                                    
                            <li class="link clickable-link">
                                <a href="subpages/brasiliansk-jiu-jitsu.php">Brasiliansk Jiu Jitsu</a>
                            </li>
                            
                            <li class="link clickable-link">
                                <a href="subpages/bully-proof.php">Bully Proof</a>
                            </li>
                        </ul>
                        
                        <li class="link clickable-link">
                            <a href="subpages/galleri.php">Galleri</a>
                        </li>
                        
                        <li class="link clickable-link last-link">
                            <a href="subpages/om-oss.php">Om oss</a>
                        </li>
                    </ul>
                </section>
                
                <section class="dev-ref">
                    <p>Webpage developed</p>
                    <p>by Oskar Wahlberg</p>
                </section>
                
                <i class="fa fa-cog fa-lg admin-button" onclick="GoToLoginFromIndex();"></i>
            </nav>
            
            <main class="main-content">
                <section class="main-bg-holder">
                    <img src="assets/images/kampkollektiv_logo_B&W.png" alt="body-bg" class="main-bg">
                </section>
                
                <header class="page-header">
                    <h1>Lycksele Kampkollektiv</h1>
                    <div class="header-quote-container">
                        <p>"It's not how good you are,</p>
                        <p> it's how good you want to be."</p>
                        <p>~ Unknown</p>
                    </div>
                </header>
                
                <header class="page-sub-header">
                    <section class="image-slider-container">
                        <button class="arrow-holder" id="is-prev" onclick="ImageSwitch(-1);">
                            <i class="fa fa-chevron-left fa-4x is-left"></i>
                        </button>
                        
                        <div class="is-img-holder">
                            <?php
                            include_once("assets/php/index_get_images_big.php");
                            ?>
                        </div>
                        
                        <button class="arrow-holder" id="is-next" onclick="ImageSwitch(1);">
                            <i class="fa fa-chevron-right fa-4x is-right"></i>
                        </button>
                    </section>
                    
                    <!-- IMAGE SLIDER INDICATION START -->
                    <section class="image-slider-indication">
                        <?php
                        include_once "assets/php/index_get_images_small.php";
                        ?>
<!--
                        <img src="assets/images/image-slider/1.jpg" class="i_id" onclick="ImageIndicatorSwitch(0);">
                        <img src="assets/images/image-slider/2.jpg" class="i_id" onclick="ImageIndicatorSwitch(1);">
                        <img src="assets/images/image-slider/3.jpg" class="i_id" onclick="ImageIndicatorSwitch(2);">
-->
                    </section>
                    <!-- IMAGE SLIDER INDICATION END -->
                    
                    <h2>Kom och träna Muay Thai och Braziliansk Jiu Jitsu i Lycksele!</h2>
                </header>
            </main>
        </div>
        
        <script src="assets/js/main.js"></script>
        <script src="assets/js/index-image-slider.js"></script>
    </body>
</html>