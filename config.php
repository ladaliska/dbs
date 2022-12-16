<?php
$svrname = "localhost:3306";
$uname = "root";
$password = "";
$dbname = "login";
    $db = mysqli_connect($svrname, $uname, $password, $dbname);

    if($db === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>