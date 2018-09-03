<?php
session_start();

if (!isset($_SESSION['userSessionn'])) {
	header("Location: Placanje.php");
} else if (isset($_SESSION['userSessionn'])!="") {
	header("Location: Unos.php");
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['userSessionn']);
	header("Location: Placanje.php");
}