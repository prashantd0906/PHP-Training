$<?php
$fruits=array("Mango", "Banana", "Grapes");
var_dump($fruits); // var_dump() - display detailed information about a variable.
echo count($fruits); // count() - returns the number of elements in an array
?>

<?php
$cars=array("skoda","thar","volvo");
$cars[1]="Ford";
var_dump($cars);
?>

<?php
$cars=array("skoda","thar","volvo");
foreach($cars as $x){
    echo "$x<br>";
}
?>

<?php
$cars[0]='volvo';
$cars[1]='Bmw';
$cars[2]='skoda';

array_push($cars, "Creta"); // adds one or more elements to the end of an array.
var_dump($cars);
?>

<?php
$company = array("ccube", "google", "Amazon");
print_r($company); //Outputs readable structure of arrays/objects
?>

