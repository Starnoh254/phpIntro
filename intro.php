<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        // $name = "Starnoh";
        // echo ("Hello , my name is $name");
        // $age = 173;
        // if ($age > 18){
        //     echo "You are eligible to vote ";

        // }
        // else {
        //     echo "You are not eligible to vote";
        // }
        for ($i = 0 ; $i < 4 ; $i ++){
            echo "Iteration : $i <br> ";
        }

        function greet ($name){
            echo "<h1>Hello , my name is $name</h1>";
        }

        greet("John")
    
    ?>
</body>
</html>