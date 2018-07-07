<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Poèmes animés</title>
		
		<!-- Typos -->
		<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic|Satisfy" rel="stylesheet">
		
		<!-- CSS -->
		<link rel="stylesheet" media="screen" type="text/css" href="Style.css"/>
		
		<!-- Contenu poème -->
		<script type="text/javascript" src="poemes/poeme_type.js"></script>
		
		<!-- Js -->
		<script type="text/javascript" src="functions_form.js"></script>
    </head>
	

    <body>
        <!-- Corps de la page -->
		<div id="backgroundPoem">
		
			<img id="bg_bord_haut" class= "bg_bord" src="images/Fond_bord_haut.png" ></img>
			<img id="bg_bord_bas" class= "bg_bord" src="images/Fond_bord_bas.png" ></img>
			
			<!-- Contenu de la page -->
			<div id="content_page">
			
			<!-- Image en-tête -->
			<img id="en_tete" src="images/fleur_contour.png"></img>
			
			<div id="contenu">
			
			
				<!-- Formulaire -->
				<form method="POST" action="traitement.php" enctype="multipart/form-data">
					<!-- Choix saison -->
					<div id="choix_saison" class="div_form">
						<label>Saison : </label>
					
						<select id="saison" name="saison">
							<option value="1">Frétillement</option>
							<option value="2">Aux portes de la vie</option>
							<option value="3">Croissance</option>
							<option value="4">Eclosion</option>
						</select>
					</div>
					
					<!-- Choix numero poème -->
					<div id="choix_numero" class="div_form">
						<label>Numéro poème : </label>
						<input id="numero_poeme" type="number" name="numero_poeme" value="1" min="1" max="15" step="1">
					</div>
					
					<!-- Titre poème -->
					<div id="choix_titre" class="div_form">
						<label>Titre poème : </label>
						<input id="titre_poeme" type="text" name="titre_poeme">
					</div>
					
					<!-- Intégration strophe -->
					<div id="integration_strophe_0" class="div_form strophe">
						<h3>Strophe 1</h3>
						
						<div class="ligne_strophe">
							<label>ligne 1 <span>(max 50 caract.)</span> : </label>
							<input id="lg1[0]" type="text" name="lg1[0]" maxlength="50">
						</div>
						
						<div class="ligne_strophe">
							<label>ligne 2 <span>(max 50 caract.)</span> : </label>
							<input id="lg2[0]" type="text" name="lg2[0]" maxlength="50">
						</div>
						
						<div class="ligne_strophe">
							<label>ligne 3 <span>(max 50 caract.)</span> : </label>
							<input id="lg3[0]" type="text" name="lg3[0]" maxlength="50">
						</div>
						
						<div class="ligne_strophe">
							<label>ligne 4 <span>(max 50 caract.)</span> : </label>
							<input id="lg4[0]" type="text" name="lg4[0]" maxlength="50">
						</div>
						
						<div class="ligne_strophe">
							<label>ligne 5 <span>(max 50 caract.)</span> : </label>
							<input id="lg5[0]" type="text" name="lg5[0]" maxlength="50">
						</div>
					</div>
					
					<!-- Bouton : ajout strophe -->
					<input id="ajout_strophe" type="button" onclick="plusStrophe()" class="div_form" value="Ajouter strophe">
					
					<!-- Bouton : ajout strophe -->
					<input id="valider_form" type="submit" class="div_form" value="Générer fichiers">  <!-- onclick="genereFichiers()" -->
				</form>
				
				<!-- Formulaire caché -->
				<!--<form action="traitement.php" id="ghost_form">-->
				
					<!-- Titre fichier -->
					<!--<input id="titre_fichier_js" type="text" name="titre_fichier_js">-->
					
					<!-- Titre contenu -->
					<!--<input id="contenu_fichier" type="text" name="contenu_fichier">-->
				
					<!-- Bouton : ajout strophe -->
					<!--<input id="valider_ghost_form" type="submit" name="envoie">
				</form>-->
			
			
			</div><!-- end content page div -->
			
		</div><!-- end main div -->
    </body>
</html>