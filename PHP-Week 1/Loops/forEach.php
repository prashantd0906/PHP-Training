<!-- foreach loop - Loops through a block of code for each element in an array or each property in an object. -->

<?php
// $color = array("Blue", "green", "yellow");
// foreach($color as $c){
//     echo "$c\t"; // output: Blue green yellow
// }
?>

<?php
// $person = array("name" => "prashant", "company" => "ccube");
// foreach($person as $x => $y){
//     echo "$x:$y\t"; //output: name:prashant company:ccube
// }
?>

<?php
// class Car{
//     public $model;
//     public $color;
//     public function __construct($model, $color){
//         $this->model= $model;
//         $this->color= $color;
//     }
// }
// $mycar = new Car("x60", "White");
// foreach($mycar as $x => $y){
//     echo "$x\t:$y\t"; // output: model :x60 color :White
// }
?>

<?php
// $colors = array("green", "blue", "red");
// foreach ($colors as $x) {
//     if ($x == "blue")
//         break;
//     echo $x; // output: green
// }
?>

<?php
// $colors = array("green", "blue", "red");
// foreach ($colors as $x) {
//     if ($x == "blue")
//         continue;
//     echo "$x\t"; // output: green
// }
?>