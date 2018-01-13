<?php
echo "Check if user have vac or overwatch <br>";
if (isset($_GET['submit'])) {
	$id = $_GET['id'];
$irl = "http://api.steampowered.com/ISteamUser/GetPlayerBans/v1//?key=FBE6A5C249453A8516A55AAD5F87973F&steamids=$id&format=json";
$url = file_get_contents("$irl");
$json = json_decode($url, true);
//  FETCH
$vac = $json['players'][0]['VACBanned'];
$id = $json['players'][0]['SteamId'];
$gameban = $json['players'][0]['NumberOfGameBans'];
// Echo "fix this pls"
echo "<br>";
echo "<br>";
echo "<br>";
echo "Steam ID :$id";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if ($id == null) {
	echo "Please check steam id, or contact us support@cirkovic.eu.org";
	echo "<br>";
}
echo "<br>";
echo "<br>";
echo "<br>";

if ($vac == true) {
	echo "VAC BAN";
}
elseif ($vac == !true) {
	echo "No vac BAN";
}
echo "<br>";
echo "<br>";
if 	($gameban == true){
	echo "gameban AHAHAH";
}
elseif ($gameban == !true) {
	echo "No gameban ";
}
}
?>
<form method="GET">
	<input type="text" name="id" placeholder="Your steam 64 ID">
	<input type="submit"	name="submit">
	<form>
<BR>
<BR>
<BR>
TEST 64 ID : "76561198350171798"
<br>
<br>

TEST 64 ID  WITH GAMEBAN : 76561197965249579
<br>
<br>

TEST 64 ID WITH VAC : 76561197966167289

<br>
<br>

TEST 64 ID WITH VAC AND GAMEBAN : 76561198126089887



