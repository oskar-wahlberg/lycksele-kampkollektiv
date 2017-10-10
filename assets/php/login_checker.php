<?php

// Here I'm starting a session to keep track of the login status between pages, so that the user can keep being logged in even if the user goes to another page, as long as the user doesn't close the webpage completely, the user will stay logged in, unless the user logs out ofcourse.

session_start();

// Check if the user has clicked the log in button from the prev page so that no one can access this code without actually inserting information in the login form.

if (isset($_POST['submit'])) {
    
    // Include database connector
    include '../includes/dbh-inc.php';
    
    // Make sure that no one can type in any code to the webpage and mess around with the database
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Error handlers
    // Check if inputs are empty
    if (empty($username) || empty($password)) {
        
        header("Location: ../../subpages/login.php?login=empty");
        exit();
    } else {
        
        // Check if the username exists withing the database.
        $sql = "SELECT * FROM users WHERE user_username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            
            header("Location: ../../subpages/login.php?login=error");
            exit();
        } else {
            
            if ($row = mysqli_fetch_assoc($result)) {
                
                // Check if the password also is correct.
                if ($password != $row['user_password']) {
                    
                    header("Location: ../../subpages/login.php?login=error");
                    exit();
                } else if ($password == $row['user_password']) {
                    
                    // All of the login information is correct, time to log in the user.
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_username'] = $row['user_username'];
                    $_SESSION['u_password'] = $row['user_password'];
                    header("Location: ../../index.php?login=success");
                    exit();
                }
            }
        }
    }
} else {
    
    // Take the user back to the index page and give and error message in the url.
    header("Location: ../../index.php?login=error");
    exit();
}