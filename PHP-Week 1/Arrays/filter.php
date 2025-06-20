<!-- array_filter() is a PHP function that remove unwanted values from an array based on a condition. -->
<!-- syntax: array array_filter($array, $callback_function, $flag) -->

<!-- Remove empty values from an array -->
<?php
$items = array("apple", "", "banana", null, "mango");
$filtered = array_filter(($items));
print_r($filtered);
?>

<!-- Keep only even numbers -->

<?php
$numbers = [1,4,6,7,42,2];
$even = array_filter($numbers,function($n){
    return $n % 2 == 0; 
});

print_r($even);
?>