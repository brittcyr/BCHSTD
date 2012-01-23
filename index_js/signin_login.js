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

//confirm passwords are equivalent by displaying either "x.png" or "check.png"
function passwordCheck()
{

	var pass1 = document.getElementById("text1").select();
	var pass2 = document.getElementById("text2").select();
	//alert(pass1);
	//alert(pass2);

	if (pass1 == pass2){
		document.getElementById("x").style.display="none";
		document.getElementById("check").style.display="inline";

	}else{
		document.getElementById("x").style.display="inline";
		document.getElementById("check").style.display="none";
	}
}
