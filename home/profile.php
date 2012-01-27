<?php
session_start();
$source =  dirname(dirname(__FILE__));
require_once  "$source" . "/db.php";
require_once  "$source" . "/library.php";

$email = $_SESSION['user'];
$query = "SELECT * FROM users WHERE email='$email'";
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
<option value="AL">ALABAMA</option>
<option value="AK">ALASKA</option>
<option value="AZ">ARIZONA</option>
<option value="AR">ARKANSAS</option>
<option value="CA">CALIFORNIA</option>
<option value="CO">COLORADO</option>
<option value="CT">CONNECTICUT</option>
<option value="DE">DELAWARE</option>
<option value="FL">FLORIDA</option>
<option value="GA">GEORGIA</option>
<option value="HI">HAWAII</option>
<option value="ID">IDAHO</option>
<option value="IL">ILLINOIS</option>
<option value="IN">INDIANA</option>
<option value="IA">IOWA</option>
<option value="KA">KANASAS</option>
<option value="KY">KENTUCKY</option>
<option value="LA">LOUISIANA</option>
<option value="ME">MAINE</option>
<option value="MA">MASSACHUSETTS</option>
<option value="MD">MARYLAND</option>
<option value="MI">MICHIGAN</option>
<option value="MN">MINNESOTA</option>
<option value="MI">MISSISSIPPI</option>
<option value="MO">MISSOURI</option>
<option value="MT">MONTANA</option>
<option value="NE">NEBRASKA</option>
<option value="NV">NEVADA</option>
<option value="NH">NEW HAMPSHIRE</option>
<option value="NJ">NEW JERSEY</option>
<option value="NM">NEW MEXICO</option>
<option value="NY">NEW YORK</option>
<option value="NC">NORTH CAROLINA</option>
<option value="ND">NORTH DAKOTA</option>
<option value="OH">OHIO</option>
<option value="OK">OKLAHOMA</option>
<option value="OR">OREGON</option>
<option value="PA">PENNSYLVANIA</option>
<option value="RI">RHODE ISLAND</option>
<option value="SC">SOUTH CAROLINA</option>
<option value="SD">SOUTH DAKOTA</option>
<option value="TN">TENNESSEE</option>
<option value="TX">TEXAS</option>
<option value="UT">UTAH</option>
<option value="VT">VERMONT</option>
<option value="VA">VIRGINIA</option>
<option value="WA">WASHINGTON</option>
<option value="WV">WEST VIRGINIA</option>
<option value="WI">WISCONSIN</option>
<option value="WY">WYOMING</option>
</select>
<br/>


Political Party:
<select id="political_party" name="political_party">
<option></option>
<option value="DEMOCRAT">DEMOCRAT</option>
<option value="INDEPENDENT">INDEPENDENT</option>
<option value="REPUBLICAN">REPUBLICAN</option>
<option value="OTHER_PARTY">OTHER PARTY</option>
</select>

	<input id="button1" type="submit" value="Change Profile" />
      </form>


