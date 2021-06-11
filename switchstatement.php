<!DOCTYPE html>
<html>
<body>
<form action="switchstatement.php" method="post">
What was your grade?<br>
<input type="text" name="grade">
<input type="submit">
</form>
<?php
$grade = $_POST["grade"];
/*echo $grade;*/
switch($grade){
    case "A" :
        echo "You did Amazing!";
        break;
    case "B" :
        echo "You did very good";
        break;
    case "C" :
        echo "You did poorly";
        break;
    case "D" :
        echo "You did very bad";
        break;
    case "F" :
        echo "YOU FAIL!";
        break;  
        default:
        echo "Invalid Grade";          
}

?>
</body>
</html>