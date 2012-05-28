<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Jean Brero, Antonin Décimo, Léna Dumortier, Dimitri Kaskassiades, Antoine Lagarde, Rébecca Taillia"/>
	<meta name="description" content="Si toi aussi, tu t'es senti un peu perdu en arrivant en seconde ou plus tard au lycée Charlemagne, ou si tu vas y rentrer très prochainement, alors ce site est fait pour toi ! Nous y avons consigné les conseils les plus utiles de mémoire d'élève pour t'aider à bien débuter une nouvelle excellente année !" />
	<link rel="stylesheet" type="text/css" href="global.css" />
	<link rel="stylesheet" type="text/css" href="article.css" />
	<title>Accueil : Guide du Lycéen au lycéen Charlemagne, présentation du lycée et du site, conseils, ...</title>
</head>

<!-- http://guidedulyceen.toile-libre.org -->
<!-- Design & Code by me -->
<!-- Version 2.0.1 -->

<body>
	
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
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
		
			<h1>Présentation</h1>
			<div class="fb-like" data-href="http://guide-du-lyceen.toile-libre.org/" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div>
				<p>
					<em>Dédicacé à tous ceux qui viennent des p'tits collèges, ces p'tits collèges dont personne n'a jamais entendu parler !</em><br />
					Si toi aussi, tu t'es senti un peu perdu en arrivant en seconde ou plus tard au lycée Charlemagne, ou si tu vas y rentrer très prochainement, alors ce site est fait pour toi ! Nous y avons consigné les conseils les plus utiles de mémoire d'élève pour t'aider à bien débuter une nouvelle excellente année !
				</p>
			<h2>Naviguer dans le site</h2>
				<p>
					Le site te propose plusieurs pages :
				</p>
				<ul>
					<li>La <a href="index.php" class="page_link">page d'accueil</a>, cette page, qui présente le site et liste les articles.</li>
					<li>La <a href="infos.php" class="page_link">page des infos utiles</a>, où sont proposées une liste de questions-réponses d'aides et d'informations utiles à propos du lycée.</li>
					<li>La <a href="articles.php" class="page_link">page des articles</a>, où sont référencés tous les articles écrits par nos rédacteurs, à propos des évènements ou de l'actualité autour du lycée, ou encore des fiches de conseils testés et éprouvés pour bien s'organiser et gérer ses cours.</li>
				</ul>
				
		</article>
		
	</section>
	
	<hr />
	
	<footer>
		<p><a href="#main_wrapper">Haut de page</a> | Version 3.0.0 | <a href="apropos.php">A propos</a></p>
		<p id="credits" class="family_name">j. brero, a. décimo, l. dumortier, d. kaskassiades, a. lagarde, r. taillia</p>
	</footer>
	
	</div>
</body>

</html>
