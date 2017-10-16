<!DOCTYPE html>
<html>
<head>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<meta charset=utf-8 />
<title>JS Bin</title>
</head>
<body>
  <input type="text" id="titre_insert" name="titre_insert" size="50"/>
<span class="erreur"style="display:none; color:#F00;"></span>
  
<input type="text" id="auteur_insert" name="auteur_insert" size="50"/>
<span class="erreur"style="display:none; color:#F00;"></span>
 
<!--fenêtre DIALOG -->
<div style="display: none;" id="dialog_si_erreur" title="Erreur !">
    <p>Le formulaire est incomplet !</p>
</div>
  
<input type="button"  class="etape_2" value="Etape suivante &gt;&gt;" />
 <footer>
 	<script type="text/javascript">
 		//Ids des input text et erreurs a afficher
	var textErrors={
	     'titre_insert' : 'Entre un titre',
	     'auteur_insert' : 'Entre un auteur'
	};
	//on sauvegarde le contenu du dialog
	var dialogId= "#dialog_si_erreur";
	var startDialog=$(dialogId).html();
	 
	$(function(){
	  $('.etape_2').click(function(){
	    //On reinitialise le contenue du Dialog
	    $(dialogId).html(startDialog);
	    var errors="";
	    //VERIF CHAMP TITRE
	    $("input[type='text']").each(function(){
	      //Si le input est vide
	      if($(this).val()===""){
	        //on recupere le text erreur
	        errors=textErrors[$(this).attr('id')];
	        //on affiche l'erreur a cote
	        $(this).next(".erreur").show().text(errors);
	        //on rajoute le texte dans le dialog
	        var text = document.createTextNode(errors);
	        var nextLine = document.createElement("br");
	        $(dialogId).append(text);
	        $(dialogId).append(nextLine);
	      //si le input n'est pas vide
	      }else{
	        //on cache l'erreur
	        $(this).next(".erreur").hide();
	      }
	    });
	    //Si l'erreur existe
	    if(errors!==""){
	      //on affiche le dialog
	      $(dialogId).dialog();
	    }else{
	      //sinon on le cache
	      $(dialogId).dialog("close");
	    }
	  });
	});
 	</script>
 </footer>
</body>
</html>