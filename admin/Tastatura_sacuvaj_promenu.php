<?php
include("db_config.php");
if(isset($_POST["Naziv"])){
if(isset($_POST["Naziv"])){
	$Naziv=$_POST["Naziv"];
}

if(isset($_POST["Cena"])){
	$cena=$_POST["Cena"];
}
if(isset($_POST["Numericki_deo"])){
	$Numericki_deo=$_POST["Numericki_deo"];
}
if(isset($_POST["mis"])){
	$mis=$_POST["mis"];
}
if(isset($_POST["konekcija"])){
	$konekcija=$_POST["konekcija"];
}
if(isset($_POST["dimenzije"])){
	$dimenzije=$_POST["dimenzije"];
}
if(isset($_POST["Boje"])){
	$boja=$_POST["Boje"];
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
if(empty($Numericki_deo)){
	header("Location: admin.php?empty=1");
	exit();
}
 if(empty($mis)){
	header("Location: admin.php?empty=1");
	exit();
 }
  if(empty($konekcija)){
	header("Location: admin.php?empty=1");
	exit();
 }
  if(empty($dimenzije)){
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


$sql="UPDATE tastature SET Naziv='$Naziv',Cena='$cena',Numericki_deo='$Numericki_deo',mis='$mis',konekcija='$konekcija',dimenzije='$dimenzije',Boje='$boja',slika='$slika' WHERE id='$id'
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
