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
        $titlesInBDD = $bdd->query('SELECT title FROM article');        
        while ($title = $titlesInBDD->fetch) {
            $title = mb_strtolower(str_replace(' ', '-', $title));
            if ($title == $_GET['article']) {
                $printLastArticle = false;
                goto endArticleWhile;
            }
            else {
                $printLastArticle = true;
            }
        }
        endArticleWhile:
        $titlesInBDD->closeCursor();
    }
    else {
        $printLastArticle = true;
    }
    $article = $bdd->prepare('SELECT id, author, datePublishment, text FROM article WHERE title = :title');
    $article->execute(array('title' => $title));
    $current = $article->fetch();
    $article->closeCursor();

			
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
			<p>
				<a href="#" class="article_link">&lt;-- Article précédent</a>
				<a href="#" class="article_link">Article suivant --&gt;</a>
			</p>
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