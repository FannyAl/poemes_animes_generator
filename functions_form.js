var fichierPoeme;

/******************************************/
/**** Ajout strophe dans le formulaire ****/
/******************************************/
function ajoutLigneStrophe(num, elemInte, indexE)
{
	var div_ligne_strophe = document.createElement('div');
	div_ligne_strophe.className = "ligne_strophe";
	
	var label_Ligne = document.createElement('label');
	label_Ligne.innerHTML = "ligne " + num + " <span>(max 50 caract.)</span> : ";
	
	var input_ligne = document.createElement('input');
	input_ligne.id = "lg"+num+"["+ indexE +"]";
	input_ligne.type = "text";
	input_ligne.name = "lg"+num+"["+ indexE +"]";
	input_ligne.maxlength = "50";
	
	div_ligne_strophe.appendChild(label_Ligne);
	div_ligne_strophe.appendChild(input_ligne);
	elemInte.appendChild(div_ligne_strophe);
}


function plusStrophe()
{
	// Détermination nombre de div
	var nb_div = document.getElementsByClassName('strophe').length;
	var ind = nb_div + 1;
	
	var div_integration_strophe = document.createElement('div');
	div_integration_strophe.id = "integration_strophe_" + String(ind);
	div_integration_strophe.className = "div_form strophe";
	
	var h3_strophe = document.createElement('h3');
	h3_strophe.innerHTML = "Strophe "+ind ;
	
	div_integration_strophe.appendChild(h3_strophe);
	
	var indexTab = ind-1;
	ajoutLigneStrophe("1", div_integration_strophe, indexTab);
	ajoutLigneStrophe("2", div_integration_strophe, indexTab);
	ajoutLigneStrophe("3", div_integration_strophe, indexTab);
	ajoutLigneStrophe("4", div_integration_strophe, indexTab);
	ajoutLigneStrophe("5", div_integration_strophe, indexTab);
	
	var form_elem = document.getElementsByTagName('form')[0];
	var buttonAjout = document.getElementById('ajout_strophe');
	form_elem.insertBefore(div_integration_strophe, buttonAjout);
	
	// Ajustement grandeur image de fond
	var img_background = document.getElementById('backgroundPoem');
	var size_form = form_elem.offsetHeight;
	img_background.style.height = String(size_form + 280) + "px";
}