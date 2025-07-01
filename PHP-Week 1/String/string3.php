<?php
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
?>

<?php
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;
?>

<?php
$x = "Hello World!";
echo substr($x, 6, 5); // slice to the end
?>

<?php
$x = "Hello World!";
echo substr($x, 6); // slice to the end
?> 

<?php
$x = "Hello World";
echo substr($x, -5, 3); //Slice From the End
?>

<?php
$x = "Hi, how are you?";
echo substr($x, 5, -3); // Negative length
?> 