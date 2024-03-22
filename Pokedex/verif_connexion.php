<?php
include('includes/db.php');

$email = $_POST['email'];
$password = hash('sha256', $_POST['password']);
$req = $bdd->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
$req->execute(array($email, $password));

while($verify = $req->fetch()){
	$row = $verify;
}

if(count($row) != 0){
	session_start();
	$_SESSION['email'] = $email;
	header('location: Index.php');
	exit;
}
else{
	header('location: connexion.php?error=elementincorrect');
	exit;
}

?>





















?>
