<!DOCTYPE HTML>
<html>
    <head>
        <link href="Collection.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <title>Connexion</title>
    </head>
    <body>
    <?php include('includes/header.php'); ?>
       
        <center><h1>CONNEXION</h1></center>
        <main>
        
            <section class="conin">
                <form method="POST" action="verif_connexion.php" >
                <span><B>Je possède un compte</B></span><br>
                <input name="email" value="" type="email" id="email" placeholder="E-mail" autocomplete="off"><br>
                <input type="password" id="password" name="password" placeholder="Mot de passe" autocomplete="off"><br>
                <button type="submit">Connexion</button>
                </form>
</section>
            <aside>
            <section class="conin">
                <form method="POST" action="verif_inscription.php" enctype="multipart/form-data">
                <span><B>Je crée un compte</B></span><br>
                <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo"><br>
                <input type="email" value="" id="email" name="email" placeholder="E-mail"><br>
                <input type="password" id="password" name="password" placeholder="Mot de passe"><br>
                Image de profil :<input type="file" name="image" id="image"><br>
                <button type="submit" name="envoii" value="Se connecter">Inscription</button>
                </form>
</section>
</aside>

        </main>
        <span><?php 
			if(isset($_GET['message']) && !empty($_GET['message'])){
				echo '<p>' . htmlspecialchars($_GET['message']) . '</p>';
			}
			?></span>
        <?php include('includes/footer.php'); ?>
    </body>
</html>