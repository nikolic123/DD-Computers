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
if(isset($_POST["grupa"])){
	$grupa=$_POST["grupa"];
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
  if(empty($grupa)){
	header("Location: admin.php?empty=1");
	exit();
 }

		

$sql = "INSERT INTO tastature (Naziv,Cena,Numericki_deo,mis,konekcija,dimenzije,Boje,slika,grupa) VALUES ('$Naziv','$cena','$Numericki_deo','$mis','$konekcija','$dimenzije','$Boje','$slika','$grupa')
";
		if ($connection->query($sql) == TRUE) {
			header("Location: Tastatura_unos.php?succes=1");
		} else {
			header("Location: Tastatura_unos.php?error=1");
		}
	}
