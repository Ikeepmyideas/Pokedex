<?php

try 
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokedex','root','', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch(PDOException $e){
	die('Erreur : ' . $e->getMessage());
}

?>