<?php
if (isset($_GET['submit'])) {
	$id = $_GET['id'];
$irl = "http://api.steampowered.com/ISteamUser/GetPlayerBans/v1//?key=FBE6A5C249453A8516A55AAD5F87973F&steamids=$id&format=json";
$url = file_get_contents("$irl");
$json = json_decode($url, true);



$vac = $json['players'][0]['VACBanned'];
$id = $json['players'][0]['SteamId'];
$gameban = $json['players'][0]['NumberOfGameBans'];



echo "Steam ID :$id";
echo "<br>";

if ($id == null) {
	echo "Please check steam id";
}

if ($vac == true) {
    echo "Result: VAC BAN";
    echo "<br>";
}
else{
    echo "Result: VAC CLEAR";
    echo "<br>";
}

if 	($gameban == true){
    echo "Result: GameBan(Overwatch) ";
    echo "<br>";
}
else {
    echo "Result: No GameBan ";
    echo "<br>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web API</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-4">
<form method="GET">
	<input class="form-control" type="text" name="id" placeholder="Your steam 64 ID">
	<input class="form-control" type="submit"name="submit">
	</form>
</div>
<div class="col-8">
TEST 64 ID : "76561198350171798"<br>
TEST 64 ID  WITH GAMEBAN : 76561197965249579 <br>
TEST 64 ID WITH VAC : 76561197966167289 <br>
TEST 64 ID WITH VAC AND GAMEBAN : 76561198126089887br 
</div>
<div class="col-4"></div>
</div>

</div>
<br>
<p>Just to be clear, this was one of my first projects, I am not going to remove it but do not use it like i used it. If you want to use it please use modern standards for php coding, I updated it today just for fun, I wanted to improve code but I changed my mind, I will leave it like this because I want to remember my how miserable and bad I was.</p>
<p>HAPPY CODING.</p>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

</body>
</html>
