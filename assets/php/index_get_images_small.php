<?php

// Include database connector
include 'assets/includes/dbh-inc.php';

// Get number of images
$sql = "SELECT * FROM images WHERE amount_check='1'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
// IF there is 3 images stored in the database, then the previous function will give out the number 3
// Same if 4, it will give out 4

// A for loop for creating the elements of the images.
for ($i = 1; $i <= $resultCheck; $i++) {
    $x = $i - 1;
    $img = "SELECT * FROM images WHERE image_id=$i";
    $sth = $conn->query($img);
    $result=mysqli_fetch_array($sth);
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'" class="i_id" onclick="ImageIndicatorSwitch(' . $x . ');"/>';
}

?>