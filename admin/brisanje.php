<?php
include("db_config.php");
$id=$_GET["id"];

$sql="DELETE FROM laptop WHERE id=$id";

if($connection->query($sql)==TRUE)
{
	echo "Delete succes!";
}
else
{
	echo "Cant delete!" .mysqli_error($connection);
}

$connection->close();




?>