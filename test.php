<?php
    session_start();
    try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=sql.toile-libre.org;dbname=gdlc_oneofthem', 'gdlc_oneofthem', 'R2FZpw1F', $pdo_options);
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
</head>

<body>
    <?php
    
    $a = 1;
    
	$printArticle = false;
	if (!isset($_GET['article'])) { // Si $_GET['article'] n'est pas défini
		$printLastArticle = true;
		$a = 2;
	}
	if ($_GET['article'] == NULL) { // Si $_GET['article'] ne vaut rien
		$printLastArticle = true;
		$a = 3;
	}
	if (isset($_GET['article']) AND $_GET['article'] != NULL)  {
		$a = 4;
		$linksInBDD = $bdd->query('SELECT * FROM article'); // Recherche des liens dans la BDD
		$a = 5;
		while ($link = $linksInBDD->fetch) {
			if ($link['link'] == $_GET['article']) { 
				$printArticle = true;
				$a = 6;
			}
			else {
				$printLastArticle = true;
				$a = 7;
			}
		}
	}
	
	echo '$printLastArticle = |' . $printLastArticle . '|<br />$printArticle = |' . $printArticle . '|<br />';
	echo $a;
	
    ?>
</body>

</html>