var menu_open = false;
var long_enough = false;
var pass_confirm = false;
var email_used=false;

//Opens menu for login or signup if no menu is open already
function view(id)
{
	if (!(menu_open))
	{
		document.getElementById(id).style.display="block";
		document.getElementById("button1").disabled=true;
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

	var pass1 = document.getElementById("text1").value;
	var pass2 = document.getElementById("text2").value;


	if (pass1.length > 5){
		document.getElementById("help_message").style.display="none";
		long_enough = true;
	}else{
		document.getElementById("help_message").style.display="block";
		long_enough = false;
	}


	if (pass1 == pass2){
		pass_confirm = true;

	}else{
		pass_confirm = false;
	}

	checkSubmit();	
}

function emailCheck()
{

	var email = document.getElementById("text3").value;
	if (email==""){
		return;
	}


	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			var response =xmlhttp.responseText;
			if (response == 0){
				email_used = true;
				alert("This email address is already being used.");
			} else {
				 email_used = false; 
				checkSubmit();
			}
		}
	}
	var url = "ajax_php_files/check_email.php?email="+email;
	

	xmlhttp.open("GET",url, true);
	xmlhttp.send();

}

function checkSubmit(){

	//alert("Is it long enough? "+long_enough+" Do the passwords match? "+pass_confirm+" Is the email used? "+email_used);
	if (long_enough && pass_confirm && !email_used){
		document.getElementById("button1").disabled=false;
		document.getElementById("x").style.display="none";
		document.getElementById("check").style.display="inline";

	}else{
		document.getElementById("button1").disabled=true;
		document.getElementById("x").style.display="inline";
		document.getElementById("check").style.display="none";
	}
}
