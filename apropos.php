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
		<h3>Navigation</h3>
				<p>
					<a href="#credits_">Crédits</a><br />
					<a href="#">Ajouts prévus</a><br />
					<a href="#bas_page">Bas de page</a><br />
				</p>
		</aside>
	
		<article>
			<h2 id="credits_">Crédits</h2>
				<p>
					Guide du lycéen au Lycéen Charlemagne : <a class="page_link" href="http://guide-du-lyceen.toile-libre.org/">http://guide-du-lyceen.toile-libre.org/</a>.<br />
					Version: 3.0.0<br />
					Graphismes et code par Antonin Décimo.<br />
					Remerciements spéciaux à Jonathan Weingarten pour le support PhP et MySQL.<br />
					Le projet se trouve sur GitHub ! Développez et participez : <a href="https://github.com/MisterDA/GuideDuLyceen" class="extern_link">GitHub : GuideDuLyceen</a> !
					
					Ce projet a été réalisé dans le cadre du cours de l'accompagnement personnalisé au lycée Charlemagne (75004 Paris). Il a pour but d'aider les nouveaux lycéens à se repérer au lycée, ainsi qu'à leur montrer et leur faire découvrir beaucoup de choses sur ce lycée.<br />
					Le projet se décline sous deux formes :
				</p>
				<ul>
					<li>Un prospectus recto/verso distribué à la rentrée aux élèves pour les guider et leur donner des liens pleins de conseils,</li>
					<li>Ce site web, support internet interactif de l'aide que nous pouvons leur apporter.</li>
				</ul>
				<p>Les personnes ayant travaillé sur sont projet sont : <span class="family_name">j. brero, a. décimo, l. dumortier, d. kaskassiades, a. lagarde, r. taillia</span><br />
				L'idée initiale est due à <span class="family_name">m. david</span>, notre professeur principal.<br />
				Le projet a été officiellement présenté et terminé le Mardi 29 Mai 2012 à 15 heures et quelques.</p>
			<h2 id="ajouts_prevus">Ajouts prévus</h2>
				<ul>
					<li>Ajouter de nouveaux articles et du contenu.</li>
					<li>Proposer l'ajout en ligne des articles.</li>
					<li>Créer un parseur BBCode ou XML pour éviter les failles XSS.</li>
				</ul>
			<h2 id="version">Autre</h2>
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