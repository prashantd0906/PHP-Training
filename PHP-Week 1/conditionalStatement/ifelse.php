<!-- Syntax
 ------------
if (condition) {
  // code to be executed if condition is true;
} else {
  // code to be executed if condition is false;
} -->

<?php
$t = date("H");

if ($t > "16") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>