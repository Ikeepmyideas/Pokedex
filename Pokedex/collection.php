<?php session_start(); ?>
<?php include('includes/db.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <link href="Collection.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <title>Collection</title>
    </head>
    <body>
    <?php include('includes/header.php'); ?>
        
        <main>
        <h1>Tous les Pokemons</h1>

<?php 
$sql = $bdd->query("SELECT * from pokemons ORDER BY name ASC");
while ($row = $sql->fetch()){
echo '<tsection class="card">';
echo '<tdiv>';
echo '<h1>' . $row['name'] . '</h1>';
echo '<tp>PV : ' . $row['pv'] . '</tp><br>';
echo '<tp>Attaque : '.$row['attack'].'</tp><br>';
echo '<tp>Défense : '.$row['defense'].'</tp><br>';
echo '<tp>Vitesse : '.$row['speed'].'</tp>';
echo '</tdiv>';
echo '<taside>';
echo '<img src="' . $row['image'] . '">';
echo '</taside>';
echo '</tsection>';
        }

?>
</main>
        <?php include('includes/footer.php'); ?>
    </body>
</html>