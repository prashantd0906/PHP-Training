<!-- Map : Applies a callback function to every element of an array and returns a new array. -->
<!-- syntax :
array_map(callback, array); -->

<!-- square of each numbers -->
<?php
$numbers = [1,4,2,5,3];
$square = array_map(function($n){
    return $n*$n;
},$numbers);

print_r($square);
echo "<br/>";
echo "<br/>";
?>

<!-- Multiple arrays -->
<?php
$arr1 = [1,4,6];
$arr2 = [2,1,2];
$sum = array_map(function($a,$b){
    return $a+$b;
},$arr1,$arr2);

print_r($sum);
echo "</br>";
echo "</br>";
?>

<!-- Built-in callback: -->
<?php
$words = array("Hello Cccube");
$upper = array_map('strtoupper', $words);
print_r($upper);
echo "</br>";
echo "</br>";
?>

<!-- Add a prefix to each string -->
<?php
$fruits = array("apple", "mango", "banana");
$withprefix = array_map(function($fruit){
    return "Fruit:" .$fruit;
},$fruits);
print_r($withprefix);
echo "</br>";
echo "</br>";
?>

<!-- Capitalize first letter (ucfirst) -->
<?php
$items = array("pen", "bottle", "notebook");
$capatalize = array_map("ucfirst",$items);
print_r($capatalize);
echo "</br>";
echo "</br>";
?>

<!-- check length of each word -->

<?php
$word = array("mobile", "ipad", "macbook");
$count = array_map(function($length){
    return strlen($length);
},$word);

print_r($count);
?>