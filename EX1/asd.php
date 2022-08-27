<?php

// Create connection
$conn = mysqli_connect("127.0.0.1","root","","test","3306");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);


?>
