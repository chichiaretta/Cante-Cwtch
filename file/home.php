<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../index.html');
	}
	if($_SESSION["tipologia"]=="cliente"){
		header('location: home_clienti.php');
	}
	if($_SESSION["tipologia"]=="dipendente"){
		header('location: home_dipendenti.php');
	}
?>