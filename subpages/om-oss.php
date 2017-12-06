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
        <link rel="stylesheet" href="../assets/css/om-oss.css">
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
                        
                        <li class="link clickable-link">
                            <a href="galleri.php">Galleri</a>
                        </li>
                        
                        <li class="link active last-link">
                            <a>Om oss</a>
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
                
                <section class="page-header">
                    <h1>Om Oss</h1>
                </section>
                
                <section class="page-content">
                    <p>Hösten 2009 började några kampsportsintresserade lyckselebor träffas och träna Brazilian Jiu-Jitsu, BJJ. Gruppen utökades och i januari 2010 blev man officiellt en förening. Allteftersom växte även intresset för MuayThai – thaiboxning och nu bedrivs träning och tävling inom båda sporterna.</p>
                    <p> Föreningen är medlem i Svenska Budo &amp; Kampsportsförbundet och Sveriges Riksidrottsförbund. Vi är även knutna till Gracie Barra som är en världens största BJJ-skolor.</p>
                    <p>Sommaren 2014 började vi även hålla fyspass för de som är intresserad att röra på kroppen och Bully Proof för barnen.</p>
                    <p class="last-p">Föreningen har en styrelse som sammanträder minst en gång/år.</p>
                </section>
            </main>
        </div>
        
        <script src="../assets/js/main.js"></script>
    </body>
</html>