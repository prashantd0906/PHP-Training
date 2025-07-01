<?php
$cars = array("brand" => "Ford", "model" => "Mustang","Year" => 1989);
var_dump($cars);
?>

<?php
$bags = array("company" => "wildcraft", "price" => 2500, "color" => "black");
foreach($bags as $x => $y){
    echo "$x:$y <br>";
}
?>
