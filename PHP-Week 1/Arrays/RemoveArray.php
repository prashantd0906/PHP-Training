<?php
$phone = array("apple", "samsung", "vivo");
array_splice($phone, 1,1); // array_splice - removes a portion of an array and can replace it
var_dump($phone);
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]); // unset - remove a variable or an element of an array
var_dump($cars)
?>

<?php
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]); // unset - remove a variable or an element of an array
var_dump($cars)
?> 

<?php
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars); //shift - Removes and returns the first element of an array.
var_dump($cars);
?>

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2); // diff - compares the values of two (or more) arrays, and returns the differences.
print_r($result);
?>