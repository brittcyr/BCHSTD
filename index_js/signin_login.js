var menu_open = false;

//Opens menu for login or signup if no menu is open already
function view(id)
{
	if (!(menu_open))
	{
		document.getElementById(id).style.display="block";
		menu_open = true;
	}
}

//Closes login/signup menu
function hide(id)
{
	document.getElementById(id).style.display="none";
	menu_open = false;
}

//confirm passwords are equivalent
function passwordCheck(pass1, pass2)
{
	if (pass1 == pass2){
		//code
	}else{
		//code
	}
