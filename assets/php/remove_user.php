<?php

session_start();

// Check if the user has clicked the remove user button fomr the prev page.

if(isset($_POST['r_user_submit'])) {
    
    // Check if the user is logged in
    if(isset($_SESSION['u_id'])) {
        
        // The user is logged in. Include database connector.
        include '../includes/dbh-inc.php';
        
        // Make sure that the input is not any form of code that could harm the page.
        $r_username = mysqli_real_escape_string($conn, $_POST['r_username']);
        $r_password = mysqli_real_escape_string($conn, $_POST['r_password']);
        
        // Check if any of the inputs are empty.
        if(empty($r_username) || empty($r_username)) {
            // The fields are empty.
            header("Location: ../../subpages/login.php?error=field-empty");
            exit();
        } else {
            // Check if user exists.
            $sql = "SELECT * FROM users WHERE user_username='$r_username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
                // User exists
                
                // Fetch user data
                if($row = mysqli_fetch_assoc($result)) {
                    $ru_id = $row['user_id'];
                    
                    // Check if current user is the user to be removed
                    if($_SESSION['u_id'] == $row['user_id']) {
                        // Log out user before removing
                        session_unset();
                        session_destroy();
                        $sql = "DELETE FROM users WHERE user_id='$ru_id'";
                        mysqli_query($conn, $sql);
                        header("Location: ../../subpages/login.php?remove_user=success");
                        exit();
                    } else {
                        // Remove user, stay logged in
                        $sql = "DELETE FROM users WHERE user_id='$ru_id'";
                        mysqli_query($conn, $sql);
                        header("Location: ../../subpages/login.php?remove_user=success");
                        exit();
                    }
                } else {
                    // User fetch failed
                    header("Location: ../../subpages/login.php?remove_user=failed");
                    exit();
                }
            } else {
                // User does not exist
                header("Location: ../../subpages/login.php?remove_user_error=user-does-not-exist");
                exit();
            }
        }
    } else {
        
        // User is not logged in. Cancel remove user.
        header("Location: ../../index.php?remove_user=error_access-denied");
        exit();
    }
} else {
    
    // The user did not click the button on the prev page. Cancel remove user.
    header("Location: ../../index.php?remove_user=error_access-denied");
    exit();
}