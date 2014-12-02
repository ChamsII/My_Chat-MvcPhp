<?php
// on demarre la session
	session_start();
// On recupere la valeur de la page envoyé par le GET
$page = (isset($_GET['page'])==true)?$_GET['page']:''; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Wild Goose  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110710

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>IT Share Club: Tchatche</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.simpletooltip-min.js"></script>
	<style type="text/css" media="screen">
		.tooltip{width:200px;margin:0;padding:5px;font-size:11px;color:#666;background:#fff;border:5px solid #ccc;}
		.tooltip p{margin:0;text-align:justify;}
		#tooltip_1{z-index:100000;}
		#tooltip_2{height:300px;width:300px;background:#fff;border-color:#e66;}
		#tooltip_3{background:#fff;border-color:#8c6;}
	</style>

<!-- Rafraîchissement automatique au bout de 300 secondes -->
	<?php
		if ($_SESSION['logged']=true)
		{
		//echo'<meta http-equiv="refresh" content="10" URL="http:index.php?page=dialogue" />';
		}
	?>
	
<!-- APPEL DES FONCTIONS PERMETTANT DE VERIFIER LES FORMULAIRE DE SAISI-->
		<script language="JavaScript">
			<!--
			//nous appliquons simplement une couleur d'arrière plan aux objets traités, 
			function couleur(obj) {
				 obj.style.backgroundColor = "#FFFFFF";
			}
			
			// Fonction qui va vérifier les champs et qui va retourner une alerte dans les cas où les champs sont vides ou douteux			 
			function check() 
			{
				var msg = "";
					
				if (document.formulaire.pseudo.value == "")
					{
						msg += "Veuillez saisir votre pseudo\n";
						document.formulaire.pseudo.style.backgroundColor = "#F3C200";
					}
					
				if (document.formulaire.region.value == "")
					{
						msg += "Veuillez saisir votre region\n";
						document.formulaire.region.style.backgroundColor = "#F3C200";
					}
				if (document.formulaire.mess.value == "")
					{
						msg += "Vous ne pouvez pas envoyer un message vide\n";
						document.formulaire.mess.style.backgroundColor = "#F3C200";
					}					
			// envoi du message d'erreur en cas d'erreur
				if (msg == "") return(true);
					else	{
						alert(msg);
						return(false);
					}
			}
			//-->
		</script>	
<script type="text/javascript">
$(function() {
	$('table .infos').hide();
	// un autre test
	$("a.tooltiplink").simpletooltip();
	$("a.clic").simpletooltip({click: true});
	$("a.delay").simpletooltip({hideDelay: 0.5});
	$("#demo_5").simpletooltip({ click: true });
	$("a.femme").simpletooltip({ click: true });
	
/*	$('table tr.femme').hover(
		function () {
						$('table .infos').fadeIn();
					},
		function () {
						$('table .infos').fadeOut();
					}
	);
	$('table tr.homme').hover(
		function () {
						$('table .infos').fadeIn();
					},
		function () {
						$('table .infos').fadeOut();
					}
	);
*/
});// document ready
</script>

</head>
<body>
<!--	<p>Démonstration : <a id="demo_5" href="#tooltip_1">tooltip</a></p>
		<div id="tooltip_1" class="tooltip">
			<h2>Tooltip 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
-->
<div id="wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php?page=accueil">Accueil</a></li>
			<ul>
				<li><a href="index.php?page=tchatche">Chat</a></li>
				<li><a href="index.php?page=photos">Photos</a></li>
				<li><a href="index.php?page=apropos">A Propos</a></li>
				<li class="last"><a href="index.php?page=contact">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="header">
		<div id="logo">
			<h1><a href="#"> </a></h1>
			<p> <a href="http://www.freecsstemplates.org/"> </a></p>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">

			<?php  // insertion du contenu en fonction du menu selectionné
				switch($page)
				{											 
					case 'contact'         : require("vues/contact.php");
					 break; 													 
					case 'tchatche'       : require("vues/tchatche.php");
					 break; 													 
					case 'dialogue'       : require("vues/dialogue.php");
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
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
					<form method="get" action="#">
						<div>
							<input type="text" name="s" id="search-text" value="" />
							<input type="submit" id="search-submit" value="" />
						</div>
					</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>D&eacute;veloppement</h2>
					<p>Le&nbsp;<strong>d&eacute;veloppement de logiciel</strong>&nbsp;est le travail d'&eacute;tudier, de concevoir, construire, transformer, mettre au point,&nbsp;<a href="http://fr.wikipedia.org/wiki/Maintenance" title="Maintenance">maintenir</a>&nbsp;et am&eacute;liorer des&nbsp;<a href="http://fr.wikipedia.org/wiki/Logiciel" title="Logiciel">logiciels</a>.</p>
					<p>Ce travail est effectu&eacute; par les collaborateurs des&nbsp;<a href="http://fr.wikipedia.org/wiki/%C3%89diteurs_de_logiciel" title="&Eacute;diteurs de logiciel">&eacute;diteurs de logiciels</a>, des&nbsp;<a href="http://fr.wikipedia.org/wiki/Soci%C3%A9t%C3%A9s_de_services_et_d%27ing%C3%A9nierie_informatique" title="Soci&eacute;t&eacute;s de services et d'ing&eacute;nierie informatique">soci&eacute;t&eacute;s de services et d'ing&eacute;nierie informatique</a>&nbsp;(abr.&nbsp;<em>SSII</em>) et les membres de la<a href="http://fr.wikipedia.org/wiki/Communaut%C3%A9_du_logiciel_libre" title="Communaut&eacute; du logiciel libre"> communaut&eacute; du logiciel libre</a>.</p>
				</li>
				<li>
					<h2>Membres</h2>
					<ul>
						<li><a href="http://www.sennetwork.org">Guy-Clovis NANA </a></li>
						<li><a href="#">Sileymana DJIMERA </a></li>
						<li><a href="#">Yoann BINENY.O </a></li>
						<li><a href="#">Idy DJIAYE </a></li>
						<li><a href="#">Chamsoudine ALI MOUIGNI </a></li>
						<li><a href="#">Haroun Izadine RACHIT </a></li>
					</ul>
				</li>
				<li>
					<h2>R&eacute;alisations</h2>
					<ul>
						<li><a href="#">Calculatrice scientique (JAVA)</a></li>
						<li><a href="#">Site de rencontre </a></li>
					</ul>
				</li>
				<li>
					<h2>A venir...</h2>
					<ul>
						<li><a href="#">Logiciel de gestion de stock (JAVA)</a></li>
						<li><a href="#">Appication Mobile IMC (WLangage) </a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
		<p>Copyright (c) 2011 Hacham All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>
