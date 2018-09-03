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
  if(empty($grupa)){
	header("Location: admin.php?empty=1");
	exit();
 }

		

$sql = "INSERT INTO torbe (Naziv,Cena,Veličina,Razno,slika,grupa) VALUES ('$Naziv','$cena','$veličina','$Razno','$slika','$grupa')
";
		if ($connection->query($sql) == TRUE) {
			header("Location: Torbe_unos.php?succes=1");
		} else {
			header("Location: Torbe_unos.php?error=1");
		}
	}
