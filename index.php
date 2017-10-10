<?php

session_start();

?>


<!DOCTYPE html>
<html lang="sv-se">
    <head>
        <meta charset="utf-8">
        <title>Lycksele Kampkollektiv Hem</title>
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
                            <a>ITEM #3</a>
                        </li>
                        
                        <li class="link clickable-link last-link">
                            <a>ITEM #4</a>
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
                        <button class="arrow-holder" id="is-prev">
                            <i class="fa fa-chevron-left fa-4x is-left"></i>
                        </button>
                        
                        <div class="is-img-holder">
                            <img src="assets/images/image-slider/1.jpg">
                        </div>
                        
                        <button class="arrow-holder" id="is-next">
                            <i class="fa fa-chevron-right fa-4x is-right"></i>
                        </button>
                    </section>
                    
                    <h2>Kom och träna Muay Thai och Braziliansk Jiu Jitsu i Lycksele!</h2>
                </header>
            </main>
        </div>
        
        <script src="assets/js/main.js"></script>
    </body>
</html>