<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter username">
        <br/>
        <button name="button" value="set">Set Cookies</button>
        <br/>
        <button name="button" value="display">Display Cookies</button>
        <br/>
        <button name="button" value="delete">Delete Cookies</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['button'])){
    if($_POST['button'] == "set"){
        $val = $_POST['user']; //get the value from the text field
        setcookie("user", "$val");
        echo "Cookie is set";
    }

    if($_POST['button'] == "display"){
        if(isset($_COOKIE['user'])){
            echo $_COOKIE['user'];
        }
    }

    if($_POST['button'] == "delete"){
        if(isset($_COOKIE['user'])){
            setcookie("user", "null", -1);
            echo "Cookie deleted";
        }
    }
}
?>