<?php

session_start();

?>

<!DOCTYPE html>
<html lang="sv-se">
    <head>
        <meta charset="utf-8">
        <title>Lycksele Kampkollektiv Bully Proof</title>
        <!-- Icon in title -->
        <link rel="icon" type="image/png" href="../assets/images/icon/favicon-32x32.png" sizes="32x32">
        <!-- CSS -->
        <link rel="stylesheet" href="../assets/lib/css/reset.css">
        <link rel="stylesheet" href="../assets/lib/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/bully-proof.css">
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
                            
                            <li class="link active">
                                <a>Bully Proof</a>
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
                    <img src="../assets/images/kampkollektiv_logo_B&W.png" alt="body-bg" class="main-bg">
                </section>
                
                <section class="content-box">
                    <h1>Bully Proof</h1>
                    <p>Detta handlar om att ha kul!</p>
                    <p>En stor fråga för barnen i dag är förekomsten av mobbning. Jiu-Jitsu är en stor kampsport, inte bara självförsvar i mobbningsfall , men att bygga upp förtroendet för att undvika den helt och hållet.</p>
                    <p>Bully Proof  och Gracie Barra har utformat en läroplan som delas upp i tre steg:</p>
                    <p class="p-li">1. Gå iväg</p>
                    <p class="p-li">2. Stå upp för dig själv</p>
                    <p class="p-li">3. Skydda dig</p>
                    <p>Vi tränar tillsammans och lär oss koordination, kondition samt att träna tillsammans med andra för att bygga självförtroende!</p>
                    <p>Vi kommer träna kullerbyttor och förflyttningar men även på att ta sig ur enklare fasthållningar.</p>
                    <p>Fokus ligger på kroppskännedom men framförallt att ha roligt!</p>
                    <p>Vi samlas och tränar ca: en timme i veckan.</p>
                    <p class="last-p">Obs! Åldersgräns 7år!</p>
                </section>
            </main>
        </div>
        
        <script src="../assets/js/main.js"></script>
    </body>
</html>