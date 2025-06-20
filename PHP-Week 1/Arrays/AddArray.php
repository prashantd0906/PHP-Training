<?php  
$car = array("company" => "Hyundai", "color" => "black");
$car["price"] = "10lakhs";
var_dump($car); // var_dump()- display detailed information about a variable.
?>

<?php
$fruit = array("Banana", "Apple", "Orange");
array_push($fruit, "Pipeapple");
var_dump($fruit); // var_dump()- display detailed information about a variable.
?>

<?php
$fruit = array("color" => "Yellow");
$fruit += ["color" => "red", "year" => 1964];
var_dump($fruit);
?>