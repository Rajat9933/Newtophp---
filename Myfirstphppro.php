<?php
$characterName = "Ramesh";
$characterAge = 60;
echo "Hello world!";
echo " Once a man called $characterName lived in a village.<br>";
echo " He was $characterAge years old.<br>";
echo " $characterName worked in his near by farm,<br>";
echo " but $characterName does't liked to work in farm<br>";
echo " also $characterName does't liked to be called $characterAge year old.<br><br><br>";
/* we use this strtoupper for making character uppercase*/
$phrase = "India<br><br>"; 
echo strtoupper($phrase);
/*to figure out the length(number) of the character*/
echo "to figure out the length of the character<br><br>";
echo strlen($phrase);
/* to figureout first word of the character*/ 
$phrase = "Code academy";
echo  $phrase[0];
/* to figureout second word of hte character*/ 
echo $phrase[1];
/* to modify individual characters*/
echo $phrase[0] = "t";
/* for replace the character*/
echo str_replace("Code", "Python", $phrase);
/*to grab specific word in a row */
echo substr($phrase, 5, 3);
/*>>>>Working with numbers<<<<<*/
echo "<br><br><strong>Woking with numbers!<strong><br>";
/*php is able to any math*/
echo 5 * 5;
echo 8 / 2;
echo 8 - 7;

?>

