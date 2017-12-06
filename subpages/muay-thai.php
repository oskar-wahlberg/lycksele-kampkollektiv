<?php

session_start();

?>

<!DOCTYPE html>
<html lang="sv-se">
    <head>
        <meta charset="utf-8">
        <title>Lycksele Kampkollektiv Muay Thai</title>
        <!-- Icon in title -->
        <link rel="icon" type="image/png" href="../assets/images/icon/favicon-32x32.png" sizes="32x32">
        <!-- CSS -->
        <link rel="stylesheet" href="../assets/lib/css/reset.css">
        <link rel="stylesheet" href="../assets/lib/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/muay-thai.css">
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
                            <button class="dropdown-link clickable-link" onclick="ToggleDropDown();">
                                <p>Sporter</p>
                                <div class="icons">
                                    <i class="ddl-icon fa fa-plus" id="ddn-open"></i>
                                    <i class="ddl-icon fa fa-minus" id="ddn-close"></i>
                                </div>
                            </button>
                        </li>
                        
                        <ul class="ddn-link-list" id="ddn-list">
                            <li class="link active">
                                <a>Muay Thai</a>
                            </li>
                                    
                            <li class="link clickable-link">
                                <a href="brasiliansk-jiu-jitsu.php">Brasiliansk Jiu Jitsu</a>
                            </li>
                            
                            <li class="link clickable-link">
                                <a href="bully-proof.php">Bully Proof</a>
                            </li>
                        </ul>
                        
                        <li class="link clickable-link">
                            <a href="galleri.php">Galleri</a>
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
                    <img src="../assets/images/muay-thai-bg.png" alt="body-bg" class="main-bg">
                </section>
                
                <section class="content-box">
                    <h1>Muay Thai</h1>
                    <p>Thaiboxning (Muay Thai på thailändska) är en kampsport från Thailand där man tävlar i fullkontakt.</p>
                    <p>Sporten i sig är hård, men fortfarande en enkel tävlingssport med rötterna i Thailand.</p>
                    <p>Kampsporten har sitt ursprung från den forntida thailändska arméns närstridssystem, kallat Muay Boran.</p>
                    <p class="last-p">Självförsvar, vapen och så vidare har skalats bort under årtal av hårt urval då stilen har optimerats för ringen och de tävlingsregler som gäller idag.</p>
                </section>
            </main>
        </div>
        
        <script src="../assets/js/main.js"></script>
    </body>
</html>