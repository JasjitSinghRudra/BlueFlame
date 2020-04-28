<!DOCTYPE html>
<html>
<head>
	<title>Blue Flame</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
	
function scaleUp(obj, size){
obj.style.fontSize = size;
}

</script>
<style type="text/css">
button {
  background-color: #34eb3d;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
button:hover
  {
    box-shadow: 0px 5px 0px #117cee;
    transform:translateY(5px);
    background-color: #31c429;
  }
</style>
</head>
<body >
	<div class="nav">
		<label for="toggle">&#9776;</label>
		<input type="checkbox" id="toggle">
		<div class="menu">
			<a href="file:///C:/Users/rudra/Desktop/BLueFlame/vegetarian.html" onmouseover="scaleUp(this,'30px')" onmouseout="scaleUp(this,'16px')">Vegetarian</a>
			<a href="file:///C:/Users/rudra/Desktop/BLueFlame/Non-Vegetarian.html" onmouseover="scaleUp(this,'30px')" onmouseout="scaleUp(this,'16px')">Non-Vegetarian</a>
			<a href="file:///C:/Users/rudra/Desktop/BLueFlame/guest.php" style="text-decoration: underline;" onmouseover="scaleUp(this,'30px')" onmouseout="scaleUp(this,'16px')">Guest Recepies</a>
			<a href="file:///C:/Users/rudra/Desktop/BLueFlame/homepage.html"><img src="blueflame.png" alt="BlueFlame" align="right" width="80" height="80" id="flame"></a>
		</div>
		<div class="bodi" style="margin: 0; padding: 0; font-size: 50px; font-family: Papyrus; font-size:4vw;">
			<p align="center" style="font-size: 50px; font-family: Papyrus; font-size:2.8vw;"> Guest Recepies </p>
			<p align="center"><button type="button" ><a href="http://localhost/BlueFlame/guestpost.php" role="button" style="color: white">Post New Recepie</a></button></p>
			<p align="center"><button type="button" ><a href="http://localhost/BlueFlame/guestpostview.php" role="button" style="color: white">Explore Recepies</a></button></p>
		</div>
	</div>

</body>
</html>