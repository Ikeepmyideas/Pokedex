    <header>
    <link href="Collection.css" rel="stylesheet">

    <img src="assets/logo.png" height="40px">
            <nav>
                <ul class="align-text">
                    
				<li><a class="" href="index.php">Accueil</a></li>
			
				<li><a class="" href="collection.php">Collection</a></li>

			<?php 
			if(isset($_SESSION['email'])){
				    echo '<li><a class="" href="add_pokemon.php">Ajouter un pokemon</a></li>';
					echo '<li><a class="" href="profile.php">Mon Compte</a></li>';
                    echo '<li><a class="" href="includes/deconnexion.php">Déconnexion</a></li>';
			}else{
				echo '<li><a class="" href="connexion.php">Connexion</a></li>';
			}
			?>
                 </div>
            </nav>
</header>