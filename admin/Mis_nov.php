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
  if(empty($grupa)){
	header("Location: admin.php?empty=1");
	exit();
 }


		

$sql = "INSERT INTO misevi (Naziv,Cena,Senzor,Rezolucija,Dizajn,Konekcija,Boja,slika,grupa) VALUES ('$Naziv','$cena','$senzor','$rezolucija','$dizajn','$konekcija','$boja','$slika','$grupa')
";
		if ($connection->query($sql) == TRUE) {
			header("Location: Mis_unos.php?succes=1");
		} else {
			header("Location: Mis_unos.php?error=1");
		}
	}
