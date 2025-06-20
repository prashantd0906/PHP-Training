<?php
$username = "";
$password = "";
$error = "";
$message = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username is empty
    if (empty($username)) {
        $error = "Username can't be empty!";
    } else {
        $message = "You entered Username: $username";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Form</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>

<form action="" method="post">
    Username: <input type="text" name="username" placeholder="Enter Username">
    <br/><br/>

    Password: <input type="text" name="password" placeholder="Enter Password">
    <br/><br/>

    <input type="submit" name="submit" value="Submit">
</form>

<!-- Show error or success message -->
<?php 
if (!empty($error)) {
    echo '<p class="error">' . $error . '</p>';
} elseif (!empty($message)) {
    echo '<p class="success">' . $message . '</p>';
}
?>

</body>
</html>
