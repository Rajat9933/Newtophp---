<?php
error_reporting(0);
/*Getting input from form*/
?>

<!DOCTYPE html>
<html>
<!__Getting information from form__>
<body>
<h3>Enter your name here.</h3>
<form action="rajat.php" method="get">
Name: <input type="text" name="name" placeholder="Name" required>
<br><br>
<input type="number" name="age" placeholder="age" required>
<input type="submit">
</form>
<br>
your name is <?php echo  $_GET["name"]?>
<br>
your age is <?php echo  $_GET["age"]?>
</body>
</html>