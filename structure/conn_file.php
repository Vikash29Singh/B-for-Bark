<?php
   $conn=mysqli_connect("localhost", "root", "","disease_recognition_system") OR die("Could not connect with server!!");
    if($conn->connect_errno > 0){
        die('Unable to connect to database [' . $db->connect_error . ']');
    }
?>