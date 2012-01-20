var menu_open = false;


function view(id)
{
	if (!(menu_open))
	{
		document.getElementById(id).style.display="block";
		menu_open = true;
	}
}

function hide(id)
{
	document.getElementById(id).style.display="none";
	menu_open = false;
}

