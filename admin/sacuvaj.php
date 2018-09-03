<?php
include("db_config.php");
if(isset($_POST["Pun_naziv"])){
if(isset($_POST["Pun_naziv"])){
	$Pun_naziv=$_POST["Pun_naziv"];
}

if(isset($_POST["Cena"])){
	$cena=$_POST["Cena"];
}

if(isset($_POST["Ekran"])){
	$ekran=$_POST["Ekran"];
}
if(isset($_POST["Dijagonala_ekrana"])){
	$Dijagonala_ekrana=$_POST["Dijagonala_ekrana"];
}
if(isset($_POST["Rezolucija"])){
	$Rezolucija=$_POST["Rezolucija"];
}
if(isset($_POST["Procesor"])){
	$Procesor=$_POST["Procesor"];
}
if(isset($_POST["Cipset"])){
	$Cipset=$_POST["Cipset"];
}
if(isset($_POST["Graficka_kartica"])){
	$Graficka_kartica=$_POST["Graficka_kartica"];
}
if(isset($_POST["Memorija"])){
	$Memorija=$_POST["Memorija"];
}
if(isset($_POST["Hard_disk"])){
	$Hard_disk=$_POST["Hard_disk"];
}
if(isset($_POST["Tip_hard_diska"])){
	$Tip_hard_diska=$_POST["Tip_hard_diska"];
}
if(isset($_POST["Opticki_uredjaj"])){
	$Opticki_uredjaj=$_POST["Opticki_uredjaj"];
}
if(isset($_POST["Web_kamera"])){
	$Web_kamera=$_POST["Web_kamera"];
}
if(isset($_POST["Mrezna_kartica"])){
	$Mrezna_kartica=$_POST["Mrezna_kartica"];
}
if(isset($_POST["Bluetooth"])){
	$Bluetooth=$_POST["Bluetooth"];
}
if(isset($_POST["Citac_kartica"])){
	$Citac_kartica=$_POST["Citac_kartica"];
}
if(isset($_POST["Operativni_sistem"])){
	$Operativni_sistem=$_POST["Operativni_sistem"];
}
if(isset($_POST["Boja"])){
	$Boja=$_POST["Boja"];
}
if(isset($_POST["Baterija"])){
	$Baterija=$_POST["Baterija"];
}
if(isset($_POST["slika"])){
	$slika=$_POST["slika"];
}

if(empty($Pun_naziv)){
 	header("Location: admin.php?empty=1");
	exit();
}
 if(empty($cena)){
	header("Location: admin.php?empty=1");
	exit();
 }
if(empty($ekran)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Dijagonala_ekrana)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Rezolucija)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Procesor)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Cipset)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Graficka_kartica)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Memorija)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Hard_disk)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Tip_hard_diska)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Opticki_uredjaj)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Web_kamera)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Mrezna_kartica)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Bluetooth)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Citac_kartica)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Operativni_sistem)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Boja)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($Baterija)){
	header("Location: admin.php?empty=1");
	exit();
}
if(empty($slika)){
	header("Location: admin.php?empty=1");
	exit();
}




$id=$_POST["id"];


$sql="UPDATE laptop SET Pun_naziv='$Pun_naziv',Cena='$cena',Ekran='$ekran',Dijagonala_ekrana='$Dijagonala_ekrana',Rezolucija='$Rezolucija',Procesor='$Procesor',Cipset='$Cipset',Graficka_kartica='$Graficka_kartica',Memorija='$Memorija',Hard_disk='$Hard_disk',Tip_hard_diska='$Tip_hard_diska',Opticki_uredjaj='$Opticki_uredjaj',Web_kamera='$Web_kamera',Mrezna_kartica='$Mrezna_kartica',Bluetooth='$Bluetooth',Citac_kartica='$Citac_kartica',Operativni_sistem='$Operativni_sistem',Boja='$Boja',Baterija='$Baterija',slika='$slika' WHERE id='$id'
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
