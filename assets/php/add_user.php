<?php

session_start();

// Check if the user has clicked the add user button from the prev page so that no one can access this code without actually inserting information in the login form.

if(isset($_POST['new_user_submit'])) {
    
    // Check if the user is logged in
    if(isset($_SESSION['u_id'])) {
        
        // The user is logged in, continue adding user.
        
        // Include database connector
        include '../includes/dbh-inc.php';
        
        // Make sure that no one can type in any code to the webpage and mess around with the database
        $new_username = mysqli_real_escape_string($conn, $_POST['new_username']);
        $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
        
        // Check that all fields are filled in.
        if(empty($new_username) || empty($new_password)) {
            // The fields are empty.
            header("Location: ../../subpages/login.php?error=field-empty");
            exit();
        } else {
            
            // All info is filled in
            
            // Check if the username already exists in the database.
            $sql = "SELECT * FROM users WHERE user_username='$new_username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
                // The username already exists.
                
                header("Location: ../../subpages/login.php?add_user_error=username-already-taken");
                exit();
            } else {
                
                // Everything checks up, insert user to database.
                $sql = "INSERT INTO users (user_username, user_password) VALUES ('$new_username', '$new_password')";
                if(mysqli_query($conn, $sql)) {
                    
                    // User insertion success
                    header("Location: ../../subpages/login.php?add_user=success");
                    exit();
                } else {
                    
                    // Something went wrong with the insertion
                    header("Location: ../../subpages/login.php?add_user=error-inserting");
                    exit();
                }
            }
        }
    } else {
        
        // The user is not logged in, return to index.
        header("Location: ../../index.php?add_user=error_access-denied");
        exit();
    }
} else {
    
    // Take the user back to the index page and give an error message in the url.
    header("Location: ../../index.php?add_user=error_access-denied");
    exit();
}