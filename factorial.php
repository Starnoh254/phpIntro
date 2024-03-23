<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Factorial of a number </h1>
    <form method="POST" action="factorial.php"> 
        Enter the number:  <input type="number" name="num" required><br/>
        <input type="submit" value="Submit" >
    </form>
    <?php
        function factorial($num){
            $result = $num;
            for($i = $num - 1 ; $i >= 1; $i--) {
                $result *= $i;
            }
            return $result;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST['num'];
            echo "The factorial of ". $num . " is : ".factorial($num);
        }
        
    ?>
</body>
</html>