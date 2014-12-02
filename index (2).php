<?php
// on demarre la session
	session_start();
// On recupere la valeur de la page envoyé par le GET
$page = (isset($_GET['page'])==true)?$_GET['page']:''; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>IT Share Club: Tchatche</title>
<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<img src="images/ban.png">
			<!--<h1><a href="#">TCHATCHE</a></h1>-->
		</div>
		<div id="menu">
			<ul>
				<li class="first current_page_item"><a href="index.php?page=accueil">Accueil</a></li>
				<li><a href="index.php?page=tchatche">Chat</a></li>
				<li><a href="index.php?page=photos">Photos</a></li>
				<li><a href="index.php?page=apropos">A Propos</a></li>
				<li class="last"><a href="index.php?page=contact">Contact</a></li>
			</ul>
		</div>
	</div>
	<div id="page">
		<div id="content">
			<?php  // insertion du contenu en fonction du menu selectionné
				switch($page)
				{											 
					case 'contact'         : require("vues/contact.php");
					 break; 													 
					case 'tchatche'       : require("vues/tchatche.php");
					 break; 													 
					case 'photos'    : require("vues/photos.php");
					 break; 
					case 'apropos'    : require("vues/apropos.php");
					 break;
					default            : require("vues/accueil.php"); 
					 break; 
				}
			?>
		</div>
		<div id="sidebar">
			<h3>Quisque euismod</h3>
			<ul class="list">
				<li class="first"><a href="#">Vulputate lacus leo turpis</a></li>
				<li><a href="#">Nisl nascetur ornare vitae</a></li>
				<li><a href="#">Rutrum elit ac facilisis</a></li>
				<li><a href="#">Libero fusce lectus</a></li>
				<li class="last"><a href="#">Elementum rutrum orci</a></li>
			</ul>
			<h3>Phasellus elit</h3>
			<p>
				Pharetra parturient venenatis eleifend pretium. Tempus faucibus lacus mi et imperdiet tincidunt amet. Tortor amet suspendisse ultrices a facilisis enim mattis.
			</p>
			<ul class="list">
				<li class="first"><a href="#">Fermentum auctor cubilia</a></li>
				<li><a href="#">Purus rutrum vestibulum</a></li>
				<li><a href="#">Libero fusce lectus dolor</a></li>
				<li><a href="#">Rutrum elit ac facilisis</a></li>
				<li class="last"><a href="#">Fringilla sollicitudin sagittis</a></li>
			</ul>
		</div>
		<br class="clearfix" />
	</div>
</div>
<div id="footer">
	Copyright &copy 2012 IT Share Club. All rights reserved.<br>
	Design by <a href="http://www.sennetwork.org/">S.C Developpement</a>.
</div>
</body>
</html>