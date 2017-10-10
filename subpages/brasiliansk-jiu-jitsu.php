<?php

session_start();

?>

<!DOCTYPE html>
<html lang="sv-se">
    <head>
        <meta charset="utf-8">
        <title>Lycksele Kampkollektiv Brasiliansk Jiu Jitsu</title>
        <link rel="stylesheet" href="../assets/lib/css/reset.css">
        <link rel="stylesheet" href="../assets/lib/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/brasiliansk-jiu-jitsu.css">
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
                            <li class="link clickable-link">
                                <a href="muay-thai.php">Muay Thai</a>
                            </li>
                                    
                            <li class="link active">
                                <a>Brasiliansk Jiu Jitsu</a>
                            </li>
                            
                            <li class="link clickable-link">
                                <a href="bully-proof.php">Bully Proof</a>
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
                
                <i class="fa fa-cog fa-lg admin-button" onclick="GoToLogin();"></i>
            </nav>
            
            <main class="main-content">
                <section class="main-bg-holder">
                    <img src="../assets/images/jiu-jitsu-bg.png" alt="body-bg" class="main-bg">
                </section>
                
                <section class="content-box">
                    <h1>Brasiliansk Jiu Jitsu</h1>
                    <p>Brasiliansk jujutsu (BJJ) är en brasiliansk kampsport utvecklad ur judo som i sin tur utvecklats av Jigoro Kano ur den traditionella japanska jujutsun.</p>
                    <p>Brasiliansk jujutsu kallas ibland även för Gracie Jiu-Jitsu, eller BJJ.</p>
                    <p>BJJ består till största delen av markkamp, det vill säga brottning med lås och strypningar (submissions), eller newaza, men inkluderar även nedtagningar.</p>
                    <p>Stilen innehåller inga typer av slag eller sparkar, även om den effektivt kan användas i kombination med dessa.</p>
                    <p>Väl på marken handlar det om att få en fördelaktig kontrollposition på din motståndare, varifrån du kan genomföra ett ledlås eller strypning.</p>
                    <p class="last-p">I ett underläge försöker du att återta en kontrollposition eller nå en mer neutral position. Vanliga positioner är side control, mount, guard och back mount.</p>
                </section>
            </main>
        </div>
        
        <script src="../assets/js/main.js"></script>
    </body>
</html>