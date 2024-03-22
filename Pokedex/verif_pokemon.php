<?php
include('includes/db.php');

if(!isset($_POST['name'])){
    header('location: add_pokemon.php?message' . 'il manque le nom');
    exit;
}

$req = $bdd->prepare("SELECT id FROM pokemons WHERE name = ?");
$req->execute([$_POST['name']]);

while($pokemon = $req->fetch()){
    $row = [];
    $row = $pokemon;
}

$row = [];
if(count($row) != 0){
    header('location: add_pokemon.php?message' . 'Le pseudo est deja utilisé');
    exit;
}

$formatadmi = array('image/jpg','image/png','image/jpeg','image/gif',);
if($_FILES['image']['name'] == '') {
    header("Location: add_pokemon.php?message" . "Aucun fichier selectionnée");
    exit;
}

if(!in_array($_FILES['image']['type'], $formatadmi)) {
    header("Location: add_pokemon.php?message" . 'Le format du fichier pas correct');
    exit;
}

if(($_FILES['image']['size'] > (1*1024*1024))) {
    header("location: add_pokemon.php?message" .'Cette image est trop volumineuse');
    exit;
}
$filename = $_FILES["image"]["name"];
$tmpimg = $_FILES["image"]["tmp_name"];
$location = 'images/' . $filename;
copy($tmpimg, $location);
move_uploaded_file($tmpimg, $location);

$req = $bdd->prepare('SELECT id FROM users WHERE email = ?');
$req->execute([$_POST['email']]);
$row = $req->fetch();
$id_user = $row['id'];
$req = $bdd->prepare("INSERT INTO pokemons (name,pv,attack,defense,speed,image,id_user) VALUES (:name,:pv,:attaque,:defense,:vitesse,:image,:id_user)");
$req->execute(array('name' => htmlspecialchars($_POST['name']),'pv' => $_POST['pv'],
                    'attaque' => $_POST['attaque'],'defense' => $_POST['defense'],
                    'vitesse' => $_POST['vitesse'],'image' => $location,
                    'id_user' => $id_user));

header('location: profile.php');
exit;










?>
