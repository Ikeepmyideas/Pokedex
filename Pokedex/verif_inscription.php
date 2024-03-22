<?php
include('includes/db.php');

$acceptable = array('image/jpeg','image/jpg','image/gif','image/png');
$car = "#(?-i)(?=^.{8,}$)((?!.*\s)(?=.*[A-Z])(?=.*[a-z]))((?=(.*\d){1,})|(?=(.*\W){1,}))^.*$#";

if(!isset($_POST['email']) || !isset($_POST['password'])){
	header('location: connexion.php?error=remplir_tout_les_champs');
	exit;
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	header('location: connexion.php?error=email_format');
	exit;
}

$req = $bdd->prepare("SELECT id FROM users WHERE email = ?");
$req->execute([$_POST['email']]);


while($user = $req->fetch()){
	$result = [];
	$result = $user;
}
$result = [];
if(count($result) != 0){
	header('location: connexion.php?error=email_deja_utilisé');
	exit;
}
$req = $bdd->prepare("SELECT id FROM users WHERE pseudo = ?");
$req->execute([$_POST['pseudo']]);

$result = [];
while($user = $req->fetch()){
	$result = $user;
}
if(count($result) != 0){
	header('location: connexion.php?error=pseudo_deja_utilisé');
	exit;
}

if(!preg_match($car, $_POST['password'])){
	header('location: connexion.php?error=motdepasse_invalide');
	exit;
}
if($_FILES['image']['name'] != '' && !in_array($_FILES['image']['type'], $acceptable)) {
	header("Location: connexion.php?error=file_type");
	exit;
}
if(($_FILES['image']['size'] > (1*1024*1024))) {
	header("Location: connexion.php?error=file_size");
	exit;
}
$filename = $_FILES["image"]["name"];
$tmpimg = $_FILES["image"]["tmp_name"];
$location = 'images/' . $filename;
copy($tmpimg, $location);
move_uploaded_file($tmpimg, $location);

$sql = $bdd->prepare("INSERT INTO users (pseudo,email,password,image) VALUES (:pseudo,:email,:password,:image)");

$sql->execute(array('pseudo' => htmlspecialchars($_POST['pseudo']),
	'email' => htmlspecialchars($_POST['email']),
	'password' => hash('sha256', $_POST['password']),
	'image' => $location));
session_start();
$_SESSION['email'] = $_POST['email'];


header('location: index.php');
exit;










?>