<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "Tour&Travel";

try {
    $con = mysqli_connect("$host","$username","$password","$database");

} catch (\Throwable $th) {
    echo "<script> window.location.href='../errors/dberror.php';</script>";
}



?>