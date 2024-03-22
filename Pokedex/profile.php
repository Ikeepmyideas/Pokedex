<?php
session_start();
include('includes/db.php'); 
?>
<?php include('includes/connexion_check.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Mon pokedex</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include('includes/header.php'); ?>
	<main>
		<h1>Mon compte</h1>
		<section>
			<h2>Mes infos</h2>
			<?php
			$sql = $bdd->prepare("SELECT * FROM users WHERE email = ?");
			$sql->execute(array($_SESSION['email']));
			$row = $sql->fetch();
			?>
			Pseudo : <?php echo $row['pseudo'];?><br>
			Email : <?php echo $row['email']; ?><br><br>
			Image de profil :<img style =" max-width:120px;max-height: 120px;vertical-align: top;" src="<?php echo $row['image']; ?>">
		</section>
		<hr><br>
		<section>
			<h1>Mes pokemons</h1>
			<?php
			$sql = $bdd->prepare("SELECT * FROM pokemons WHERE id_user = ? ORDER BY name ASC");
			$sql->execute(array($row['id']));
		    
			while ($row = $sql->fetch()){
			echo '<tsection class="card">';
			echo '<tdiv>';
			echo '<h1>' . $row['name'] . '</h1>';
			echo '<tp>PV : ' . $row['pv'] . '</p>';
			echo '<tp>Attaque : ' . $row['attack'] . '</p>';
			echo '<tp>Défense : ' . $row['defense'] . '</p>';
			echo '<tp>Vitesse : ' . $row['speed'] . '</p>';
			echo '</tdiv>';
			echo '<taside>';
			echo '<img src="' . $row['image'] . '">';
			echo '</taside>';
			echo '</tsection>';
			}
			?>
		</section>
	</main>
	<?php include('includes/footer.php'); ?>
</body>
</html>