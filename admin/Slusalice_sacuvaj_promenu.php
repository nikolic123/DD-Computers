<?php
include("db_config.php");
if(isset($_POST["Naziv"])){
if(isset($_POST["Naziv"])){
	$Naziv=$_POST["Naziv"];
}

if(isset($_POST["Cena"])){
	$cena=$_POST["Cena"];
}
if(isset($_POST["Sistem"])){
	$sistem=$_POST["Sistem"];
}
if(isset($_POST["Mikrofon"])){
	$mikrofon=$_POST["Mikrofon"];
}
if(isset($_POST["Frekventni_odziv"])){
	$frekventni_odziv=$_POST["Frekventni_odziv"];
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
if(empty($sistem)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($mikrofon)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($frekventni_odziv)){
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


$sql="UPDATE slusalice SET Naziv='$Naziv',Cena='$cena',Sistem='$sistem',Mikrofon='$mikrofon',Frekventni_odziv='$frekventni_odziv',Boja='$boja',slika='$slika' WHERE id='$id'
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
