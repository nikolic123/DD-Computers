<?php
include("db_config.php");
if(isset($_POST["Naziv"])){
if(isset($_POST["Naziv"])){
	$Naziv=$_POST["Naziv"];
}

if(isset($_POST["Cena"])){
	$cena=$_POST["Cena"];
}
if(isset($_POST["Veličina"])){
	$veličina=$_POST["Veličina"];
}

if(isset($_POST["Razno"])){
	$razno=$_POST["Razno"];
}

if(isset($_POST["slika"])){
	$slika=$_POST["slika"];
}

if(empty($Naziv)){
 	header("Location: admin.php?empty=1");
	exit();
}
 if(empty($cena)){
	header("Location: admin.php?empty=1");
	exit();
 }
  if(empty($veličina)){
	header("Location: admin.php?empty=1");
	exit();
 }
if(empty($razno)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($slika)){
	header("Location: admin.php?empty=1");
	exit();
}




$id=$_POST["id"];


$sql="UPDATE torbe SET Naziv='$Naziv',Cena='$cena',Veličina='$veličina',Razno='$razno',slika='$slika' WHERE id='$id'
";

if($connection->query($sql)==TRUE)
{
	header("Location: admin.php?succes=2");
}
else
{
	echo mysqli_error($connection);
}
}
