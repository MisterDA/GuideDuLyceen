<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Jean Brero, Antonin Décimo, Léna Dumortier, Dimitri Kaskassiades, Antoine Lagarde, Rébecca Taillia"/>
	<meta name="description" content="Si toi aussi, tu t'es senti un peu perdu en arrivant en seconde ou plus tard au lycée Charlemagne, ou si tu vas y rentrer très prochainement, alors ce site est fait pour toi ! Nous y avons consigné les conseils les plus utiles de mémoire d'élève pour t'aider à bien débuter une nouvelle excellente année !" />
	<link rel="stylesheet" type="text/css" href="global.css" />
	<link rel="stylesheet" type="text/css" href="article.css" />
	<title>Erreur 404</title>
</head>

<body>

	<div id="main_wrapper">
	
	<header>
		<div id="main_title">
			<img src="images/Logo.png" alt="Logo du site" id="logo" />
			<h1>Guide  du  Lyceen</h1>
			<h2><span>Accueil</span></h2>
			<hr />
		</div>
		<nav>
			<ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="infos.php">Infos utiles</a></li>
                <li><a href="articles.php">Articles</a></li>
				<li><a href="http://www.lycee-charlemagne.fr/index.php" target="_blank" title="www.lycee-charlemagne.fr">Lycee</a></li>
				<li><a href="https://www.viescolaire.net/accueil_0.aspx" target="_blank" title="www.viescolaire.net">Vie Scolaire</a></li>
				<li><div id="fb-login-button" class="fb-login-button" data-show-faces="false" data-width="100" data-max-rows="1"></div></li>
			</ul>
			<hr />
		</nav>
	</header>
	
	<section>
	
		<aside>
			<h3>Articles</h3>
				<p>
					<?php include("articles-menu.php"); ?>
				</p>
		</aside>	
	
		<article>
			<h1>Page non trouvée</h1>
            <p>
            	Désolé, la page demandée n'existe pas.<br />
            	<a href="index.php">Retour à l'accueil</a>
            </p>
        </article>

	</section>
	
	<hr />
	
	<footer>
		<p><a href="#main_wrapper">Haut de page</a></p>
		<p id="credits" class="family_name">j. brero, a. décimo, l. dumortier, d. kaskassiades, a. lagarde, r. taillia</p>
	</footer>
	
	</div>
</body>

</html>