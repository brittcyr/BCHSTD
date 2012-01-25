var color="red";
var CANDIDATE_COLORS = new Object();
CANDIDATE_COLORS["Romney"]="red";
CANDIDATE_COLORS["Paul"]="blue";
CANDIDATE_COLORS["Santorum"]="green";
CANDIDATE_COLORS["Gingrich"]="yellow"; 






function changeColor(id){
	document.getElementById(id).style.fill=color;
}

function changeCandidate(candidate_id){
	color = CANDIDATE_COLORS[candidate_id];
}
