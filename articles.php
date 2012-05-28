<?php
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=sql.toile-libre.org;dbname=gdlc_oneofthem', 'gdlc_oneofthem', 'R2FZpw1F', $pdo_options);
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	
	$printArticle = false;
	if (!isset($_GET['article'])) { // Si $_GET['article'] n'est pas défini
		$printLastArticle = true;
	}
	elseif ($_GET['article'] == NULL) { // Si $_GET['article'] ne vaut rien
		$printLastArticle = true;
	}
	else {		
		$linksInBDD = $bdd->query('SELECT link FROM article'); // Recherche des liens dans la BDD
		while ($link = $linksInBDD->fetch()) {
			if ($link['link'] == $_GET['article']) { 
				$printArticle = true;
			}
			else {
				$printLastArticle = true;
			}
		}
		$linksInBDD->closeCursor();
	}	
	
	$maxIDBDD = $bdd->query('SELECT id FROM article ORDER BY id DESC LIMIT 0,1');
	$maxID = $maxIDBDD->fetch();
	$maxIDBDD->closeCursor();	
		
	if ($printArticle) {
		$article = $bdd->prepare('SELECT * FROM article WHERE link = :link');
		$article->execute(array('link' => $_GET['article']));
		$current = $article->fetch();
		$article->closeCursor();

		
		if ($maxID['id'] == $current['id']) {
			$before = $bdd->prepare('SELECT link FROM article WHERE id = :id');
			$before->execute(array('id' => $current['id'] - 1));
			$beforeLink = $before->fetch();
			$before->closeCursor();
		}
		elseif (1 == $current['id']) {
			$after = $bdd->prepare('SELECT link FROM article WHERE id = :id');
			$after->execute(array('id' => $current['id'] + 1));
			$afterLink = $after->fetch();
			$after->closeCursor();	
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
	
	if ($printLastArticle AND !$printArticle) {
		$article = $bdd->query('SELECT * FROM article ORDER BY id DESC LIMIT 0,1');
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
				<?php
					$linksInBDD = $bdd->query('SELECT link, title FROM article ORDER BY datePublishment DESC');
        			while ($link = $linksInBDD->fetch()) {
                		 echo '<a href="articles.php?article=' . $link['link'] . '">' . $link['title'] . '</a><br />';
                	}
        			$linksInBDD->closeCursor();
        		?>
				</p>
		</aside>
		
		<article>
		<p><?php
			if ($current['id'] == 1)
				echo '<a href="#" id="article_before" class="unactive_link">Premier article</a>';
			else
				echo '<a href="articles.php?article=' . $beforeLink['link'] . '" id="article_before" class="article_link">&lt;-- Article précédent</a>';					
			if ($current['id'] == $maxID['id'])
				echo '<a href="#" id="article_after" class="unactive_link">Dernier article</a>';
			else
				echo '<a href="articles.php?article=' . $afterLink['link'] . '" id="article_after" class="article_link">Article suivant --&gt;</a>';
		?></p>		
		<?php
			
			echo '<h1>' . $current['title'] . '</h1><p class="infos_about_article"><span class="article_author">Par ' . $current['author'] . ',</span><span class="article_datePublishment"> ' . $current['datePublishment'] . '</span><div class="fb-like" data-href="http://guide-du-lyceen.toile-libre.org/' . $current['link'] . '" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div></p>' . $current['text'];
			
		?>
		</article>
		
		<hr />
		
		
		<div id="fb-comments" class="fb-comments" data-href="http://guide-du-lyceen.toile-libre.org/articles.php?<?php echo $current['link'] ?>" data-num-posts="10" data-width="825"></div>
		
		

	</section>
	
	<hr />
	
	<footer>
		<p><a href="#main_wrapper">Haut de page</a> </p>
		<p id="credits" class="family_name">j. brero, a. décimo, l. dumortier, d. kaskassiades, a. lagarde, r. taillia</p>
	</footer>
	
	</div>
</body>

</html>