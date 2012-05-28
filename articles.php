<?php
	session_start();
	
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', $pdo_options);
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	
	if (isset($_GET['article'])) {
		$linksInBDD = $bdd->query('SELECT link FROM article');		
		while ($link = $linksInBDD->fetch) {
			if ($link == $_GET['article']) {
				$printLastArticle = false;
				goto endArticleWhile;
			}
			else {
				$printLastArticle = true;
			}
		}
		endArticleWhile:
		$linksInBDD->closeCursor();
	}
	else {
		$printLastArticle = true;
	}
	if (!$printLastArticle) {
		$maxIdBDD = $bdd->query('SELECT MAX(id) FROM article');
		$maxId = $maxIdBDD->fetch();
		$maxIdBDD->closeCursor();
		$article = $bdd->prepare('SELECT id, title, author, datePublishment, text FROM article WHERE link = :link');
		$article->execute(array('link' => $_GET['article']));
		$current = $article->fetch();
		$article->closeCursor();
		if ($maxId['id'] == $current['id']) {
			$before = $bdd->prepare('SELECT link FROM article WHERE id = :id');
			$before->execute(array('id' => $current['id'] - 1));
			$beforeLink = $before->fetch();
			$before->closeCursor();
		}
		else {
			$before = $bdd->prepare('SELECT link FROM article WHERE id = :id');
			$before->execute(array('id' => $current['id'] - 1));
			$beforeLink = $before->fetch();
			$before->closeCursor();
			$after = $bdd->prepare('SELECT link FROM article WHERE id = :id');
			$after->execute(array('id' => $current['id'] + 1));
			$afterLink = $after->fetch();
			$after->closeCursor();
		}
	}
	else {
		$maxIdBDD = $bdd->query('SELECT MAX(id) FROM article');
		$maxId = $maxIdBDD->fetch();
		$maxIdBDD->closeCursor();
		$article = $bdd->prepare('SELECT id, title, author, datePublishment, text FROM article WHERE id = :id');
		$article->execute(array('id' => $maxId['id']));
		$current = $article->fetch();
		$article->closeCursor();
		$before = $bdd->prepare('SELECT link FROM article WHERE id = :id');
		$before->execute(array('id' => $current['id'] - 1));
		$beforeLink = $before->fetch();
		$before->closeCursor();	
	}
			
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8"/>
	<meta name="author" content="Jean Brero, Antonin Décimo, Léna Dumortier, Dimitri Kaskassiades, Antoine Lagarde, Rébecca Taillia"/>
	<meta name="description" content="Si toi aussi, tu t'es senti un peu perdu en arrivant en seconde ou plus tard au lycée Charlemagne, ou si tu vas y rentrer très prochainement, alors ce site est fait pour toi ! Nous y avons consigné les conseils les plus utiles de mémoire d'élève pour t'aider à bien débuter une nouvelle excellente année !" />
	<link rel="stylesheet" type="text/css" href="global.css" />
	<link rel="stylesheet" type="text/css" href="article.css" />
	<title>Articles</title>
</head>

<body>

	<div id="main_wrapper">
	
	<header>
		<div id="main_title">
			<img src="images/Logo.png" alt="Logo du site" id="logo" />
			<h1>Guide  du  Lyceen</h1>
			<h2><span>Accueil</span></h2>
		</div>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="articles.php">Articles</a></li>
				<li><a href="infos.php">Infos utiles</a></li>
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
			<h3>Liens utiles</h3>
				<p>
					<a href="#">Un lien...</a><br />
					<a href="#">Un lien...</a><br />
					<a href="#">Un lien...</a><br />
				</p>
		</aside>
		
		<nav>
			<p><?php
				if (current['id'] != 1)
					echo '<a href="articles.php?article=' . $beforeLink['link'] . '" class="article_link">$lt-- Article précédent</a>';
				else
					echo '<a href="#" class="unactive_link">Premier article</a>';
				if (current['id'] != $maxId['id'])
					echo '<a href="articles.php?article=' . $afterLink['link'] . '" class="article_link">Article suivant --&gt;</a>';
				else
					echo '<a href="#" class="unactive_link">Dernier article</a>';
			?></p>
		</nav>
		
		<article>
			
			<?php ?>
			
		</article>

	</section>
	
	<div id="saut_section"></div>
	
	<footer>
		<p><a href="#main_wrapper">Haut de page</a> 
		<?php 
			if (isset($_SESSION['username']))
				echo ' | ' . htmlspecialchars($_SESSION['username']) . ' est connecté. ';
		?>
		</p>
		<p id="credits" class="family_name">j. brero, a. décimo, l. dumortier, d. kaskassiades, a. lagarde, r. taillia</p>
	</footer>
	
	</div>
</body>

</html>