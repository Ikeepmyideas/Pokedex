# Pokedex <img width="50px" height="50px" src="https://media.tenor.com/rbx3ph5SLRUAAAAj/pikachu-pokemon.gif">
Site web permettant la gestion d'un catalogue de Pokemon par différents utilisateurs référencés.
![Illustration](Pokedex/images/illustration.png)

<h1>Fonctionnalités</h1>
<p>
    - Inscription et connexion des utilisateurs. <br>
    - Ajout de nouveaux Pokemons à la collection de l'utilisateur. <br>
    - Affichage de la collection de Pokemons, classés par nom. <br>
    - Affichage du profil de l'utilisateur. <br>
    - Structure du projet
</p>

<h1>Le projet est organisé :</h1>
<p>
- /includes : Dossier contenant les fichiers d'inclusion PHP. <br>
- index.php : Page d'accueil de l'application. <br>
- connexion.php : Page de connexion et d'inscription des utilisateurs. <br>
- collection.php : Page affichant la collection de Pokemons de l'utilisateur. <br>
- add_pokemon.php : Page permettant d'ajouter un nouveau Pokemon à la collection. <br>
- profile.php : Page affichant le profil de l'utilisateur.
</p>

<h1>Base de données</h1>
<h5>Le projet utilise une base de données MySQL avec deux tables principales :</h5>
<p>
- users : Stocke les informations sur les utilisateurs. <br> 
- pokemons : Stocke les informations sur les Pokemons, liés à un utilisateur. <br>
</p>

<h1>Installation</h1>
<p>
1] Clonez ce dépôt sur votre machine locale. <br>
2] Importez la structure de la base de données à l'aide du fichier SQL fourni. <br>
3] Assurez-vous d'avoir un serveur PHP et MySQL installé sur votre machine. <br>
4] Configurez les paramètres de connexion à la base de données dans le fichier db.php.</p>

<h1>Auteur</h1>
<p>
Ce projet a été développé par Asma dans le cadre du TP Pokedex.</p>
