<?php

session_start();

// Check that the user clicked submit on prev page

if(isset($_POST['upload_submit'])) {
    
    // Check that the user is logged in
    if(isset($_SESSION['u_id'])) {
        
        // User is logged in, continue
        
        // Include database connector
        include '../includes/dbh-inc.php';
        
        // Get file
        $file = $_FILES['file'];
        
        // File info
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        // Allowed filetypes
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            
            // Filetype allowed, continue
            
            // Check if there was any errors uploading file
            if($fileError === 0) {
                // No errors. Continue
                
                // Get image content
                $imagetmp = addslashes (file_get_contents($_FILES['file']['tmp_name']));
                
                // Upload image
                $sql = "INSERT INTO images(image) VALUES ('$imagetmp')";
                $result = mysqli_query($conn, $sql);
                if($result) {
                    
                    // Image upload success
                    header("Location: ../../subpages/galleri.php?upload-success");
                    exit();
                } else {
                    
                    // Something went wrong
                    header("Location: ../../subpages/galleri.php?error=upload-failed");
                    exit();
                }
            } else {
                // An error occured, cancel
                header("Location: ../../subpages/galleri.php?error");
                exit();
            }
        } else {
            
            // Filetype not allowed
            header("Location: ../../subpages/galleri.php?error=filetype");
            exit();
        }
    } else {
        
        // User is not logged in cancel
        header("Location: ../../subpages/galleri.php?error=access-denied");
        exit();
    }
} else {
    
    // User did not click submit, return
    header("Location: ../../subpages/galleri.php");
    exit();
}