<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $mail = $_REQUEST["Mail"];
        $pass = $_REQUEST["Password"];

        $email = "shaidultanim@gmail.com";
        $password = "siuuuuuuu7";

        if( $mail == $email && $pass == $password ){
                echo "You are successfully logged in";
        } else{
            echo "Invalid password or email";
        }
    ?>
    
</body>
</html>