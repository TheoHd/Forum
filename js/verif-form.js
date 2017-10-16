function val(){	
	if(frm.nom.value == "")
	{
		alert("Entrez votre nom.");
		frm.nom.focus();
		return false;
	}
	if(frm.prenom.value == "")
	{
		alert("Entrez votre prénom.");
		frm.prenom.focus();
		return false;
	}
	if(frm.email.value == "")
	{
		alert("Entrez un e-mail.");
		frm.email.focus();
		return false;
	}
	if(frm.login.value == "")
	{
		alert("Entrez un nom d'utilisateur.");
		frm.login.focus();
		return false;
	}
	if(frm.mdp.value == "")
	{
		alert("Entrez un mot de passe.");
		frm.mdp.focus();
		return false;
	}
	if(frm.mdp2.value == "")
	{
		alert("Entrez la confirmation de mot de passe.");
		frm.mdp2.focus();
		return false;
	}
	if(frm.mdp2.value != frm.mdp.value)
	{
		alert("Les deux mots de passes ne sont pas identiques.");
		frm.mdp.focus();
		return false;
	}	

	if(frm.note.checked == false){
	        alert('Checkbox non coché !');
	        return false;
	}
	return true;
}