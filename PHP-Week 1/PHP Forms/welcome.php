<html>
    <body>
        <?php
            if(isset($_POST["name"]) && isset($_POST["email"])){
                $name = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                echo "<p>Welcome: $name</p>";
                echo "<p>Your email is: $email</p>";
            } else {
                echo "No data submitted";
            }
        ?>
    </body>
</html>