<?php
include("db_config.php");
if(isset($_POST["Naziv"])){
if(isset($_POST["Naziv"])){
	$Naziv=$_POST["Naziv"];
}

if(isset($_POST["Cena"])){
	$cena=$_POST["Cena"];
}

if(isset($_POST["Razno"])){
	$Razno=$_POST["Razno"];
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
if(empty($Razno)){
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
		

$sql = "INSERT INTO punjaci (Naziv,Cena,Razno,slika,grupa) VALUES ('$Naziv','$cena','$Razno','$slika','$grupa')
";
		if ($connection->query($sql) == TRUE) {
			header("Location: Punjac_unos.php?succes=1");
		} else {
			header("Location: Punjac_unos.php?error=1");
		}
	}
