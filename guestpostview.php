<?php
$file= fopen('content.txt','r');
?>
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
pre { 
  white-space: pre-line; 
  line-height: 20px;
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
			<a href="" style="text-decoration: underline;" onmouseover="scaleUp(this,'30px')" onmouseout="scaleUp(this,'16px')">Guest Recepies</a>
			<a href="file:///C:/Users/rudra/Desktop/BLueFlame/homepage.html"><img src="blueflame.png" alt="BlueFlame" align="right" width="80" height="80" id="flame"></a>
		</div>
		<div class="bodi" style="margin: 0; padding: 0;">
			<p align="left" style="font-size: 50px; font-family: Papyrus; font-size:2.8vw; line-height: 45px"> Guest Recepies </p>
			<p style="line-height: 1px">
                <pre>
                  <?php
                  while($line = fgets($file))
                  {
                    echo $line;
                  }
                  ?>
                </pre>
              </p>
		</div>
		
	</div>

</body>
</html>