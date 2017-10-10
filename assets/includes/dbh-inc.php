<?php

/*
 * This file should be included on each webpage in order
 * to connect to the database.
 *
 * Only requiered if you need to connect to the database.
 */

// The server name, currently I am using XAMPP, which is a local server, so I need to use 'localhost' as my server name, although if it's a hosted website, I would user that IP/ADRESS. This can be found on the hosting control panel.
$dbServername = "localhost";

// XAMPP needs the username as 'root'. This is the default username for XAMPP and can be changed manually within the control panel if you want to.
$dbUsername = "root";

// IF the database has a password, it needs to be inserted here.
$dbPassword = "";

// The name of the database used.
$dbName = "lycksele_kampkollektiv";



// Activate the connection and store it in a variable.
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);