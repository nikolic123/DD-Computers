<?php
include("db_config.php");
if(isset($_POST["Naziv"])){
if(isset($_POST["Naziv"])){
	$Naziv=$_POST["Naziv"];
}

if(isset($_POST["Cena"])){
	$cena=$_POST["Cena"];
}

if(isset($_POST["Senzor"])){
	$senzor=$_POST["Senzor"];
}
if(isset($_POST["Rezolucija"])){
	$rezolucija=$_POST["Rezolucija"];
}
if(isset($_POST["Dizajn"])){
	$dizajn=$_POST["Dizajn"];
}
if(isset($_POST["Konekcija"])){
	$konekcija=$_POST["Konekcija"];
}
if(isset($_POST["Boja"])){
	$boja=$_POST["Boja"];
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
  if(empty($senzor)){
	header("Location: admin.php?empty=1");
	exit();
 }
  if(empty($rezolucija)){
	header("Location: admin.php?empty=1");
	exit();
 }
  if(empty($dizajn)){
	header("Location: admin.php?empty=1");
	exit();
 }
  if(empty($konekcija)){
	header("Location: admin.php?empty=1");
	exit();
 }
  if(empty($boja)){
	header("Location: admin.php?empty=1");
	exit();
 }
  if(empty($slika)){
	header("Location: admin.php?empty=1");
	exit();
 }




$id=$_POST["id"];


$sql="UPDATE misevi SET Naziv='$Naziv',Cena='$cena',Senzor='$senzor',Rezolucija='$rezolucija',Dizajn='$dizajn',Konekcija='$konekcija',Boja='$boja',slika='$slika' WHERE id='$id'
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
