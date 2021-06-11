<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<body>
<form action="Associativearray.php" method="post">
<input type="text" name="students">
<input type="submit">
</form>

<?php
/*In normal arrays we access elements using there index 
position & in associates arrays we access elements using key value=(Jim).*/

/* Here I am storing student's name along with there grade using "Associativ array"*/

$grades = array("Jim"=>"A+", "Tim"=>"A", "Cook"=>"B++");
$grades["Tim"] = "A";
/*echo $grades["Tim"];*/
/*echo count($grades);*/
echo $grades[$_POST["students"]];
?>
</body>
</html>