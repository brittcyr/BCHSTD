<?php
session_start();
$source =  dirname(dirname(__FILE__));
require_once  "$source" . "/db.php";
require_once  "$source" . "/library.php";

$email = $_SESSION['user'];
$query = "SELECT * 
	  FROM users 
	  WHERE email='$email'";
$result = mysql_query($query) or die('bad query');
$result = mysql_fetch_array($result);
$home_state = $result['home_state'];
$political_party = $result['political_party'];
$username = $result['username'];
?>

<?php
echo	'Username: '
                . $username .' <br/><br/>' . "\n";
echo	'Email: '
                . $_SESSION['user'] .'<br/><br/>' . "\n";
?>

Home State:

<?php
if ($home_state == "AL")
{echo 'Alabama';}

if ($home_state == "AK")
{echo 'Alaska';}


if ($home_state == "AZ")
{echo 'ARIZONA';}

if ($home_state == "AR")
{echo 'ARKANSAS';}

if ($home_state == "CA")
{echo 'CALIFORNIA';}

if ($home_state == "CO")
{echo 'COLORADO';}

if ($home_state == "CT")
{echo 'CONNECTICUT';}

if ($home_state == "DE")
{echo 'DELAWARE';}

if ($home_state == "FL")
{echo 'FLORIDA';}

if ($home_state == "GA")
{echo 'GEORGIA';}

if ($home_state == "HI")
{echo 'HAWAII';}

if ($home_state == "ID")
{echo 'IDAHO';}

if ($home_state == "IL")
{echo 'ILLINOIS';}

if ($home_state == "IN")
{echo 'INDIANA';}

if ($home_state == "IA")
{echo 'IOWA';}

if ($home_state == "KA")
{echo 'KANASAS';}

if ($home_state == "KY")
{echo 'KENTUCKY';}

if ($home_state == "LA")
{echo 'LOUISIANA';}

if ($home_state == "ME")
{echo 'MAINE';}

if ($home_state == "MA")
{echo 'MASSACHUSETTS';}

if ($home_state == "MD")
{echo 'MARYLAND';}

if ($home_state == "MI")
{echo 'MICHIGAN';}

if ($home_state == "MN")
{echo 'MINNESOTA';}

if ($home_state == "MI")
{echo 'MISSISSIPPI';}

if ($home_state == "MO")
{echo 'MISSOURI';}

if ($home_state == "MT")
{echo 'MONTANA';}

if ($home_state == "NE")
{echo 'NEBRASKA';}

if ($home_state == "NV")
{echo 'NEVADA';}

if ($home_state == "NH")
{echo 'NEW HAMPSHIRE';}

if ($home_state == "NJ")
{echo 'NEW JERSEY';}

if ($home_state == "NM")
{echo 'NEW MEXICO';}

if ($home_state == "NY")
{echo 'NEW YORK';}

if ($home_state == "NC")
{echo 'NORTH CAROLINA';}

if ($home_state == "ND")
{echo 'NORTH DAKOTA';}

if ($home_state == "OH")
{echo 'OHIO';}

if ($home_state == "OK")
{echo 'OKLAHOMA';}

if ($home_state == "OR")
{echo 'OREGON';}

if ($home_state == "PA")
{echo 'PENNSYLVANIA';}

if ($home_state == "RI")
{echo 'RHODE ISLAND';}

if ($home_state == "SC")
{echo 'SOUTH CAROLINA';}

if ($home_state == "SD")
{echo 'SOUTH DAKOTA';}

if ($home_state == "TN")
{echo 'TENNESSEE';}

if ($home_state == "TX")
{echo 'TEXAS';}

if ($home_state == "UT")
{echo 'UTAH';}

if ($home_state == "VT")
{echo 'VERMONT';}

if ($home_state == "VA")
{echo 'VIRGINIA';}

if ($home_state == "WA")
{echo 'WASHINGTON';}

if ($home_state == "WV")
{echo 'WEST VIRGINIA';}

if ($home_state == "WI")
{echo 'WISCONSIN';}

if ($home_state == "WY")
{echo 'WYOMING';}
?>

<br/><br/>


Political Party:
<?php

if ($political_party == "DEMOCRAT")
{echo 'DEMOCRAT';}

if ($political_party == "REPUBLICAN")
{echo 'REPUBLICAN';}

if ($political_party == "INDEPENDENT")
{echo 'INDEPENDENT';}

if ($political_party == "OTHER")
{echo 'OTHER';}

?>
<br/><br/>
	<a id="edit" href="#" onclick="changeProfile()"> Edit Profile </a>


