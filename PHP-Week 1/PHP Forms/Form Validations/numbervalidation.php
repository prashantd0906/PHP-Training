<?php
$username = '';
$password = '';
$error = '';
$message = '';

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (empty($username)) {
        $error = "Username can't be empty!";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $username)) {
        $error = "Only letters and spaces allowed in username.";
    }
    if (empty($password)) {
        $error = "Password can't be empty!";
    } else if (!is_numeric($password)) {
        $error = "Password must be a numeric value.";
    } elseif (!is_numeric($password)) {
        $error = "Password must be numeric";
    } else {
        $message = "You have entered the username: $username";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Form</title>
    <style>
        .error {
            color: red;
        }

        .message {
            color: green;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        Username: <input type="text" name="username" placeholder="Enter Username">
        <br /><br />

        Password: <input type="text" name="password" placeholder="Enter Password">
        <br /><br />

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (!empty($error)) {
        echo "<p class = 'error'>$error</p>";
    } elseif (!empty($message)) {
        echo "<p class = 'message'>$message</p>";
    }
    ?>