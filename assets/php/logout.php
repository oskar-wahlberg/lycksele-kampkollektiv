<?php

// Basically what happends here is that all of the variables in the current session will be unset so that the browser won't save anything, then we destroy the running session to make sure that anyone can get acces to the session after it's closed. After the logout process is done, the user is sent back to the first page.
if (isset($_POST['submit'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../../index.php");
    exit();
}