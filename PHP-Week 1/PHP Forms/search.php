<?php
if(isset($_GET["query"])) {
    $search = htmlspecialchars($_GET["query"]);
    echo "You had searched for:" .$search;
} else {
    echo "The search result didn't found";
}
?>