<?php
setcookie("fruit", "apple", time()+(86400));
setcookie("color","blue",time()+(86400));
if(isset($_COOKIE['fruit'])){
    echo "Current Cookies\t:" .$_COOKIE['fruit'];
} else {
    echo "No cookies set";
}

echo "<br/>";
if(isset($_COOKIE['color'])){
    echo "Current Color:\t" .$_COOKIE['color'];
} else {
    echo "No colour set";
}
echo "<br/>";
print_r($_COOKIE);
?>