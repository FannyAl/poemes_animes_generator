<!--***************************************
***** Générer les fichiers à importer *****
****************************************-->

<?php

if((isset($_POST["saison"]))&&(isset($_POST["numero_poeme"])))
{
	// Récupération du nom de la saison
	$tabl_saison = array(1 => 'Fretillement', 2 => 'Aux_portes_de_la_vie', 3 => 'Croissance', 4 => 'Eclosion');
	$num_saison = mysql_real_escape_string($_POST['saison']);
	$nom_saison = $tabl_saison[$num_saison];
	
	// Création du nom du fichier
	$nomFichier = "poemes/poeme_".$nom_saison."_".$_POST["numero_poeme"].".js";
	
	// Création du contenu
	$contenu = "var saison_poem =". $_POST['saison'] .";"; 
	$contenu .= 'var numero_poem ="'. $_POST['numero_poeme'] .'";'; 
	$contenu .= 'var titre_poem ="'. $_POST['titre_poeme'] .'";'; 
	$contenu .= "var strophes_poem = [];";
	
	// Détermination nombre de strophes
	$all_lg1 = $_POST['lg1'];
	$all_lg2 = $_POST['lg2'];
	$all_lg3 = $_POST['lg3'];
	$all_lg4 = $_POST['lg4'];
	$all_lg5 = $_POST['lg5'];
	
	$all_lg1_length = count($all_lg1);
	
	if($all_lg1_length > 0)
	{
		for($i = 0; $i <= $all_lg1_length-1 ; $i++)
		{
			// Début de chaque strophe
			$contenu .= "strophes_poem[". $i ."] ='";
			$contenu .= $all_lg1[$i]."<br>";
			$contenu .= $all_lg2[$i]."<br>";
			$contenu .= $all_lg3[$i]."<br>";
			$contenu .= $all_lg4[$i]."<br>";
			$contenu .= $all_lg5[$i]."<br>";
			$contenu .= "';";
		}
	
		// Création / écriture du fichier poème
		$file = fopen($nomFichier, "a");
		fwrite($file, $contenu);
		fclose($file);
		
		
		// Création du nom du fichier index
		$nomFichierHTML = "index/index_".$nom_saison."_poeme_".$_POST["numero_poeme"].".html";
		
		// Intégration variable lien_poeme_js
		$nom_lien = (string)$nomFichier;
		
		// Script index html
		$contenuIndex = '<!DOCTYPE html>
		<html>
			<head>
				<!-- En-tête de la page -->
				<meta charset="utf-8" />
				<title>Poèmes animés</title>
				
				<!-- Typos -->
				<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Satisfy" rel="stylesheet">
				
				<!-- CSS -->
				<link rel="stylesheet" media="screen" type="text/css" href="Style.css"/>
				<link rel="stylesheet" media="screen" type="text/css" href="Style_adaptive_main.css"/>
				
				<!-- Framework jquey -->
				<link href="css/animations/animate.css" rel="stylesheet">
				<script src="js/jquery.min.js"></script>
				<script src="js/jquery.lettering.js"></script>
				<script src="js/jquery.textillate.js"></script>
				
				<!-- Musiques -->
				<audio id="introduction_sound" src="audio/Son_intro_fretillement2.mp3" type="audio/mp3" preload="auto"></audio>
				<audio id="fretillement_sound" src="audio/vent_fretillement2.mp3" type="audio/mp3"  preload="auto" ></audio>
				<audio id="bol_generique_sound" src="audio/bol2.mp3" type="audio/mp3" preload="auto" ></audio>
				<audio id="vent_sound" src="audio/vent_13s.mp3" type="audio/mp3" preload="auto"></audio>
				
				<!-- Contenu poème -->
				<script id="lien_poeme_js" type="text/javascript" src="'. $nom_lien .'"></script>
				
				<!-- View --> 
				<script class="view_file" type="text/javascript" src="view/introduction.js"></script>
				<script class="view_file" type="text/javascript" src="view/poeme_fretillement.js"></script>
				
				<!-- JS --> 
				<script type="text/javascript" src="js/functions_main.js"></script>
				<script class="affichage_page" type="text/javascript" src="affichage_pages.js"></script>
				
			</head>

			<body>
				<!-- Corps de la page -->
				<div id="backgroundPoem">
				
					<img id="play_animation" src="images/ico_play_big.png"></img>
				
					<img id="bg_bord_haut" class= "bg_bord" src="images/Fond_bord_haut.png" ></img>
					<img id="bg_bord_bas" class= "bg_bord" src="images/Fond_bord_bas.png" ></img>
					
					<!-- Contenu de la page -->
					<div id="content_page">
					
						<!-- Bouton play / pause -->
						<img id="btn_pause" src="images/ico_pause_small.png"></img>
						<img id="btn_play" src="images/ico_play_small.png"></img>
					
					</div><!-- end content page div -->
					
				</div><!-- end main div -->
			</body>
		</html>';
		
		// Création / écriture fichier index
		$file = fopen($nomFichierHTML, "a");
		fwrite($file, $contenuIndex);
		fclose($file);
		
		
		// Redirection vers le formulaire
		echo("<script>alert('fichier créé')</script>");
		header('Location: http://localhost/outil_poemes_test_formulaire/index.php');
		exit();
	}
}

?>