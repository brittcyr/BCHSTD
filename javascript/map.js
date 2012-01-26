var color="red";

var CANDIDATE_COLORS = new Object();
CANDIDATE_COLORS["Romney"]="red";
CANDIDATE_COLORS["Paul"]="blue";
CANDIDATE_COLORS["Santorum"]="green";
CANDIDATE_COLORS["Gingrich"]="yellow"; 

var COLORS_CANDIDATES = new Object();
COLORS_CANDIDATES["red"]="ROMNEY";
COLORS_CANDIDATES["blue"]="PAUL";
COLORS_CANDIDATES["green"]="SANTORUM";
COLORS_CANDIDATES["yellow"]="GINGRICH";

var STATES = ['AK', 'AL', 'AR', 'AZ', 'CA', 'CO', 'CT', 'DE', 'FL', 'GA', 'HI', 'IA', 'ID', 'IL', 'IN', 'KS', 'KY', 'LA', 'MA', 'MD', 'ME', 'MI', 'MN', 'MO', 'MS', 'MT', 'NC', 'ND', 'NE', 'NH', 'NJ', 'NM', 'NV', 'NY', 'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VA', 'VT', 'WA', 'WI', 'WV', 'WY']




function changeColor(state_id){
	var current_color = document.getElementById(state_id).style.fill;
	if (current_color != color){
		document.getElementById(state_id).style.fill=color;
		saveUpdate(state_id, COLORS_CANDIDATES[color]);
	}
}

function changeCandidate(candidate_id){
	color = CANDIDATE_COLORS[candidate_id];
}

function saveUpdate(state_id, candidate_id){
	xmlhttp=new XMLHttpRequest();

	var params = "state="+state_id+"&candidate="+candidate_id;  

	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			alert(xmlhttp.responseText);
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

function getUpdate(){
	xmlhttp=new XMLHttpRequest();


	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
			alert(xmlhttp.responseText);
		}
	}

	xmlhttp.open("GET","ajax_php_files/get_choices.php",true);
	xmlhttp.send();
}





