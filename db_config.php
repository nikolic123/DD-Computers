<?php
$host="localhost";
$user="root";
$pass="";
$database="dd_computers";

$connection= mysqli_connect("$host","$user","$pass","$database") or die(mysqli_error($connection));

mysqli_query($connection,"SET NAMES utf8") or die (mysqli_error($connection));
mysqli_query($connection,"SET CHARACTER SET utf8") or die (mysqli_error($connection));
mysqli_query($connection,"SET COLLATION_CONNECTION='utf8_general_ci'") or die (mysqli_error($connection));
?>