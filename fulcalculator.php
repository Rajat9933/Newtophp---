<!DOCTYPE html>
<html>
<body>
<!__to calculate decimal numbers we have to add "step=0.1"__>
<form action="fulcalculator.php" method="post">
First num: <input type="number" step="0.0000001" name="num1"><br>
OP: <input type="oprator" name="op"><br>
Second num: <input type="number" step="0.0000001" name="num2"><br>
<input type="submit">
</form>
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if($op == "+"){
    echo $num1 + $num2;
}
elseif($op == "-"){
    echo $num1 - $num2;
}
elseif($op == "*"){
    echo $num1 * $num2;
}
elseif($op == "/"){
    echo $num1 / $num2;
}
else {
   echo "error";
}
?>
</body>
</html>