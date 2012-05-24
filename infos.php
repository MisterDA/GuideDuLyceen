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
	<title>Informations utiles</title>
</head>

<body>
	<div id="main_wrapper">
	
	<header>
		<div id="main_title">
			<img src="images/Logo.png" alt="Logo du site" id="logo" />
			<h1>Guide  du  Lyceen</h1>
			<h2><span>Infos Utiles</span></h2>
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
			<h3>Navigation</h3>
				<p>
					<a href="#emplacement_salles">Trouver une salle</a><br />
					<a href="#emplacement_lieux">Endroits importants</a><br />
					<a href="#carte_lyceen">Carte  du lycéen</a><br />
					<a href="#cantine">Cantine</a><br />
					<a href="#retard_abscence">Retards</a><br />
					<a href="#retard_abscence">Abscences</a><br />
					<a href="#rejoindre_lycee">Rejoindre le Lycée</a><br />
					<a href="#bas_page">Bas de page</a><br />
				</p>
			<h3>Liens utiles</h3>
				<p>
					<a href="#">Un lien...</a><br />
					<a href="#">Un lien...</a><br />
					<a href="#">Un lien...</a><br />
				</p>
		</aside>	
	
		<article>
		
			<h2 id="liens_utiles">Quelques liens internets utiles</h2>
				<ul>
					<li><a href="http://www.lycee-charlemagne.fr/lycee/actualites.php" class="extern_link">Lycée-Charlemagne.fr</a>, le site du Lycée. Nous te conseillons vivement d'y faire un tour.</li>
					<li><a href="https://www.viescolaire.net/accueil_0.aspx" class="extern_link">VieScolaire.net</a>, site où tu peux retrouver tes notes, tes moyennes, tes devoirs, ou encore justifier tes absences et tes retards.</li>
					<li><a href="http://maps.google.fr/maps?hl=fr&amp;ll=48.85394,2.361251&amp;spn=0.002178,0.005659&amp;sll=48.854159,2.360221&amp;sspn=0.002333,0.005659&amp;t=h&amp;z=18" class="extern_link">Google Maps</a>, où nous avons préparés une vue aérienne du lycée.</li>  
				</ul>
			<h2 id="emplacement_salles">J’arrive en cours pour la première fois, où est la salle 315 ?</h2>
				<ul>
					<li>Les amphis de chimie se trouvent au rez-de-chaussée, du côté de la rue Charlemagne en prenant l’entrée B.</li>
					<li>Pour chaque étage, les numéros seront plus grand d’une centaine : RDC = 00, 1<sup>r</sup> étage = 100, 101…,  2<sup>e</sup> étage = 200, 201… 3<sup>e</sup> étage = 300, 301… et 4<sup>e</sup> étage = 400, 401… </li>
					<li>Les salles 138 à 144 se trouvent dans la grande cour.</li>
					<li>Pour mieux se repérer, la première dizaine de salles se trouve sur le  côté gauche du lycée, à côté de la rue Charlemagne.</li>
					<li>Les salles de SVT se trouvent dans le collège. Il te faudra donc sortir du lycée, aller au collège dans l’aile gauche, puis monter au dernier étage et aller à gauche.</li>
				</ul>
			<h2 id="rejoindre_lycee">Où se trouve le lycée ? Comment y aller ?</h2>
				<ul>
					<li>Le Lycée est facilement accessible en Métro :
						<ul>
							<li>Par la ligne M1 à la station Saint-Paul,</li>
							<li>Ou la ligne M7 à la station Pont-Marie.</li>
						</ul>
					</li>
					<li>Il est aussi accessible en bus :
						<ul>
							<li>Par la ligne Bx à la station Bidule,</li>
							<li>Ou la ligne Bx à la station Bidule2.</li>
						</ul>
					</li>
					<li><a href="#carte_google">Ci-dessous</a>, une carte Google Maps du Lycée.</li>
				</ul>
			<h2 id="emplacement_lieux">Intendance, CDI, vie scolaire, salle des profs, foyer… Où est-ce ?</h2>
				<ul>
					<li>Quand tu rentres dans le lycée, dans la petite cour, sur le côté droit se trouve une grande porte avec un escalier. L’<u>intendance</u> est au premier. Tu devras y déposer tes chèques pour la demi-pension dans la boîte aux lettres noire. Si tu perds ta carte de lycéen, ou si tu l’as oubliée chez toi, c’est ici qu'on te la refera ou bien que tu recevras un certificat.</li>
					<li>Lorsque tu accèdes à la deuxième cour, tu passes sous le bâtiment. Le <u>CDI</u> est la première porte à droite, la <u>vie scolaire</u> la deuxième porte à gauche.</li>
					<li>La <u>salle des professeurs</u> et l’<u>administration</u> occupent tout l’étage au-dessus du CDI. La salle des profs est à gauche, l’administration à droite.</li>
					<li>Les <u>casiers des professeurs</u> se situent dans le couloir derrière leur salle. On peut y accéder des deux côtés de l’étage, ou par la petite porte tout à gauche de la deuxième cour. Il ne faut pas hésiter à pousser des portes pour y arriver !</li>
					<li>Le <u>foyer socio-éducatif</u> (ou aussi salle de permanence) est accessible en prenant directement l’entrée à gauche en arrivant dans le lycée, puis en ouvrant la porte de gauche un peu plus loin.</li>
				</ul>
			<h2 id="carte_lyceen">J’ai oublié ma carte de lycéen, que dois-je faire ?</h2>
				<ul>
					<li>Tu dois normalement présenter ta carte de lycéen(ne) pour rentrer au lycée ainsi qu’au collège, et tu dois l’avoir pour manger. Si tu ne l’as pas, on peut te refuser l’accès à l’établissement.</li>
					<li>Si tu n’as pas ta carte, tu dois te présenter à l’intendance, où l’on va te délivrer un certificat.</li>
					<li>Si quelqu’un la retrouve, il la déposera chez le gardien qui la scotchera bien en vue sur sa fenêtre.</li>
				</ul>
			<h2 id="cantine">J’ai faim, moi. Je veux MANGER !</h2>
				<ul>
					<li>La cantine se trouve dans le collège. Il faut y rentrer puis aller vers l’aile gauche du collège, et prendre l’escalier de gauche, qui descend.</li>
					<li>Elle est accessible à partir de 12h10.</li>
					<li>Pour y manger, il te faudra ta carte de lycéen(ne).</li>
					<li>Pour payer la demi-pension, il faut aller à l’intendance puis déposer ton chèque dans la boîte aux lettres noire, ou la donner directement aux responsables.</li>
				</ul>
			<h2 id="retard_abscence">Je suis en retard ou j’ai été absent, que dois-je faire ?</h2>
				<ul>
					<li>Si tu es en retard, tu dois au plus vite te présenter à la vie scolaire, où les surveillants ou le CPE te donneront un mot d’excuse, que tu devras présenter à ton professeur. Attention, cela ne signifie pas que tu seras obligatoirement accepté(e) en cours ! Les professeurs d’EPS sont très exigeants sur ce sujet.</li>
					<li>Petit conseil : si ton retard est dû à un problème dans les transports en commun, demande un mot de  retard aux agents de la RATP qui devront t’en délivrer un.</li>
					<li>Si tu es absent(e), tes parents peuvent téléphoner au lycée, ou alors tu devras présenter un mot d’excuse de tes parents à la vie scolaire</li>
				</ul>
			<iframe id="carte_google" width="820" height="350" src="http://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=&amp;aq=&amp;sll=48.854159,2.360221&amp;sspn=0.002333,0.005659&amp;ie=UTF8&amp;t=h&amp;ll=48.85394,2.361251&amp;spn=0.001235,0.00228&amp;z=18&amp;output=embed"></iframe>
		
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