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
if(isset($_POST["grupa"])){
	$grupa=$_POST["grupa"];
}


if(empty($Pun_naziv)){
	header("Location: novo.php?empty=1");
 	exit();
 }
if(empty($cena)) {
	header("Location: novo.php?empty=1");
	exit();}
if (empty($ekran)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Dijagonala_ekrana)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Rezolucija)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Procesor)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Cipset)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Graficka_kartica)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Memorija)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Hard_disk)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Tip_hard_diska)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Opticki_uredjaj)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Web_kamera)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Mrezna_kartica)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Bluetooth)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Citac_kartica)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Operativni_sistem)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Boja)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($Baterija)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($slika)) {
	header("Location: novo.php?empty=1");
	exit();
}
if (empty($grupa)) {
	header("Location: novo.php?empty=1");
	exit();
}
		

		$sql = "INSERT INTO laptop(Pun_naziv,Cena,Ekran,Dijagonala_ekrana,Rezolucija,Procesor,Cipset,Graficka_kartica,Memorija,Hard_disk,Tip_hard_diska,Opticki_uredjaj,Web_kamera,Mrezna_kartica,Bluetooth,Citac_kartica,Operativni_sistem,Boja,Baterija,slika,grupa) VALUES ('$Pun_naziv','$cena','$ekran','$Dijagonala_ekrana','$Rezolucija','$Procesor','$Cipset','$Graficka_kartica','$Memorija','$Hard_disk','$Tip_hard_diska','$Opticki_uredjaj','$Web_kamera','$Mrezna_kartica','$Bluetooth','$Citac_kartica','$Operativni_sistem','$Boja','$Baterija','$slika','$grupa')
";
		if ($connection->query($sql) == TRUE) {
			header("Location: novo.php?succes=1");
		} else {
			header("Location: novo.php?error=1");
		}
	}
