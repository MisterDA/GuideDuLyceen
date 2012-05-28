<?php    
    session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Jean Brero, Antonin Décimo, Léna Dumortier, Dimitri Kaskassiades, Antoine Lagarde, Rébecca Taillia"/>
	<meta name="description" content="Si toi aussi, tu t'es senti un peu perdu en arrivant en seconde ou plus tard au lycée Charlemagne, ou si tu vas y rentrer très prochainement, alors ce site est fait pour toi ! Nous y avons consigné les conseils les plus utiles de mémoire d'élève pour t'aider à bien débuter une nouvelle excellente année !" />
	<link rel="stylesheet" type="text/css" href="global.css" />
	<link rel="stylesheet" type="text/css" href="article.css" />
	<title>Changelog</title>
</head>

<body>
	<div id="main_wrapper">
	
	<header>
		<div id="main_title">
			<img src="images/Logo.png" alt="Logo du site" id="logo" />
			<h1>Guide  du  Lyceen</h1>
			<h2><span>Changelog</span></h2>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
                <li><a href="infos.php">Infos utiles</a></li>
                <li><a href="articles.php">Articles</a></li>
				<li><a href="http://www.lycee-charlemagne.fr/index.php" target="_blank" title="www.lycee-charlemagne.fr">Lycee</a></li>
				<li><a href="https://www.viescolaire.net/accueil_0.aspx" target="_blank" title="www.viescolaire.net">Vie Scolaire</a></li>
				<li><?php
						if (isset($_SESSION['username']))
							echo "<a href=\"connexion.php?lougout=1\">Deconnexion</a>";
						else
							echo "<a href=\"connexion.php?login=1\">Connexion</a>";
				?></li>
			</ul>
		</nav>
	</header>
	
	<section>
	
		<aside>
			<h3>Articles</h3>
				<p>
					<a href="articles.php?id=1">Proposer un article</a><br />
					<a href="articles.php?id=3">Article 2</a><br />
					<a href="articles.php?id=4">Article 3</a><br />
				</p>
		<h3>Navigation</h3>
				<p>
					<a href="#credits_">Crédits</a><br />
					<a href="#">Ajouts prévus</a><br />
					<a href="#version">Notes de version</a><br />
					<a href="#2.0.0">2.0.0</a><br />
					<a href="#1.1.0">1.1.0</a><br />
					<a href="#1.0.4">1.0.4</a><br />
					<a href="#1.0.3">1.0.3</a><br />
					<a href="#1.0.2">1.0.2</a><br />
					<a href="#1.0.1">1.0.1</a><br />
					<a href="#1.0.0">1.0.0</a><br />
					<a href="#bas_page">Bas de page</a><br />
				</p>
		</aside>
	
		<article>
			<h2 id="credits_">Crédits</h2>
				<p>
					Guide du lycéen au Lycéen Charlemagne : <a class="page_link" href="http://guide-du-lyceen.toile-libre.org/">http://guide-du-lyceen.toile-libre.org/</a>.<br />
					Version: 2.0.0<br />
					Graphismes et code par Antonin Décimo.<br />
					Remerciements spéciaux à Jonathan Weingarten pour support PhP et MySQL.<br />
					Le projet se trouve sur GitHub ! Développez et participez : <a href="https://github.com/MisterDA/GuideDuLyceen" class="extern_link">GitHub : GuideDuLyceen</a> !
				</p>
			<h2 id="ajouts_prevus">Ajouts prévus</h2>
				<ul>
					<li>Ajouter de nouveaux articles et du contenu.</li>
					<li>Ajouter un support Facebook ainsi que des boutons "j'aime".</li>
					<li>Corriger tous les bogues de mise en page.</li>
					<li>Corriger l'accès aux bases de données.</li>
					<li>Créer un parseur BBCode ou XML pour éviter les failles XSS.</li>
				</ul>
			<h2 id="version">Notes de version</h2>
				<p>
					Vérifiez la validité W3C en cliquant sur les liens :<br />
					<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fguide-du-lyceen.toile-libre.org%2Findex.php" class="extern_link">index.php</a>, 
					<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fguide-du-lyceen.toile-libre.org%2Farticles.php" class="extern_link">articles.php</a>, 
					<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fguide-du-lyceen.toile-libre.org%2Finfos.php" class="extern_link">infos.php</a>, 
					<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fguide-du-lyceen.toile-libre.org%2Fchangelog.php" class="extern_link">changelog.php</a>, 
					<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fguide-du-lyceen.toile-libre.org%2F404.php" class="extern_link">404.php</a>, 
					<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fguide-du-lyceen.toile-libre.org%2Fuser.php">user.php</a>,
					<a href="http://jigsaw.w3.org/css-validator/validator?uri=guide-du-lyceen.toile-libre.org%2Findex.php&amp;profile=css3&amp;usermedium=all&amp;warning=1&amp;vextwarning=&amp;lang=fr" class="extern_link">feuilles de style</a>.
				</p>
			<h3 id="2.0.0">2.0.0</h3>
				<ul>
					<li>Version en cours de développement !</li>
					<li>Réécriture complète des scripts PhP/MySQL.</li>
					<li>Un système de sessions est mise en place, peut-être au futur avec des cookies.</li>
					<li>Nouvelle page <span class="code">connexion.php</span> ajoutée pour se connecter.</li>
					<li>Nouvelles tables pour la base de données.</li>
					<li>Finalisation du processus de connexion.</li>
					<li>Retour à l'UTF-8.</li>
					<li>Correction de l'indentation.</li>
					<li>Bogues connus:
						<ul>
							<li>L'inscription n'est pas possible à cause d'un problème avec reCaptcha et le proxy de notre hébergeur.</li>
							<li>Des problèmes de mise en page apparaissent sur les articles.</li>
							<li>Des coquilles apparaissent dans le volet de navigation à gauche.</li>
						</ul>
					</li>
				</ul>
			<h3 id="1.1.0">1.1.0</h3>
				<ul>
					<li>Support PhP/MySQL.</li>
					<li>Support de l'ajout en ligne des articles.</li>
					<li>Support de l'ajout de commentaires dans les article.</li>
					<li>Les articles se retrouvent avec l'attribut id=x.</li>
					<li>Optimisation du header et du footer.</li>
					<li>Passage au positionnement fixé pour la navigation.</li>
					<li>Correction de la page 404.php.</li>
					<li>Correction des messages d'erreur PhP pour formater le HTML.</li>
					<li>Implémentation du <span class="code">.htaccess</span>.</li>
					<li>Ajout de changelog.php.</li>
					<li>Les balises &lt;ul&gt; ne doivent pas se trouver dans un &lt;p&gt; si elles sont placées sous un titre.</li>
					<li>Correction de la validité du code de chaque page avec l'outil W3C.</li>
					<li>Vérification de l'affichage du site pour Chrome, Firefox, Safari, Opéra, Camino et Sea Monkey.</li>
					<li>Ajout des boutons Facebook "J'aime" à côté des titres d'articles.</li>
					<li>Correction de l'affichage des articles.</li>
					<li>Passage futur de l'encodage de articles.php vers iso-8859-1 plutôt que utf-8, ou alors amélioration de la BDD.</li>
				</ul>
			<h3 id="1.0.4">1.0.4</h3>
				<ul>
					<li>100px de large ajoutés.</li>
					<li>Classe .page_link pour les liens vers les pages du site.</li>
					<li>Classe .hide pour les textes cachés.</li>
					<li>Les titre du header sont mieux gérés, suppression des balises div d'espace.</li>
					<li>Menu aside modifié, passage de h1 à h3 et optimisation des paragraphes.</li>
					<li>Correction de infos.php, des liens hypertextes, et des bogues de la 1.0.7.</li>
				</ul>
			<h3 id="1.0.3">1.0.3</h3>
				<ul>
					<li>Les articles sont maintenant intégrés à la page articles.php</li>
					<li>Redirection des erreurs 404.</li>
					<li>Ajout des classes de formatage de texte.</li>
					<li>Nouveaux ajouts graphiques.</li>
				</ul>
			<h3 id="1.0.2">1.0.2</h3>
				<ul>
					<li>Header optimisé.</li>
					<li>Support des articles amélioré.</li>
					<li>Ajout de "Comment écrire un article".</li>
					<li>Correction de bogues graphiques.</li>
				</ul>
			<h3 id="1.0.1">1.0.1</h3>
				<ul>
					<li>Création de l'interface.</li>
					<li>Correction de bogues graphiques.</li>
			</ul>
			<h3 id="1.0.0">1.0.0</h3>
				<ul>
					<li>Première release.</li>
				</ul>
		
		</article>
		
	</section>
	
	<div id="saut_section"></div>
	
	<footer>
		<p><a href="#main_wrapper">Haut de page</a> 
		<?php 
			if (isset($_SESSION['username']))
				echo ' | ' .  htmlspecialchars($_SESSION['username']) . ' est connecté. ';
		?>
		</p>
		<p id="credits" class="family_name">j. brero, a. décimo, l. dumortier, d. kaskassiades, a. lagarde, r. taillia</p>
	</footer>
	
	</div>
</body>

</html>