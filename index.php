<?php

$page = $_GET['page'];

/*
if ($page=="accueil"){
	
}else {
	
}*/
switch ($page) {
	case 'accueil':
		include "Vue/home.php";
		break;
	case 'login':
		include "Controler/login.php";
		break;
	case 'inscriptionUser':
		include "Controler/inscription.php";
		break;
	case "inscription":
		include "Vue/home.php";
		break;
	default:
		include "Vue/home.php";
		break;
}

?>