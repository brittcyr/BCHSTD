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
?>
        <form class="forms" action="home/update_profile.php" method="post">

<?php
echo	'Email: <input id="user_email" type="text" name="user_email" value="'
                . $_SESSION['user'] .'"/> <br/>' . "\n";
?>
Password: <input id="text1" type="password" name="user_password"/> <br/>
Confirm Password: <input id="text2" type="password" name="confirm_password"/> <br/>

Home State:

<select id="home_state" name="home_state">
<option></option>
<?php
if ($home_state == "AL")
{echo '<option value="AL" selected="selected">ALABAMA</option>';}
else
{echo '<option value="AL">ALABAMA</option>';}

if ($home_state == "AK")
{echo '<option value="AK" selected="selected">ALASKA</option>';}
else
{echo '<option value="AK">ALASKA</option>';}

if ($home_state == "AZ")
{echo '<option value="AZ" selected="selected">ARIZONA</option>';}
else
{echo '<option value="AZ">ARIZONA</option>';}

if ($home_state == "AR")
{echo '<option value="AR" selected="selected">ARKANSAS</option>';}
else
{echo '<option value="AR">ARKANSAS</option>';}

if ($home_state == "CA")
{echo '<option value="CA" selected="selected">CALIFORNIA</option>';}
else
{echo '<option value="CA">CALIFORNIA</option>';}

if ($home_state == "CO")
{echo '<option value="CO" selected="selected">COLORADO</option>';}
else
{echo '<option value="CO">COLORADO</option>';}

if ($home_state == "CT")
{echo '<option value="CT" selected="selected">CONNECTICUT</option>';}
else
{echo '<option value="CT">CONNECTICUT</option>';}

if ($home_state == "DE")
{echo '<option value="DE" selected="selected">DELAWARE</option>';}
else
{echo '<option value="DE">DELAWARE</option>';}

if ($home_state == "FL")
{echo '<option value="FL" selected="selected">FLORIDA</option>';}
else
{echo '<option value="FL">FLORIDA</option>';}

if ($home_state == "GA")
{echo '<option value="GA" selected="selected">GEORGIA</option>';}
else
{echo '<option value="GA">GEORGIA</option>';}

if ($home_state == "HI")
{echo '<option value="HI" selected="selected">HAWAII</option>';}
else
{echo '<option value="HI">HAWAII</option>';}

if ($home_state == "ID")
{echo '<option value="ID" selected="selected">IDAHO</option>';}
else
{echo '<option value="ID">IDAHO</option>';}

if ($home_state == "IL")
{echo '<option value="IL" selected="selected">ILLINOIS</option>';}
else
{echo '<option value="IL">ILLINOIS</option>';}

if ($home_state == "IN")
{echo '<option value="IN" selected="selected">INDIANA</option>';}
else
{echo '<option value="IN">INDIANA</option>';}

if ($home_state == "IA")
{echo '<option value="IA" selected="selected">IOWA</option>';}
else
{echo '<option value="IA">IOWA</option>';}

if ($home_state == "KA")
{echo '<option value="KA" selected="selected">KANASAS</option>';}
else
{echo '<option value="KA">KANASAS</option>';}

if ($home_state == "KY")
{echo '<option value="KY" selected="selected">KENTUCKY</option>';}
else
{echo '<option value="KY">KENTUCKY</option>';}

if ($home_state == "LA")
{echo '<option value="LA" selected="selected">LOUISIANA</option>';}
else
{echo '<option value="LA">LOUISIANA</option>';}

if ($home_state == "ME")
{echo '<option value="ME" selected="selected">MAINE</option>';}
else
{echo '<option value="ME">MAINE</option>';}

if ($home_state == "MA")
{echo '<option value="MA" selected="selected">MASSACHUSETTS</option>';}
else
{echo '<option value="MA">MASSACHUSETTS</option>';}

if ($home_state == "MD")
{echo '<option value="MD" selected="selected">MARYLAND</option>';}
else
{echo '<option value="MD">MARYLAND</option>';}

if ($home_state == "MI")
{echo '<option value="MI" selected="selected">MICHIGAN</option>';}
else
{echo '<option value="MI">MICHIGAN</option>';}

if ($home_state == "MN")
{echo '<option value="MN" selected="selected">MINNESOTA</option>';}
else
{echo '<option value="MN">MINNESOTA</option>';}

if ($home_state == "MI")
{echo '<option value="MI" selected="selected">MISSISSIPPI</option>';}
else
{echo '<option value="MI">MISSISSIPPI</option>';}

if ($home_state == "MO")
{echo '<option value="MO" selected="selected">MISSOURI</option>';}
else
{echo '<option value="MO">MISSOURI</option>';}

if ($home_state == "MT")
{echo '<option value="MT" selected="selected">MONTANA</option>';}
else
{echo '<option value="MT">MONTANA</option>';}

if ($home_state == "NE")
{echo '<option value="NE" selected="selected">NEBRASKA</option>';}
else
{echo '<option value="NE">NEBRASKA</option>';}

if ($home_state == "NV")
{echo '<option value="NV" selected="selected">NEVADA</option>';}
else
{echo '<option value="NV">NEVADA</option>';}

if ($home_state == "NH")
{echo '<option value="NH" selected="selected">NEW HAMPSHIRE</option>';}
else
{echo '<option value="NH">NEW HAMPSHIRE</option>';}

if ($home_state == "NJ")
{echo '<option value="NJ" selected="selected">NEW JERSEY</option>';}
else
{echo '<option value="NJ">NEW JERSEY</option>';}

if ($home_state == "NM")
{echo '<option value="NM" selected="selected">NEW MEXICO</option>';}
else
{echo '<option value="NM">NEW MEXICO</option>';}

if ($home_state == "NY")
{echo '<option value="NY" selected="selected">NEW YORK</option>';}
else
{echo '<option value="NY">NEW YORK</option>';}

if ($home_state == "NC")
{echo '<option value="NC" selected="selected">NORTH CAROLINA</option>';}
else
{echo '<option value="NC">NORTH CAROLINA</option>';}

if ($home_state == "ND")
{echo '<option value="ND" selected="selected">NORTH DAKOTA</option>';}
else
{echo '<option value="ND">NORTH DAKOTA</option>';}

if ($home_state == "OH")
{echo '<option value="OH" selected="selected">OHIO</option>';}
else
{echo '<option value="OH">OHIO</option>';}

if ($home_state == "OK")
{echo '<option value="OK" selected="selected">OKLAHOMA</option>';}
else
{echo '<option value="OK">OKLAHOMA</option>';}

if ($home_state == "OR")
{echo '<option value="OR" selected="selected">OREGON</option>';}
else
{echo '<option value="OR">OREGON</option>';}

if ($home_state == "PA")
{echo '<option value="PA" selected="selected">PENNSYLVANIA</option>';}
else
{echo '<option value="PA">PENNSYLVANIA</option>';}

if ($home_state == "RI")
{echo '<option value="RI" selected="selected">RHODE ISLAND</option>';}
else
{echo '<option value="RI">RHODE ISLAND</option>';}

if ($home_state == "SC")
{echo '<option value="SC" selected="selected">SOUTH CAROLINA</option>';}
else
{echo '<option value="SC">SOUTH CAROLINA</option>';}

if ($home_state == "SD")
{echo '<option value="SD" selected="selected">SOUTH DAKOTA</option>';}
else
{echo '<option value="SD">SOUTH DAKOTA</option>';}

if ($home_state == "TN")
{echo '<option value="TN" selected="selected">TENNESSEE</option>';}
else
{echo '<option value="TN">TENNESSEE</option>';}

if ($home_state == "TX")
{echo '<option value="TX" selected="selected">TEXAS</option>';}
else
{echo '<option value="TX">TEXAS</option>';}

if ($home_state == "UT")
{echo '<option value="UT" selected="selected">UTAH</option>';}
else
{echo '<option value="UT">UTAH</option>';}

if ($home_state == "VT")
{echo '<option value="VT" selected="selected">VERMONT</option>';}
else
{echo '<option value="VT">VERMONT</option>';}

if ($home_state == "VA")
{echo '<option value="VA" selected="selected">VIRGINIA</option>';}
else
{echo '<option value="VA">VIRGINIA</option>';}

if ($home_state == "WA")
{echo '<option value="WA" selected="selected">WASHINGTON</option>';}
else
{echo '<option value="WA">WASHINGTON</option>';}

if ($home_state == "WV")
{echo '<option value="WV" selected="selected">WEST VIRGINIA</option>';}
else
{echo '<option value="WV">WEST VIRGINIA</option>';}

if ($home_state == "WI")
{echo '<option value="WI" selected="selected">WISCONSIN</option>';}
else
{echo '<option value="WI">WISCONSIN</option>';}

if ($home_state == "WY")
{echo '<option value="WY" selected="selected">WYOMING</option>';}
else
{echo '<option value="WY">WYOMING</option>';}
?>
</select>
<br/>


Political Party:
<?php
echo '
<select id="political_party" name="political_party">
<option></option>';
if ($political_party == "DEMOCRAT")
{echo '<option value="DEMOCRAT" selected="selected">DEMOCRAT</option>';}
else
{echo '<option value="DEMOCRAT">DEMOCRAT</option>';}

if ($political_party == "REPUBLICAN")
{echo '<option value="REPUBLICAN" selected="selected">REPUBLICAN</option>';}
else
{echo '<option value="REPUBLICAN">REPUBLICAN</option>';}

if ($political_party == "INDEPENDENT")
{echo '<option value="INDEPENDENT" selected="selected">INDEPENDENT</option>';}
else
{echo '<option value="INDEPENDENT">INDEPENDENT</option>';}

if ($political_party == "OTHER")
{echo '<option value="OTHER" selected="selected">OTHER</option>';}
else
{echo '<option value="OTHER">OTHER</option>';}

?>
</select>

	<input id="button1" type="submit" value="Change Profile" />
      </form>


