<?php
error_reporting(0);
/* "POST" VS "GET" */
?>
<!DOCTYPE html>
<html>
<body>
<form type="password" method="post">
Password: <input type="password" name="password">
<input type="submit">
</form>
<br>
<?php echo $_POST["password"]; ?>
</body>
</html>