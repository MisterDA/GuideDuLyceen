<?php

	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=sql.toile-libre.org;dbname=gdlc_oneofthem', 'gdlc_oneofthem', 'R2FZpw1F', $pdo_options);
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
	
	$linksInBDD = $bdd->query('SELECT link, title FROM article ORDER BY datePublishment DESC');
	while ($link = $linksInBDD->fetch()) {
		echo '<a href="articles.php?article=' . $link['link'] . '">' . $link['title'] . '</a><br />';
	}
	
?>
