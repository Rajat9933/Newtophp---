<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<body>
<title>Game</title>
<form action="game.php" method="get">
Color: <input type="text" name="color">
<br>
About: <input type="text" name="spec">
<br>
Mountains: <input type="text" name="mount">
<br>
<input type="submit">
<br><br>
</body>
<?php
$color = $_GET["color"];
$sec = $_GET["spec"];
$mount = $_GET["mount"];

echo "Roses are $color<br>";
echo "Burj Khalifa is $sec<br>";
echo "Mountains are $mount<br>";
?>
</html>