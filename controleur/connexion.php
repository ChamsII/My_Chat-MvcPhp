<?php
$mysql_host = 'localhost'; // entrer votre hote ici
$mysql_user = 'root'; // entrer votre login
$mysql_password = ''; // entrer votre password
$mysql_base = 'tchatche'; // entrer le nom de votre base

//on se connecte à la base de donnée
$db = mysql_connect($mysql_host,$mysql_user,$mysql_password) or die ("erreur de connexion au serveur");

//sélection de votre base de donnée
mysql_select_db($mysql_base,$db) or die ("erreur de connexion à la base de donnée"); 

?>