<?php
include("db_config.php");
if(isset($_POST["Proizvodjac"])){
if(isset($_POST["Proizvodjac"])){
	$imeArtikla=$_POST["Proizvodjac"];
}

if(isset($_POST["Cena"])){
	$cena=$_POST["Cena"];
}
if(isset($_POST["ime"])){
	$ime=$_POST["ime"];
}
if(isset($_POST["Telefon"])){
	$Telefon=$_POST["Telefon"];
}
if(isset($_POST["Adresa"])){
	$Adresa=$_POST["Adresa"];
}



 if(empty($imeArtikla)){
 	header("Location: Unos.php?empty=1");
	exit();

 }
 if(empty($cena)){
	header("Location: Unos.php?empty=1");
	exit();
 }


 







$sql = "INSERT INTO narudzba(imeArtikla,Cena,ime,Telefon,Adresa)
 VALUES ('$imeArtikla','$cena','$ime','$Telefon','$Adresa')
";
if ($connection->query($sql) == TRUE) {
			header("Location: Unos.php?succes=1");
		} else {
			header("Location: Unos.php?error=1");
		}

}
