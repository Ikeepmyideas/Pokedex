<?php session_start(); ?>
<?php include('includes/connexion_check.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        
input{	
	margin-bottom: 15px;
}

label{
	font-size: 20px;
}

input{
	width: 100%;
	padding: 16px;
	font-size: 20px;
	box-shadow: none;
	border: 1px solid grey;
  	border-radius: 4px;
}

button {
	font-size: 20px;
	width: 100%;
  	background-color: #4CAF50;
  	border: none;
  	color: white;
  	padding: 16px;
  	border: 1px solid #4CAF50;
 	border-radius: 4px;
}

    </style>
	<title>Ajouter un pokemon</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include('includes/header.php'); ?>
	<main>
		<h1>Ajouter un pokemon</h1>
		<form action="verif_pokemon.php" method="post" enctype="multipart/form-data">
			<input type="text" name="name" id="name" placeholder="Nom">
			<input type="number" name="pv" placeholder="pv">
			<input type="number" name="attaque" placeholder="Attaque">
			<input type="number" name="defense" placeholder="Défense">
			<input type="number" name="vitesse" placeholder="Vitesse">
			<label>Image : </label> 
			<input type="file" name="image">
			<input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" >
			<button type="submit" value="Ajouter">Ajouter</button>
		</form>
	</main>
	<?php include('includes/footer.php'); ?>
</body>
</html>