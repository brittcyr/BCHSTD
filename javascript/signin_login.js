var menu_open = false;
var long_enough = false;
var pass_confirm = false;
var email_used=true;
var email_valid=false;
var username_valid=false;

//Opens menu for login or signup if no menu is open already

function view(id)
{
	if (!(menu_open))
	{
		document.getElementById(id).style.display="block";
		document.getElementById("signup").style.display="block";
		document.getElementById("button1").disabled=true;
		if (id == "signup")
		{
			document.getElementById("text1").value="";
			document.getElementById("text2").value="";
			document.getElementById("text3").value="";
			document.getElementById("text5").value="";
			document.getElementById("text5").focus();

		} else {
			document.getElementById("text4").focus();
		}
		menu_open = true;
	}
}

//Closes login/signup menu
function hide(id)
{
	document.getElementById(id).style.display="none";
	document.getElementById("signup").style.display="none";
	menu_open = false;
}


//confirm passwords are equivalent by displaying either "x.png" or "check.png"
function passwordCheck()
{

	var pass1 = document.getElementById("text1").value;
	var pass2 = document.getElementById("text2").value;


	if (pass1.length > 5){
		document.getElementById("help_message").style.opacity=0;
		long_enough = true;
	}else{
		document.getElementById("help_message").style.opacity=1;
		long_enough = false;
	}

	if (pass1 == pass2){
		pass_confirm = true;
		if (long_enough){
		document.getElementById("x").style.display="none";
		document.getElementById("check").style.display="inline";
		}
	}else{
		pass_confirm = false;
		document.getElementById("x").style.display="inline";
		document.getElementById("check").style.display="none";
	}

}

function emailCheck()
{

	var email = document.getElementById("text3").value;
	if (email==""){
		email_valid = false;
		email_used = false;
		return;
	}


	xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			var response =xmlhttp.responseText;
			if (response[0]== 0){
				email_used = true;
				alert("This email address is already being used.");
			} else {
				 email_used = false; 
			}if (response[1]== 0){
				email_valid = false;
			} else {
				 email_valid = true; 
			}

		}
	}
	var url = "ajax_php_files/check_email.php?email="+email;
	

	xmlhttp.open("GET",url, true);
	xmlhttp.send();

}

function checkSubmit(){

	emailCheck();
	passwordCheck();
	
	var username = document.getElementById("text5").value;
	if (username == ""){
		username_valid = false;
	} else {
		username_valid = true;
	}
	
	if (long_enough && pass_confirm && !email_used && email_valid && username_valid){
		document.getElementById("button1").disabled=false;
	}else{
		document.getElementById("button1").disabled=true;
	}
}
