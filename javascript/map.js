var color="red";

var mode="choices";
var oldMode = "choices";

var finished_states = new Object();

var CANDIDATE_COLORS = new Object();
CANDIDATE_COLORS["ROMNEY"]="red";
CANDIDATE_COLORS["PAUL"]="blue";
CANDIDATE_COLORS["SANTORUM"]="green";
CANDIDATE_COLORS["GINGRICH"]="yellow"; 
CANDIDATE_COLORS["&nbsp;"]="gray";

var COLORS_CANDIDATES = new Object();
COLORS_CANDIDATES["red"]="ROMNEY";
COLORS_CANDIDATES["blue"]="PAUL";
COLORS_CANDIDATES["green"]="SANTORUM";
COLORS_CANDIDATES["yellow"]="GINGRICH";

var STATES = ['AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY']


function changeMode(new_mode){
    mode=new_mode
	if (mode == "choices")
	{
		document.getElementById("page_title").innerHTML="My Predictions";
		document.getElementById("hint").innerHTML="Select a candidate and click on the state to predict the winner";
		getUpdate();
	}
	if (mode == "results")
	{
		getResults();
		document.getElementById("page_title").innerHTML="Primary Results";
		document.getElementById("hint").innerHTML="These primaries have already been completed";
	}
	if (mode == "projections")
	{
		getProjections();
		document.getElementById("page_title").innerHTML="Poll Results";
		document.getElementById("hint").innerHTML="These are the popular picks";
	}
	if (mode == "friend")
	{
		document.getElementById("page_title").innerHTML="Friend's Predictions";
		document.getElementById("hint").innerHTML="These are your friend's predictions";
		var friend = document.getElementById("friend_text").value;
		getFriend(friend);
	}
}



function onHover(state_id){
	document.getElementById(state_id).style.opacity = ".5";
}

function changeColor(state_id){

	if (mode == "choices"){	
		if (state_id in finished_states){
			alert("This state has already held its primary or is currently holding its primary. You can no longer make or change this pick.");
			return;
		}
		var current_color = document.getElementById(state_id).style.fill;
		if (current_color != color){
			document.getElementById(state_id).style.fill=color;
			saveUpdate(state_id, COLORS_CANDIDATES[color]);
		}else{

			document.getElementById(state_id).style.fill = "gray";
			saveUpdate(state_id, "&nbsp;");
		}
	}
}

function changeCandidate(candidate_id){
	color = CANDIDATE_COLORS[candidate_id];
}

//save updates as user makes them
function saveUpdate(state_id, candidate_id){
	xmlhttp=new XMLHttpRequest();

	var params = "state="+state_id+"&candidate="+candidate_id;  
	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
		}
	}
/*
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length",params.length);
	xmlhttp.setRequestHeader("Connection", "close");
*/
	

	xmlhttp.open("GET","ajax_php_files/save_choice.php?"+params,true);
	xmlhttp.send();
	
}

// this function is called when the page loads to get the users selections
function getUpdate(){

	for (j=0; j<=49; j++){
			temp_state=STATES[j];
		if (temp_state in finished_states){
			document.getElementById(temp_state).style.fill="black";
		}else{
			document.getElementById(temp_state).style.fill="gray";
		}
	}
	xmlhttp=new XMLHttpRequest();

	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			var result = xmlhttp.responseText.split('!');
			var i = 1;
			for (i=1; i< result.length; i++){
				var temp = result[i].split('#');
				document.getElementById(temp[0]).style.fill=CANDIDATE_COLORS[temp[1]];

			}
		}
	}

	xmlhttp.open("GET","ajax_php_files/get_choices.php",true);
	xmlhttp.send();
}


function getResults()
{
	
	var j;
	var temp_state;
	if(mode == "results")
	{
		for (j=0; j<=49; j++){
			temp_state=STATES[j];
			document.getElementById(temp_state).style.fill="gray";
		}
	} 

	xmlhttp=new XMLHttpRequest();


	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			var result = xmlhttp.responseText.split('!');
			var i = 1;
			if (mode == "results")
			{
				for (i=1; i< result.length; i++){
					var temp = result[i].split('#');
					document.getElementById(temp[0]).style.fill=CANDIDATE_COLORS[temp[1]];
				}
			}else{
				for(i=1; i< result.length; i++){
					var temp = result[i].split('#');
					finished_states[temp[0]]=true;
				}getUpdate();
			}
		}
	}

	xmlhttp.open("GET","ajax_php_files/get_results.php",true);
	xmlhttp.send();
}


function getProjections()
{
	
	var j;
	var temp_state;
	for (j=0; j<=49; j++){
		temp_state=STATES[j];
		document.getElementById(temp_state).style.fill="gray";
	}


	

	xmlhttp=new XMLHttpRequest();


	xmlhttp.onreadystatechange=function(){
		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			var result = xmlhttp.responseText.split('!');
			var i = 1;
			for (i=1; i< result.length; i++){
				var temp = result[i].split('#');
				document.getElementById(temp[0]).style.fill=CANDIDATE_COLORS[temp[1]];
			}
		}
					
		
	}

	xmlhttp.open("GET","ajax_php_files/get_poll.php",true);
	xmlhttp.send();

}

function getFriend(friend)
{

	var j;
	var temp_state;
	for (j=0; j<=49; j++){
		temp_state=STATES[j];
		document.getElementById(temp_state).style.fill="gray";
	}




	xmlhttp=new XMLHttpRequest();


	xmlhttp.onreadystatechange=function(){
		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			if (xmlhttp.responseText == ""){
				close2();
				changeMode(mode);
				return;
			}
			var result = xmlhttp.responseText.split('!');
			var i = 1;
			for (i=1; i< result.length; i++){
				var temp = result[i].split('#');
				document.getElementById(temp[0]).style.fill=CANDIDATE_COLORS[temp[1]];
			}
			
		document.getElementById("page_title").innerHTML=friend+"'s Predictions";
		document.getElementById("hint").innerHTML="These are "+friend+ "'s predictions";
		}
					
		
	}

	var url = "ajax_php_files/get_friend.php?friend="+friend
	
	xmlhttp.open("GET", url,true);
	xmlhttp.send();

}



function view()
{
	oldMode = mode;
	mode = 'friend';
	document.getElementById("overlay").style.display="block";
	document.getElementById("friend_select").style.display="block";
	document.getElementById("friend_text").value = "";
	document.getElementById("friend_text").focus();

}

//Closes login/signup menu
function hide()
{
	document.getElementById("overlay").style.display="none";
	document.getElementById("friend_select").style.display="none";
}

function close2()
{
	mode = oldMode;
	document.getElementById(mode).checked = true;
	document.getElementById("overlay").style.display="none";
	document.getElementById("friend_select").style.display="none";
}
