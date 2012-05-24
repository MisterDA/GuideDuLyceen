<?php    
    session_start();
    if (isset($_GET['eraseSession']) AND $_GET['eraseSession']) {
        $_SESSION = array();
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
        <title>Accueil : Guide du Lycéen au lycéen Charlemagne, présentation du lycée et du site, conseils, ...</title>
    </head>
    
    <!-- http://guidedulyceen.toile-libre.org -->
    <!-- Design & Code by me -->
    <!-- Version 2.0.1 -->
    
    <body>
        
        <div id="fb-root"></div>
        <script>
            (function(d){
             var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement('script'); js.id = id; js.async = true;
             js.src = "//connect.facebook.net/en_US/all.js";
             ref.parentNode.insertBefore(js, ref);
             }(document));
        </script>
        
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
                        <li>
                            <?php
                                if (isset($_SESSION['username']))
                                    echo "<a href=\"connexion.php?lougout=1\">Deconnexion</a>";
                                else
                                    echo "<a href=\"connexion.php?login=1\">Connexion</a>";
                            ?>
                        </li>
                    </ul>
                </nav>
            </header>
            
            <section>
                
                <aside>
                    <h3>Articles</h3>
                    <p>
                    <a href="articles.php?id=1">Proposer un article</a><br />
                    <a href="articles.php?id=3">Article 2</a><br />
                    <a href="articles.php?id=4">Article 3</a><br /
                    </p>
                    <h3>Navigation</h3>
                    <p>
                    <a href="#">Une ancre...</a><br />
                    <a href="#">Une ancre...</a><br />
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
                    <h2>Développement</h2>
                    <p>
                    Le site est actuellement en développement. Par conséquent, les utilisateurs ne peuvent ni lire des articles ni poster des commentaires, ni s'inscrire. Si vous voulez participer au développement du projet, passez voir notre projet Github : <a href=\"https://github.com/MisterDA/GuideDuLyceen\" class=\"extern_link\">GuideDuLyceen</a>.<br />
                    Les bogues actuellement connus:
                    </p>
                    <ul>
                    	<li>L'inscription n'est pas possible à cause d'un problème avec reCaptcha et le proxy de notre hébergeur.</li>
                    	<li>Des problèmes de mise en page apparaissent sur les articles.</li>
                    	<li>Des coquilles apparaissent dans le volet de navigation à gauche.</li>
                    </p>
                    </article>
                
            </section>
            <div id="saut_section"></div>
            
            <footer>
                <p><a href="#main_wrapper">Haut de page</a> | Version 2.0.1 | <a href="admin/articles.php">Admin</a> | <a href="changelog.php">Changelog</a>
                <?php 
                    if (isset($_SESSION['username']))
                        echo ' | ' .  htmlspecialchars($_SESSION['username']) . ' est connecté. ';
                ?>
                | <a href="index.php?eraseSession=true">Effacer la session</a> | <a href="test.php">Test</a>
                </p>
                <p id="credits" class="family_name">j. brero, a. décimo, l. dumortier, d. kaskassiades, a. lagarde, r. taillia</p>
            </footer>
        </div>
    </body>
</html>
