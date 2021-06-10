<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<body>
<!__ checkbox start here__>
<form action="array.php" method="post">
Cricket: <input type="checkbox" name="sports[]" value="Cricket"><br>
Football: <input type="checkbox" name="sports[]" value="Football"><br>
Hockey: <input type="checkbox" name="sports[]" value="Hockey"><br>
<input type="submit">
</form>

<?php
$sports = $_POST["sports"];
echo $sports[0];
echo $sports[1];
echo $sports[2];
?>
<!__ checkbox end__>

<?php
/* array can handel millions of elements(data)
$friends = array("Jack", "Golu", "Rocky", "Ricky", "Tommy");
$friends[0] = "Sandy";
/*here I added an element inside of an array
$friends[5] = "Zooe";
echo $friends[5];
/*for counting all the elements inside of an array
echo count($friends);*/

?>
</body>
</html>