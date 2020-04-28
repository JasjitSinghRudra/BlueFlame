<!DOCTYPE html>
<html>
<head>
	<title>Blue Flame</title>
</head>
<body>
<p><a class="btn btn-default" href="http://localhost/BlueFlame/guestpost.php" role="button">&lt;&lt; Back </a></p>
</body>
</html>

<?php

$last = $_REQUEST['last'];
$first = $_REQUEST['first'];
$linespace= "\n";
$linedraw= "__________";

$write_file=fopen("content.txt","a");

fwrite($write_file,$last);
fwrite($write_file,$linespace);
fwrite($write_file,$linespace);
fwrite($write_file,$first);
fwrite($write_file,$linespace);
fwrite($write_file,$linespace);
fwrite($write_file,$linedraw);
fwrite($write_file,$linespace);
fclose($write_file);

$read_file=fopen("content.txt","r");
$dim_file=filesize("content.txt");
$content=fread($read_file,$dim_file);
fclose($read_file);

echo "Response Recorded";

?>