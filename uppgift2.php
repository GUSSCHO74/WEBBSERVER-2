<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formhantering PHP</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="uppgift2.css?">
</head>
<body>
    <?php 
        $validUsername = "idk";    
        $validPassword = "123";

        $inputUsername = $_POST["username"];
        $inputPassword = $_POST["password"];

        if ($inputUsername == $validUsername && $inputPassword == $validPassword){
            echo "<h1 class='welcome'>Welcome $inputUsername!</h1>";
            echo "<button class='upload'>Upload file</button>";
        }
        else {
            echo "<h1 class='invalid'>Invalid username or password.</h1>";
        }
    ?>
</body>
</html>